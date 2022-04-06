<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface StockRepository.
 *
 * @package namespace App\Repositories;
 */
interface StockRepository extends RepositoryInterface , BaseRepositoryInterface
{
    public function index($data);

    public function show($id);

    public function store($data);

    public function edit($data,$id);
    
}
