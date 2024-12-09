@extends('admin.layout.master')
@section('title', 'Quản lý thuộc tính sản phẩm')

@php
    $attribute = \App\Models\Attribute::findOrFail(request()->route('attributeId'));
@endphp

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
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $attribute->name }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <div class="card">
                <div>
                    <div class="card-header">
                        <h3 class="card-title">
                            Danh sách giá trị của:
                            <a href="{{ route('admin.attribute.edit', $attribute->id) }}" class="text-primary">
                                {{ $attribute->name }}
                            </a>
                        </h3>
                        <div class="card-actions">
                            <a href="{{ route('admin.attribute.variation.create', $attribute->id) }}"
                                class="btn btn-primary">
                                <i class="ti ti-plus fs-4 me-1"></i>
                                Thêm mới
                            </a>
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        @include('admin.layout.partials.toggle-column')
                        {{ $dataTable->table(['class' => 'table table-bordered table-striped'], true) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('libs-js')
    <script src="{{ asset('vendor/buttons.server-side.js') }}"></script>
@endpush

@push('scripts')
    {{ $dataTable->scripts() }}

    @include('admin.layout.partials.scripts', [
        'id_table' => $dataTable->getTableAttribute('id'),
    ])
@endpush
