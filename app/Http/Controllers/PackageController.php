<?php

namespace App\Http\Controllers;

use App\Repositories\MarchentRepositoryEloquent;
use App\Repositories\PackageRepository;
use App\Repositories\PackageRepositoryEloquent;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    protected $repository;
    protected $repository_marchent;

    public function __construct(PackageRepository $repository,MarchentRepositoryEloquent $repository_marchent)
    {
            $this->repository = $repository;
            $this->repository_marchent = $repository_marchent;

    }




    public function index(Request $request){
            
            // if there is no marchent id 
            return response()->json($this->repository->index($request->all()));
    }
}
