@php
    $categories = \App\Models\Category::get()->toTree();
@endphp

<header class="header-menu-area bg-white">
    <div class="header-top pr-150px pl-150px border-bottom border-bottom-gray py-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i
                                    class="la la-phone mr-1"></i><a href="tel:00123456789"> (00) 123 456 789</a>
                            </li>
                            <li class="d-flex align-items-center"><i class="la la-envelope-o mr-1"></i><a
                                    href="mailto:contact@aduca.com"> contact@aduca.com</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                        @if (auth()->guard('web')->check())
                            <ul
                                class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                                <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray">
                                    <i class="la la-user mr-1"></i>
                                    <a href="{{ route('login') }}">
                                        {{ Auth::guard('web')->user()->name }}
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="la la-sign-out mr-1"></i>
                                    <form action="{{ route('logout') }}" method="post" id="logout-form">
                                        @csrf
                                        <a style="cursor:pointer"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                            xuất</a>
                                    </form>
                                </li>
                            </ul>
                        @else
                            <ul
                                class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                                <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray">
                                    <i class="la la-sign-in mr-1"></i>
                                    <a href="{{ route('login') }}">Đăng nhập</a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="la la-user mr-1"></i>
                                    <a href="{{ route('register') }}">Đăng ký</a>
                                </li>
                            </ul>
                        @endif
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content pr-150px pl-150px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="{{ route('home') }}" class="logo"><img
                                    src="{{ asset('frontend/images/logo.png') }}" alt="logo"></a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                    data-toggle="tooltip" data-placement="top" title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                    data-toggle="tooltip" data-placement="top" title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm"
                                    data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <div class="menu-category">
                                <ul>
                                    <li>
                                        <a href="#">Danh mục <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="cat-dropdown-menu">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="#">{{ $category->name }}
                                                        @if ($category->children->isNotEmpty())
                                                            <i class="la la-angle-right"></i>
                                                        @endif
                                                    </a>
                                                    @if ($category->children->isNotEmpty())
                                                        <ul class="sub-menu">
                                                            @include('frontend.partials.category-item', [
                                                                'categories' => $category->children,
                                                            ])
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>

                                    </li>
                                </ul>
                            </div>

                            <form method="post">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control pl-3" type="text" name="search"
                                        placeholder="Search for anything">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>

                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Trang chủ
                                    </li>
                                    <li>
                                        <a href="#">Khoá học </a>
                                    </li>
                                    <li>
                                        <a href="#">Tin tức</a>
                                    </li>
                                    <li>
                                        <a href="#">Hỗ trợ</a>
                                    </li>
                                </ul><!-- end ul -->
                            </nav>

                            <div class="shop-cart mr-4">
                                <ul>
                                    <li>
                                        <p class="shop-cart-btn d-flex align-items-center">
                                            <i class="la la-shopping-cart"></i>
                                            <span class="product-count">2</span>
                                        </p>
                                        <ul class="cart-dropdown-menu">
                                            <li class="media media-card">
                                                <a href="shopping-cart.html" class="media-img">
                                                    <img src="images/small-img.jpg" alt="Cart image">
                                                </a>
                                                <div class="media-body">
                                                    <h5><a href="course-details.html">The Complete JavaScript
                                                            Course 2021: From Zero to Expert!</a></h5>
                                                    <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                    <p class="text-black font-weight-semi-bold lh-18">$12.99 <span
                                                            class="before-price fs-14">$129.99</span></p>
                                                </div>
                                            </li>
                                            <li class="media media-card">
                                                <a href="shopping-cart.html" class="media-img">
                                                    <img src="images/small-img.jpg" alt="Cart image">
                                                </a>
                                                <div class="media-body">
                                                    <h5><a href="course-details.html">The Complete JavaScript
                                                            Course 2021: From Zero to Expert!</a></h5>
                                                    <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                    <p class="text-black font-weight-semi-bold lh-18">$12.99 <span
                                                            class="before-price fs-14">$129.99</span></p>
                                                </div>
                                            </li>
                                            <li class="media media-card">
                                                <div class="media-body fs-16">
                                                    <p class="text-black font-weight-semi-bold lh-18">Total: <span
                                                            class="cart-total">$12.99</span> <span
                                                            class="before-price fs-14">$129.99</span></p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="shopping-cart.html" class="btn theme-btn w-100">Got to
                                                    cart <i class="la la-arrow-right icon ml-1"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="nav-right-button">
                                <a href="{{ route('admission') }}" class="btn theme-btn d-none d-lg-inline-block"><i
                                        class="la la-user-plus mr-1"></i> Trở thành giảng viên</a>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm"
            data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="{{ route('home') }}">Trang chủ</a>
            </li>
            <li>
                <a href="#">Khoá học</a>
            </li>
            <li>
                <a href="#">Tin tức</a>
            </li>
            <li>
                <a href="#">Hỗ trợ</a>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip"
            data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            @foreach ($categories as $category)
                <li>
                    <a href="#">{{ $category->name }}
                        {{-- @if ($category->children->isNotEmpty())
                            <i class="la la-angle-right"></i>
                        @endif --}}
                    </a>
                    @if ($category->children->isNotEmpty())
                        <ul class="sub-menu">
                            @include('frontend.partials.category-item', [
                                'categories' => $category->children,
                            ])
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-3" type="text" name="search"
                        placeholder="Search for anything">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header>
