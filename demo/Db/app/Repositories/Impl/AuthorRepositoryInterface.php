<?php

namespace App\Repositories\Impl;

interface AuthorRepositoryInterface extends BaseRepositoryInterface
{
    public function create($data);

    public function update($id, $request);
}
