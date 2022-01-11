<?php

namespace Database\Seeders;

use App\Models\staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new Staff();
        $staff->name = 'Nguyễn VĂn Đức';
        $staff->group = 'Quản trị hệ thống';
        $staff->phone = '123456789';
        $staff->email = 'nvd@gmail.com';
        $staff->gender = 'Nam';
        $staff->save();


        $staff = new Staff();
        $staff->name = 'Nguyễn thị Mai ';
        $staff->group = 'Lễ tân';
        $staff->phone = '123456789';
        $staff->email = 'ntm@gmail.com';
        $staff->gender = 'Nữ';
        $staff->save();


        $staff = new Staff();
        $staff->name = 'Dương thúy linh';
        $staff->group = 'Quản lý phòng';
        $staff->phone = '123456789';
        $staff->email = 'dtl@gmail.com';
        $staff->gender = 'Nữ';
        $staff->save();


        $staff = new Staff();
        $staff->name = 'Đỗ Đức Việt';
        $staff->group = 'Quản lý nhân sự';
        $staff->phone = '123456789';
        $staff->email = 'ddv@gmail.com';
        $staff->gender = 'Nam';
        $staff->save();
    }
}
