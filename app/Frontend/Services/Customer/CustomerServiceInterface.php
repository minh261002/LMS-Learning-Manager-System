<?php

namespace App\Admin\Services\Customer;

use Illuminate\Http\Request;

interface CustomerServiceInterface
{
    public function store(Request $request);

    public function update(Request $request);
}
