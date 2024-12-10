@extends('admin.layout.master')
@section('title', 'Thêm giảng viên mới')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="container-fluid">
        <div class="page-header d-print-none">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title">
                        Thêm giảng viên mới
                    </h3>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.instructor.index') }}">
                                    Quản lý giảng viên
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Thêm mới
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <form action="{{ route('admin.instructor.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-9">

                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-home-1" class="nav-link active" data-bs-toggle="tab"
                                            aria-selected="true" role="tab">
                                            Thông tin cá nhân
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-profile-1" class="nav-link" data-bs-toggle="tab"
                                            aria-selected="false" role="tab" tabindex="-1">
                                            Thông tin định danh
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-edu-1" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                            role="tab" tabindex="-1">
                                            Trình độ học vấn
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tabs-home-1" role="tabpanel">
                                        @include('admin.instructor.form.create-information')
                                    </div>
                                    <div class="tab-pane" id="tabs-profile-1" role="tabpanel">
                                        @include('admin.instructor.form.create-identify')
                                    </div>

                                    <div class="tab-pane" id="tabs-edu-1" role="tabpanel">
                                        @include('admin.instructor.form.create-edu')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="card-title mb-0">Trạng thái</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="info[status]" class="form-label">Trạng thái tài khoản</label>
                                    <select name="info[status]" class="form-control">
                                        <option value="2">Đang hoạt động</option>
                                        <option value="1">Tạm khóa</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="instructor[is_verify]" class="form-label">
                                        Trạng thái duyệt
                                    </label>

                                    <select name="instructor[is_verify]" class="form-control">
                                        <option value="1">Chờ duyệt</option>
                                        <option value="2">Đã duyệt</option>
                                        <option value="3">Từ chối</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="instructor[status]" class="form-label">
                                        Trạng thái giảng viên
                                    </label>

                                    <select name="instructor[status]" class="form-control">
                                        <option value="2">Đang hoạt động</option>
                                        <option value="1">Tạm khóa</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="info[role]" value="instructor">

                        <div class="card mt-3">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="card-title mb-0">Ảnh đại diện</h2>
                            </div>
                            <div class="card-body">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <span class="image img-cover image-target"><img class="w-100"
                                                src="{{ old('image') ? old('image') : asset('admin/images/not-found.jpg') }}"
                                                alt=""></span>
                                        <input type="hidden" name="info[image]" value="{{ old('image') }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Thao tác
                                </h3>
                            </div>

                            <div class="card-body d-flex align-items-center justify-content-between gap-4">
                                <a href="{{ route('admin.customer.index') }}" class="btn btn-secondary w-100">
                                    Quay lại
                                </a>

                                <button type="submit" class="btn btn-primary w-100">
                                    Thêm mới
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        var province_id = '{{ isset($customer->province_id) ? $customer->province_id : old('province_id') }}'
        var district_id = '{{ isset($customer->district_id) ? $customer->district_id : old('district_id') }}'
        var ward_id = '{{ isset($customer->ward_id) ? $customer->ward_id : old('ward_id') }}'
    </script>
@endsection

@push('scripts')
    <script src="{{ asset('admin/js/finder.js') }}"></script>
    <script src="{{ asset('admin/libs/litepicker/dist/litepicker.js?1692870487') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('.select2').select2({
            theme: 'bootstrap-5'
        });
    </script>
    @php
        $timestamp = time();
    @endphp
    <script src="{{ asset('admin/js/location.js') }}?v={{ $timestamp }}"></script>

    <script>
        const picker = new Litepicker({
            element: document.getElementById('datepicker-icon'),
            format: 'YYYY-MM-DD',
            showDropdowns: true,
            showWeekNumbers: false,
            singleMode: true,
            autoApply: true,
            autoRefresh: true,
            lang: 'vi-VN',
            mobileFriendly: true,
            resetButton: true,
            autoRefresh: true,
            dropdowns: {
                minYear: null,
                maxYear: null,
                months: true,
                years: true
            },
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    console.log(date1, date2);
                });
            }
        });

        const picker2 = new Litepicker({
            element: document.getElementById('datepicker-icon-1'),
            format: 'YYYY-MM-DD',
            showDropdowns: true,
            showWeekNumbers: false,
            singleMode: true,
            autoApply: true,
            autoRefresh: true,
            lang: 'vi-VN',
            mobileFriendly: true,
            resetButton: true,
            autoRefresh: true,
            dropdowns: {
                minYear: null,
                maxYear: null,
                months: true,
                years: true
            },
            setup: (picker2) => {
                picker2.on('selected', (date1, date2) => {
                    console.log(date1, date2);
                });
            }
        });
    </script>
@endpush
