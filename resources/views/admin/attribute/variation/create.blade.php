@extends('admin.layout.master')
@section('title', 'Thêm giá trị mới')

@push('styles')
@endpush

@section('content')
    <div class="container-fluid">
        <div class="page-header d-print-none">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title">
                        Quản lý thuộc tính sản phẩm
                    </h3>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.attribute.index') }}">
                                    Quản lý thuộc tính sản phẩm
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.attribute.variations', $attribute->id) }}">
                                    {{ $attribute->name }}
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Thêm giá trị mới
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <form action="{{ route('admin.attribute.variation.store') }}" method="POST">
                @csrf

                <input type="hidden" name="attribute_id" value="{{ $attribute->id }}">

                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Thông tin giá trị của:
                                    <a href="{{ route('admin.attribute.edit', $attribute->id) }}" class="text-primary">
                                        {{ $attribute->name }}
                                    </a>
                                </h3>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <label for="name" class="form-label">
                                            Tên giá trị
                                        </label>

                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ old('name') }}">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="position" class="form-label">
                                            Vị trí
                                        </label>

                                        <input type="number" class="form-control" name="position" id="position"
                                            value="{{ old('position') }}">
                                    </div>

                                    @if ($attribute->type == 2)
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="meta_value" class="form-label">
                                                Giá trị
                                            </label>

                                            <input type="color" class="form-control form-control-color"
                                                value="{{ old('meta_value') }}" name="meta_value" id="meta_value">
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="description" class="form-label">
                                            Mô tả
                                        </label>

                                        <textarea class="ck-editor" name="description" id="description">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Thao tác
                                </h3>
                            </div>

                            <div class="card-body d-flex align-items-center justify-content-between gap-4">
                                <a href="{{ route('admin.attribute.variations', $attribute->id) }}"
                                    class="btn btn-secondary w-100">
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
@endsection

@push('scripts')
    <script src="{{ asset('admin/js/finder.js') }}"></script>
@endpush
