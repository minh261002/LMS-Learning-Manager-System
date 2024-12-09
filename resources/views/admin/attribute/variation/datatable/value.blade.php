@php
    $attribute = \App\Models\Attribute::findOrFail($attribute_id);
@endphp

@if ($attribute->type == 1)
    {{ $name }}
@else
    <div class="w-full d-flex align-items-center justify-content-center">
        <div style="width:50px; height:50px; background-color:{{ $meta_value }};" class="rounded-3"></div>
    </div>
@endif
