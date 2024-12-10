<?php

namespace App\Admin\Services\Customer;

use App\Admin\Repositories\Customer\CustomerRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerService implements CustomerServiceInterface
{
    protected $repository;

    public function __construct(CustomerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(Request $request)
    {
        $data = $request->validated();

        $data['image'] = $data['image'] ?? '/admin/images/not-found.jpg';
        $data['password'] = Hash::make($data['password']);

        $member = $this->repository->create($data);

        return $member;
    }

    public function update(Request $request)
    {
        $data = $request->validated();

        $data['image'] = $data['image'] ?? '/admin/images/not-found.jpg';

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        return $this->repository->update($data['id'], $data);
    }
}
