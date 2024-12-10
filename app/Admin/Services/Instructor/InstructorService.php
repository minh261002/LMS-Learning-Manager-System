<?php

namespace App\Admin\Services\Instructor;

use App\Admin\Repositories\Customer\CustomerRepositoryInterface;
use App\Admin\Repositories\Instructor\InstructorRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class InstructorService implements InstructorServiceInterface
{
    protected $repository;
    protected $customerRepository;

    public function __construct(
        InstructorRepositoryInterface $repository,
        CustomerRepositoryInterface $customerRepository
    ) {
        $this->repository = $repository;
        $this->customerRepository = $customerRepository;
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();

            $customerInfo = $data['info'];

            $customerInfo['image'] = $customerInfo['image'] ?? '/admin/images/not-found.jpg';
            $customerInfo['password'] = Hash::make($customerInfo['password']);

            $customer = $this->customerRepository->create($customerInfo);
            $user_id = $customer->id;

            $instructorInfo = $data['instructor'];
            $instructorInfo['user_id'] = $user_id;

            DB::commit();
            return $this->repository->create($instructorInfo);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();

            $customerInfo = $data['info'];
            $instructorInfo = $data['instructor'];

            if (isset($customerInfo['password'])) {
                $customerInfo['password'] = Hash::make($customerInfo['password']);
            }

            if (isset($customerInfo['image'])) {
                $customerInfo['image'] = $customerInfo['image'] ?? '/admin/images/not-found.jpg';
            }

            $this->customerRepository->update($customerInfo['id'], $customerInfo);

            $instructor = $this->repository->update($instructorInfo['id'], $instructorInfo);
            DB::commit();
            return $instructor;
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}