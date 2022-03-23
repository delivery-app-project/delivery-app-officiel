<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface AgencyRepository.
 *
 * @package namespace App\Repositories;
 */
interface AgencyRepository extends RepositoryInterface , BaseRepositoryInterface
{
    //

    public function index($data);

    public function show($id);


}
