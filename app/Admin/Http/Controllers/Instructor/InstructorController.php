<?php

namespace App\Admin\Http\Controllers\Instructor;

use App\Admin\DataTables\Instructor\InstructorDataTable;
use App\Admin\Http\Requests\Instructor\InstructorRequest;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Admin\Repositories\Instructor\InstructorRepositoryInterface;
use App\Admin\Services\Instructor\InstructorServiceInterface;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        InstructorRepositoryInterface $repository,
        InstructorServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(InstructorDataTable $dataTable)
    {
        return $dataTable->render('admin.instructor.index');
    }

    public function create()
    {
        $provinces = Province::all();
        return view('admin.instructor.create', compact('provinces'));
    }

    public function store(InstructorRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.instructor.index')->with('success', 'Thêm giảng viên mới thành công');
    }

    public function edit($id)
    {
        $instructor = $this->repository->findOrFail($id);
        $provinces = Province::all();
        return view('admin.instructor.edit', compact('instructor', 'provinces'));
    }

    public function update(InstructorRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.instructor.index')->with('success', 'Cập nhật thông tin thành công');
    }

    public function updateStatus(Request $request)
    {
        $data = $request->only('id', 'status');
        $id = $data['id'];
        $status = $data['status'];

        $this->repository->update($id, ['status' => $status]);

        return response()->json([
            'status' => 'success',
            'message' => 'Cập nhật trạng thái thành công'
        ]);
    }

    public function delete($id)
    {
        $instructor = $this->repository->findOrFail($id);

        $instructor->user->delete();
        $instructor->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Xóa thành công'
        ]);
    }
}