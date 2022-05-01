<?php

namespace App\Http\Controllers;

use App\Assistant\ResponseFormatter;
use App\Repositories\TransactionRepository;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    protected $repository;

    public function __construct(TransactionRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index(Request $request){
        return ResponseFormatter::response($this->repository->index($request->all()));
    }


    public function show($id){
        return ResponseFormatter::response($this->repository->show($id));
    }


    public function store(Request $request){
        return ResponseFormatter::response($this->repository->store($request->all()));
    
    }

    public function update(Request $request,$id){
        return ResponseFormatter::response($this->repository->edit($request->all(),$id));
    }

}
