<?php

namespace App\Frontend\Repositories\Instructor;

use App\Models\Instructor;
use App\Frontend\Repositories\BaseRepository;

class InstructorRepository extends BaseRepository implements InstructorRepositoryInterface
{
    public function getModel()
    {
        return Instructor::class;
    }
}