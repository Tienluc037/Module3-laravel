<?php

namespace App\Http\Repositories\Impl;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function create($data);

    public function update($id,$request);

    public function getPostOfUser($userId);
}
