<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface PackageTypeRepository.
 *
 * @package namespace App\Repositories;
 */
interface PackageTypeRepository extends RepositoryInterface
{
    //
    public function index($data);
}
