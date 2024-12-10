{{-- {{ $is_facebook }} --}}

@if ($login_type == 2)
    <span class="badge bg-facebook text-facebook-fg">
        <i class="ti ti-brand-facebook fs-1"></i>
    </span>
@elseif($login_type == 3)
    <span class="badge bg-google text-google-fg">
        <i class="ti ti-brand-google fs-1"></i>
    </span>
@else
    <span class="badge bg-secondary text-secondary-fg">
        <i class="ti ti-mail fs-1"></i>
    </span>
@endif
