$(document).ready(function () {
    let baseUrl = origin;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: baseUrl + '/api/books',
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            displayAllBook(res)
        }
    });

    function displayAllBook(books) {
        let str = "";
        for (let i = 0; i < books.length; i++) {
            str += `<tr id="book-${books[i].id}">
                            <td>${books[i].id}</td>
                            <td>${books[i].title}</td>
                            <td>${books[i].code}</td>
                            <td>${books[i].author}</td>
                            <td><button class="btn btn-primary edit-book" data-id="${books[i].id}">Update</button></td>
                            <td><button class="btn btn-danger delete-book" data-id="${books[i].id}">Delete</button></td>
                    </tr>`;
        }

        $('.book-list').html(str);
    }


    $("body").on("click", ".delete-book", function () {
        let id = $(this).attr("data-id");
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                url: baseUrl + "/api/books/delete/" + id,
                type: "GET",
                success: function (res) {
                    // console.log(res)
                    $(`#book-${id}`).remove();
                }
            })
        }
    })

    $("body").on("click", "#add-book", function () {
        $(".modal-add").show();
        $('.form-add').trigger("reset"); // reset form sau khi add
    });

    $('body').on('click', '#close', function () {
        $('.modal').hide();
    });


    function addBook(book) {
        let str = `<tr id="book-${book.id}">
                            <td>${book.id}</td>
                            <td>${book.title}</td>
                            <td>${book.code}</td>
                            <td>${book.author}</td>
                            <td><button class="btn btn-primary edit-book" data-id="${book.id}">Update</button></td>
                            <td><button class="btn btn-danger delete-book" data-id="${book.id}">Delete</button></td>
                    </tr>`;
        $('.book-list').prepend(str); //prepend add lên đầu trang
    }

    $('body').on('click', '.add-book', function () {
        let title = $('#book-title').val();
        let code = $('#book-code').val();
        let author = $('#book-author').val();
        $('.add-book').attr('disabled', true); //để k bấm add nhiều lần

        $.ajax({
            url: baseUrl + '/api/books',
            type: "POST",
            dataType: "json",
            data: {
                title: title,
                code: code,
                author: author
            },
            success: function (res) {
                console.log(res.data);
                $('.add-book').attr('disabled', false);
                $('.modal').hide();
                addBook(res.data);
            }
        });
    });


    $('body').on('click', '.edit-book', function () {
        $(".modal-update").show();
        let id = $(this).attr("data-id");

        $.ajax({
            url: baseUrl + '/api/books/' + id,
            type: "GET",
            dataType: 'json',
            success: function (res) {
                console.log(res.data);
                $('.book-id').val(res.data.id);
                $('.book-title').val(res.data.title);
                $('.book-code').val(res.data.code);
                $('.book-author').val(res.data.author);
            }
        });
    });


    $('body').on('click', '.update-book', function () {
        let id = $('.book-id').val();

        $.ajax({
            url: baseUrl + '/api/books/' + id,
            type: "POST",
            dataType: 'json',
            data: {
                id: id,
                title: $('.book-title').val(),
                code: $('.book-code').val(),
                author: $('.book-author').val(),
            },
            success: function (res) {
                console.log(res);
                $('.modal').hide();
                $(`#book-${id} td:nth-child(1)`).html(res.data.id);
                $(`#book-${id} td:nth-child(2)`).html(res.data.title);
                $(`#book-${id} td:nth-child(3)`).html(res.data.code);
                $(`#book-${id} td:nth-child(4)`).html(res.data.author);
            }
        });
    });
});
