{{-- {{ $is_facebook }} --}}

@if ($is_facebook == 1 && $is_google == 0)
    <span class="badge bg-facebook text-facebook-fg">
        <i class="ti ti-brand-facebook fs-1"></i>
    </span>
@elseif($is_facebook == 0 && $is_google == 1)
    <span class="badge bg-google text-google-fg">
        <i class="ti ti-brand-google fs-1"></i>
    </span>
@else
    <span class="badge bg-secondary text-secondary-fg">
        <i class="ti ti-mail fs-1"></i>
    </span>
@endif
