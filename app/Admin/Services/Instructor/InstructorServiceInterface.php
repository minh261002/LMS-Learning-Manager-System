<?php

namespace App\Admin\Services\Instructor;

use Illuminate\Http\Request;

interface InstructorServiceInterface
{
    public function store(Request $request);

    public function update(Request $request);
}