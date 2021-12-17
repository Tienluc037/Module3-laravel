<?php

namespace App\Repositories;

use App\Repositories\Impl\AuthorRepositoryInterface;
use Illuminate\Support\Facades\DB;

class AuthorRepository extends BaseRepository implements AuthorRepositoryInterface
{
    protected $table = "authors";

    public function create($data)
    {
        // TODO: Implement create() method.
        DB::table($this->table)->insert([
            'name' => $data->name,
            'phone' => $data->phone
        ]);
    }


    public function update($id,$request)
    {

        $data = $request->only("name","phone");
        DB::table("authors")->where("id","=",$id)->update($data);
        return $data;
    }
}
