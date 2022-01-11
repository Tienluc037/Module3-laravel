<?php

namespace App\Http\Repositories;

use App\Http\Repositories\Impl\staffRepositoriesInterface;
use App\Models\staff;

class StaffRepository extends Baserepository implements staffRepositoriesInterface
{
    public function __construct(Staff $staff)
    {
        $this->model = $staff;
    }

    public function create($data)
    {
        $this->model->create($data);
    }
}
