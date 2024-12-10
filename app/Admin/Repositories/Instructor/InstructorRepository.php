<?php

namespace App\Admin\Repositories\Instructor;

use App\Models\Instructor;
use App\Admin\Repositories\BaseRepository;

class InstructorRepository extends BaseRepository implements InstructorRepositoryInterface
{
    public function getModel()
    {
        return Instructor::class;
    }
}