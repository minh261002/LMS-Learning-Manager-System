<?php

namespace App\Admin\Http\Controllers\Module;

use App\Admin\DataTables\Module\ModuleDataTable;
use App\Admin\Repositories\Module\ModuleRepositoryInterface;
use App\Admin\Services\Module\ModuleServiceInterface;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Module\ModuleRequest;

class ModuleController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        ModuleRepositoryInterface $repository,
        ModuleServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(ModuleDataTable $dataTable)
    {
        return $dataTable->render('admin.module.index');
    }

    public function create()
    {
        return view('admin.module.create');
    }

    public function store(ModuleRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.module.index')->with('success', 'Thêm module mới thành công');
    }

    public function edit(int $id)
    {
        $module = $this->repository->findOrFail($id);
        return view('admin.module.edit', compact('module'));
    }

    public function update(ModuleRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.module.index')->with('success', 'Cập nhật module thành công');
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Xóa module thành công']);
    }
}