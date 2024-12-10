<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <label for="info[name]" class="form-label">
                    Họ và tên
                </label>

                <input type="text" class="form-control" name="info[name]" id="name" value="{{ old('name') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="email" class="form-label">
                    Email
                </label>

                <input type="text" class="form-control" name="info[email]" id="email"
                    value="{{ old('email') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="phone" class="form-label">
                    Số điện thoại
                </label>

                <input type="text" class="form-control" name="info[phone]" id="phone"
                    value="{{ old('phone') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="birthday" class="form-label">
                    Ngày sinh
                </label>

                <div class="input-icon mb-2">
                    <input class="form-control " placeholder="Chọn ngày" id="datepicker-icon"
                        value="{{ old('birthday') }}" name="info[birthday]" autocomplete="off">
                    <span class="input-icon-addon">
                        <i class="ti ti-calendar fs-1"></i>
                    </span>
                </div>
            </div>

            <div class="col-12">
                <label for="desc" class="form-label">Mô tả</label>
                <textarea name="info[description]" cols="3" class="form-control">{{ old('description') }}</textarea>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="info[password]">
            </div>

            <div class="col-md-6">
                <label for="password_confirmation" class="form-label">Nhập lại mật
                    khẩu</label>
                <input type="password" class="form-control" id="password_confirmation"
                    name="info[password_confirmation]">
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="province_id" class="form-label">Chọn Tỉnh / Thành
                    Phố</label>
                <select name="info[province_id]" class="form-control select2 province location" data-target="districts">
                    <option value="0">[Chọn Tỉnh / Thành Phố]</option>
                    @if (isset($provinces))
                        @foreach ($provinces as $province)
                            <option @if (old('province_id') == $province->code) selected @endif value="{{ $province->code }}">
                                {{ $province->name }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Chọn Quận / Huyện
                </label>
                <select name="info[district_id]" class="form-control districts select2 location" data-target="wards">
                    <option value="0">[Chọn Quận / Huyện]</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Chọn Phường / Xã </label>
                <select name="info[ward_id]" class="form-control select2 wards">
                    <option value="0">[Chọn Phường / Xã]</option>
                </select>
            </div>

            <div class="col-12 mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="info[address]" name="info[address]"
                    value="{{ old('address', $user->address ?? '') }}">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
</div>
