<?php

return [
    // [
    //     'active' => ['admin.notification.*'],
    //     'show' => ['admin.notification.*'],
    //     'title' => 'Thông báo',
    //     'icon' => 'ti ti-bell fs-2',
    //     'permission' => ['createNotification', 'viewNotification', 'deleteNotification'],
    //     'children' => [
    //         [
    //             'title' => 'Thêm mới',
    //             'route' => 'admin.notification.create',
    //             'icon' => 'ti ti-plus fs-3 me-2',
    //             'permission' => 'createNotification'
    //         ],
    //         [
    //             'title' => 'Danh sách',
    //             'route' => 'admin.notification.index',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewNotification'
    //         ]
    //     ]
    // ],
    // [
    //     'active' => ['admin.message.*'],
    //     'show' => ['admin.message.*'],
    //     'title' => 'Tin nhắn',
    //     'icon' => 'ti ti-mail fs-2',
    //     'permission' => [],
    // ],
    [
        'active' => ['admin.category.*'],
        'show' => ['admin.category.*'],
        'title' => 'Danh mục',
        'icon' => 'ti ti-category fs-2',
        'permission' => ['viewCategory', 'createCategory', 'editCategory', 'deleteCategory'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.category.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createCategory'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.category.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewCategory'
            ]
        ]
    ],
    [
        'active' => ['admin.attribute.*', 'admin.product.*'],
        'show' => ['admin.attribute.*', 'admin.product.*'],
        'title' => 'Sản phẩm',
        'icon' => 'ti ti-packages fs-2',
        'permission' => ['viewAttribute', 'createAttribute', 'editAttribute', 'deleteAttribute', 'viewProduct', 'createProduct', 'editProduct', 'deleteProduct'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.product.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createProduct'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.product.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewProduct'
            ],
            [
                'title' => 'Thuộc tính',
                'route' => 'admin.attribute.index',
                'icon' => 'ti ti-a-b-2 fs-3 me-2',
                'permission' => 'viewAttribute'
            ]
        ]
    ],
    // [
    //     'active' => ['admin.order.*'],
    //     'show' => ['admin.order.*'],
    //     'title' => 'Đơn hàng',
    //     'icon' => 'ti ti-shopping-cart fs-2',
    //     'permission' => ['viewOrder', 'createOrder', 'editOrder', 'deleteOrder'],
    //     'children' => [
    //         [
    //             'title' => 'Danh sách',
    //             'route' => 'admin.order.index',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewOrder'
    //         ]
    //     ]
    // ],
    // [
    //     'active' => ['admin.discount.*'],
    //     'show' => ['admin.discount.*'],
    //     'title' => 'Mã giảm giá',
    //     'icon' => 'ti ti-ticket fs-2',
    //     'permission' => ['viewDiscount', 'createDiscount', 'editDiscount', 'deleteDiscount'],
    //     'children' => [
    //         [
    //             'title' => 'Thêm mới',
    //             'route' => 'admin.discount.create',
    //             'icon' => 'ti ti-plus fs-3 me-2',
    //             'permission' => 'createDiscount'
    //         ],
    //         [
    //             'title' => 'Danh sách',
    //             'route' => 'admin.discount.index',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewDiscount'
    //         ]
    //     ]
    // ],
    [
        'active' => ['admin.post_catalogue.*'],
        'show' => ['admin.post_catalogue.*'],
        'title' => 'Chuyên mục',
        'icon' => 'ti ti-bookmark fs-2',
        'permission' => ['viewPostCatalogue', 'createPostCatalogue', 'editPostCatalogue', 'deletePostCatalogue'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.post_catalogue.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createPostCatalogue'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.post_catalogue.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewPostCatalogue'
            ]
        ]
    ],
    [
        'active' => ['admin.post.*'],
        'show' => ['admin.post.*'],
        'title' => 'Bài viết',
        'icon' => 'ti ti-book fs-2',
        'permission' => ['viewPost', 'createPost', 'editPost', 'deletePost'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.post.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createPost'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.post.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewPost'
            ]
        ]
    ],
    // [
    //     'active' => ['admin.review.*', 'admin.qas.*'],
    //     'show' => ['admin.review.*', 'admin.qas.*'],
    //     'title' => 'Phản hồi',
    //     'icon' => 'ti ti-message fs-2',
    //     'permission' => ['viewReview'],
    //     'children' => [
    //         [
    //             'title' => 'Đánh giá',
    //             'route' => 'admin.review.index',
    //             'icon' => 'ti ti-star fs-3 me-2',
    //             'permission' => 'viewReview'
    //         ],
    //         [
    //             'title' => 'Hỏi đáp',
    //             'route' => 'admin.qas.index',
    //             'icon' => 'ti ti-message-report fs-3 me-2',
    //             'permission' => 'viewReview'
    //         ]
    //     ]
    // ],
    // [
    //     'active' => ['admin.slider.*'],
    //     'show' => ['admin.slider.*'],
    //     'title' => 'Slider',
    //     'icon' => 'ti ti-photo fs-2',
    //     'permission' => ['viewSlider', 'createSlider', 'editSlider', 'deleteSlider'],
    //     'children' => [
    //         [
    //             'title' => 'Thêm mới',
    //             'route' => 'admin.slider.create',
    //             'icon' => 'ti ti-plus fs-3 me-2',
    //             'permission' => 'createSlider'
    //         ],
    //         [
    //             'title' => 'Danh sách',
    //             'route' => 'admin.slider.index',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewSlider'
    //         ]
    //     ]
    // ],
    [
        'active' => ['admin.customer.*'],
        'show' => ['admin.customer.*'],
        'title' => 'Khách hàng',
        'icon' => 'ti ti-user fs-2',
        'permission' => ['viewCustomer', 'createCustomer', 'editCustomer', 'deleteCustomer'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.customer.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createCustomer'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.customer.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewCustomer'
            ]
        ]
    ],
    [
        'active' => ['admin.admin.*'],
        'show' => ['admin.admin.*'],
        'title' => 'Quản trị viên',
        'icon' => 'ti ti-user-shield fs-2',
        'permission' => ['viewAdmin', 'createAdmin', 'editAdmin', 'deleteAdmin'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.admin.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createAdmin'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.admin.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewAdmin'
            ]
        ]
    ],
    // [
    //     'active' => ['admin.setting.*'],
    //     'show' => ['admin.setting.*'],
    //     'title' => 'Cài đặt',
    //     'icon' => 'ti ti-settings fs-2',
    //     'permission' => ['viewSetting', 'editSetting'],
    //     'children' => [
    //         [
    //             'title' => 'Cài đặt menu',
    //             'route' => 'admin.setting.menu',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewSetting'
    //         ],
    //         [
    //             'title' => 'Cài đặt hệ thống',
    //             'route' => 'admin.setting.system',
    //             'icon' => 'ti ti-settings fs-3 me-2',
    //             'permission' => 'viewSetting'
    //         ]
    //     ]
    // ],
    [
        'active' => ['admin.role.*'],
        'show' => ['admin.role.*'],
        'title' => 'Quản lý vai trò',
        'icon' => 'ti ti-git-branch fs-2',
        'permission' => ['viewRole', 'createRole', 'editRole', 'deleteRole'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.role.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createRole'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.role.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewRole'
            ]
        ]
    ],
    [
        'active' => ['admin.permission.*'],
        'show' => ['admin.permission.*'],
        'title' => 'Quản lý quyền',
        'icon' => 'ti ti-shield-code fs-2',
        'permission' => ['viewPermission', 'createPermission', 'editPermission', 'deletePermission'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.permission.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createPermission'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.permission.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewPermission'
            ]
        ],
    ],
    [
        'active' => ['admin.module.*'],
        'show' => ['admin.module.*'],
        'title' => 'Quản lý module',
        'icon' => 'ti ti-package fs-2',
        'permission' => ['viewModule', 'createModule', 'editModule', 'deleteModule'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.module.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createModule'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.module.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewModule'
            ]
        ]
    ]
];