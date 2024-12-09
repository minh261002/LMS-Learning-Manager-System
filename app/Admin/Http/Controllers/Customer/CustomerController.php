<?php

namespace App\Admin\Http\Controllers\Customer;

use App\Admin\DataTables\Customer\CustomerDataTable;
use App\Admin\Http\Requests\Customer\CustomerRequest;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Admin\Repositories\Customer\CustomerRepositoryInterface;
use App\Admin\Services\Customer\CustomerServiceInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        CustomerRepositoryInterface $repository,
        CustomerServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(CustomerDataTable $dataTable)
    {
        return $dataTable->render('admin.customer.index');
    }

    public function create()
    {
        $provinces = Province::all();
        return view('admin.customer.create', compact('provinces'));
    }

    public function store(CustomerRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.customer.index')->with('success', 'Thêm khách hàng mới thành công');
    }

    public function edit($id)
    {
        $customer = $this->repository->findOrFail($id);
        $provinces = Province::all();
        return view('admin.customer.edit', compact('customer', 'provinces'));
    }

    public function update(CustomerRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.customer.index')->with('success', 'Cập nhật khách hàng thành công');
    }

    public function updateStatus(Request $request)
    {
        $data = $request->only('id', 'status');
        $id = $data['id'];
        $status = $data['status'];

        $this->repository->update($id, ['status' => $status]);

        return response()->json([
            'status' => 'success',
            'message' => 'Cập nhật trạng thái khách hàng thành công'
        ]);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Xóa khách hàng thành công'
        ]);
    }
}