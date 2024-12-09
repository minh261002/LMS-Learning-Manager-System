<?php

namespace App\Admin\Services\Admin;


use App\Admin\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminService implements AdminServiceInterface
{
    protected $repository;

    public function __construct(AdminRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(Request $request)
    {
        $data = $request->validated();
        $role = $data['role_id'];
        $data['image'] = $data['image'] ?? '/admin/images/not-found.jpg';
        unset($data['role_id']);
        $data['password'] = Hash::make($data['password']);

        if ($data['birthday']) {
            $data['birthday'] = date('Y-m-d', strtotime($data['birthday']));
        }

        $admin = $this->repository->create($data);

        $admin->roles()->attach($role);

        return $admin;
    }

    public function update(Request $request)
    {
        $data = $request->validated();
        $role = $data['role_id'];
        $data['image'] = $data['image'] ?? '/admin/images/not-found.jpg';
        unset($data['role_id']);

        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $admin = $this->repository->update($data['id'], $data);

        $admin->roles()->sync($role);

        return $admin;
    }

}
