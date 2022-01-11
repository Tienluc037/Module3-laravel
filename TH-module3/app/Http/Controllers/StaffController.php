<?php

namespace App\Http\Controllers;

use App\Http\Repositories\StaffRepository;
use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    public function index()
    {
        $staffs = Staff::all();
        return view("backend.staff.list",compact("staffs"));
    }

    public function create()
    {
        return view("backend.staff.create");
    }


    public function store()
    {
    }


    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return response()->json();
    }
}
