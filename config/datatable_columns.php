<?php

return [
    'instructor' => [
        'user_id' => [
            'title' => 'Họ và tên',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'course' => [
            'title' => 'Khóa học',
            'orderable' => false,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'order' => [
            'title' => 'Đơn hàng',
            'orderable' => false,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'is_identity' => [
            'title' => 'Định danh',
            'orderable' => false,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'is_verify' => [
            'title' => 'Duyệt',
            'orderable' => false,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => false,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'orders' => [
        'invoice_number' => [
            'title' => 'Mã đơn hàng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'name' => [
            'title' => 'Tên khách hàng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'phone' => [
            'title' => 'Số điện thoại',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'total' => [
            'title' => 'Tổng tiền',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'payment_status' => [
            'title' => 'Trạng thái thanh toán',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'status' => [
            'title' => 'Trạng thái đơn hàng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'menus' => [
        'name' => [
            'title' => 'Tên menu',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'description' => [
            'title' => 'Mô tả',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'qas' => [
        'name' => [
            'title' => 'Tên khách hàng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'email' => [
            'title' => 'Email',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'phone' => [
            'title' => 'Số điện thoại',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'variations_id' => [
            'title' => 'Sản phẩm',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'content' => [
            'title' => 'Nội dung',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'reviews' => [
        'user_id' => [
            'title' => 'Khách hàng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'variation_id' => [
            'title' => 'Sản phẩm',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'rating' => [
            'title' => 'Đánh giá',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'content' => [
            'title' => 'Nội dung',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'created_at' => [
            'title' => 'Ngày đánh giá',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'product_variations' => [
        'image' => [
            'title' => 'Ảnh',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
        'variation' => [
            'title' => 'Biến thể',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'price' => [
            'title' => 'Giá bán',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'quantity' => [
            'title' => 'Số lượng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'attribute_values' => [
        'name' => [
            'title' => 'Tên giá trị',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'value_custom' => [
            'title' => 'Giá trị',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'position' => [
            'title' => 'Vị trí',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'attributes' => [
        'name' => [
            'title' => 'Tên thuộc tính',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'type' => [
            'title' => 'Loại',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'position' => [
            'title' => 'Vị trí',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'description' => [
            'title' => 'Mô tả',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'products' => [
        'variant' => [
            'title' => 'Biến thể',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
        'name' => [
            'title' => 'Tên sản phẩm',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'detail' => [
            'title' => 'Chi tiết',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'categories' => [
        'image' => [
            'title' => 'Ảnh',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle w-100px',
        ],
        'name' => [
            'title' => 'Tên chuyên mục',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-left align-middle',
        ],
        'position' => [
            'title' => 'Vị trí',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'notifications' => [
        'user_id' => [
            'title' => 'Khách hàng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'admin_id' => [
            'title' => 'Quản trị viên',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'title' => [
            'title' => 'Tiêu đề',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'content' => [
            'title' => 'Nội dung',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
        'is_read' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'created_at' => [
            'title' => 'Ngày gửi',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'discounts' => [
        'code' => [
            'title' => 'Mã giảm giá',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'date_start' => [
            'title' => 'Ngày bắt đầu',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'date_end' => [
            'title' => 'Ngày kết thúc',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'type' => [
            'title' => 'Loại giảm giá',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'post_catalogues' => [
        'image' => [
            'title' => 'Ảnh',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle w-100px',
        ],
        'name' => [
            'title' => 'Tên chuyên mục',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-left align-middle',
        ],
        'position' => [
            'title' => 'Vị trí',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'posts' => [
        'image' => [
            'title' => 'Ảnh',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle w-100px',
        ],
        'title' => [
            'title' => 'Tiêu đề',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'is_featured' => [
            'title' => 'Nổi bật',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'slider_items' => [
        'image' => [
            'title' => 'Ảnh',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
        'title' => [
            'title' => 'Tiêu đề',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'link' => [
            'title' => 'Link',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'position' => [
            'title' => 'Vị trí',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'sliders' => [
        'name' => [
            'title' => 'Tên slider',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'desc' => [
            'title' => 'Mô tả',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'customers' => [
        'name' => [
            'title' => 'Tên khách hàng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'email' => [
            'title' => 'Email',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'list_order' => [
            'title' => 'Ds đơn hàng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'list_wishlist' => [
            'title' => 'Ds yêu thích',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'type' => [
            'title' => 'Loại',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'admins' => [
        'image' => [
            'title' => 'Ảnh',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
        'name' => [
            'title' => 'Họ và tên',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'email' => [
            'title' => 'Email',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'role' => [
            'title' => 'Vai trò',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'roles' => [
        'title' => [
            'title' => 'Tiêu đề',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'name' => [
            'title' => 'Vai trò (ROLE_NAME)',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'guard_name' => [
            'title' => 'Nhóm quyền (GUARD_NAME)',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'permissions' => [
        'title' => [
            'title' => 'Tiêu đề',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'name' => [
            'title' => 'Quyền (PERMISSION_NAME)',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'guard_name' => [
            'title' => 'Nhóm quyền (GUARD_NAME)',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'modules' => [
        'name' => [
            'title' => 'Tên module',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'description' => [
            'title' => 'Mô tả',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'created_at' => [
            'title' => 'Ngày bắt đầu',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
];