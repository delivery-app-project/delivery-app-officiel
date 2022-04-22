<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface TransactionRepository.
 *
 * @package namespace App\Repositories;
 */
interface TransactionRepository extends RepositoryInterface , BaseRepositoryInterface
{
    //

    public function index($data);

    public function show($id);
    
    public function store($data);
    
}
