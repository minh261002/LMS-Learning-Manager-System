@extends('admin.layout.master')
@section('title', ' Quản lý người hướng dẫn')

@push('styles')
@endpush

@section('content')
    <div class="container-fluid">
        <div class="page-header d-print-none">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title">
                        Quản lý người hướng dẫn
                    </h3>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    <i class="bi bi-house"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Quản lý người hướng dẫn
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
                            Danh sách người hướng dẫn
                        </h3>
                        <div class="card-actions">
                            <a href="{{ route('admin.customer.create') }}" class="btn btn-primary">
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
    <script src="{{ asset('admin/js/buttons.server-side.js') }}"></script>
@endpush

@push('scripts')
    {{ $dataTable->scripts() }}

    @include('admin.layout.partials.scripts', [
        'id_table' => $dataTable->getTableAttribute('id'),
    ])

    <script>
        $(document).on('change', '.form-check-input', function() {
            let status = $(this).prop('checked') == true ? 2 : 1;
            let id = $(this).data('id');

            $.ajax({
                type: 'PATCH',
                dataType: 'json',
                url: '{{ route('admin.customer.update.status') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'status': status,
                    'id': id
                },
                success: function(data) {
                    FuiToast.success('Cập nhật trạng thái thành công');
                }
            });
        });
    </script>
@endpush