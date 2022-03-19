<?php

namespace App\Http\Controllers;

use App\Repositories\PackageTypeRepository;
use Illuminate\Http\Request;

class PackageTypeController extends Controller
{
    //
    protected $repository;

    public function __construct(PackageTypeRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index(Request $request){
        return response()->json($this->repository->index($request->all()));
    }
}
