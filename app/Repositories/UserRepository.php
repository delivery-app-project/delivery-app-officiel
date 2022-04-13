<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface UserRepository.
 *
 * @package namespace App\Repositories;
 */
interface UserRepository extends RepositoryInterface , BaseRepositoryInterface
{
    //


    public function store($data);

    public function edit($data,$id);

    public function show($id);

}
