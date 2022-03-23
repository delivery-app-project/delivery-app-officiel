<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PackageTypeCreateRequest;
use App\Http\Requests\PackageTypeUpdateRequest;
use App\Repositories\PackageTypeRepository;
use App\Validators\PackageTypeValidator;

/**
 * Class PackageTypesController.
 *
 * @package namespace App\Http\Controllers;
 */
class PackageTypesController extends Controller
{
    /**
     * @var PackageTypeRepository
     */
    protected $repository;

    /**
     * @var PackageTypeValidator
     */
    protected $validator;

    /**
     * PackageTypesController constructor.
     *
     * @param PackageTypeRepository $repository
     * @param PackageTypeValidator $validator
     */
    public function __construct(PackageTypeRepository $repository, PackageTypeValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $packageTypes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $packageTypes,
            ]);
        }

        return view('packageTypes.index', compact('packageTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PackageTypeCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PackageTypeCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $packageType = $this->repository->create($request->all());

            $response = [
                'message' => 'PackageType created.',
                'data'    => $packageType->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $packageType = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $packageType,
            ]);
        }

        return view('packageTypes.show', compact('packageType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packageType = $this->repository->find($id);

        return view('packageTypes.edit', compact('packageType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PackageTypeUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PackageTypeUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $packageType = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'PackageType updated.',
                'data'    => $packageType->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'PackageType deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'PackageType deleted.');
    }
}
