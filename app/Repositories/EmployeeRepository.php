<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface EmployeeRepository.
 *
 * @package namespace App\Repositories;
 */
interface EmployeeRepository extends RepositoryInterface, BaseRepositoryInterface
{
    public function index($data);

    public function show($id);

    public function store($data);
}
