@foreach ($categories as $category)
    <li>
        <a href="#">{{ $category->name }}
            @if ($category->children->isNotEmpty())
                <i class="la la-angle-right"></i>
            @endif
        </a>
        @if ($category->children->isNotEmpty())
            <ul class="sub-menu">
                @include('frontend.partials.category-item', ['categories' => $category->children])
            </ul>
        @endif
    </li>
@endforeach
