<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <label for="instructor[id_card_type]" class="form-label">
                    Loại
                </label>

                <select name="instructor[id_card_type]" id="instructor[id_card_type]" class="form-control">
                    <option value="1">Thẻ căn cước</option>
                    <option value="2">Thẻ căn cước công dân gắn chip</option>
                    <option value="3">Hộ chiếu</option>
                </select>
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[id_card]" class="form-label">
                    Số định danh
                </label>

                <input type="text" class="form-control" name="instructor[id_card]" id="instructor[id_card]"
                    value="{{ old('id_card') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="" class="form-label">
                    Ngày cấp
                </label>

                <div class="input-icon mb-2">
                    <input class="form-control " placeholder="Chọn ngày" id="datepicker-icon-1"
                        value="{{ old('id_card_date') }}" name="instructor[id_card_date]" autocomplete="off">
                    <span class="input-icon-addon">
                        <i class="ti ti-calendar fs-1"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="" class="form-label">Nơi cấp</label>
                <input type="text" class="form-control" name="instructor[id_card_place]"
                    id="instructor[id_card_place]" value="{{ old('id_card_place') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[front_id_card]" class="form-label">
                    CCCD mặt trước
                </label>
                <span class="image img-cover image-target">
                    <img class="w-100" src="{{ old('image') ? old('image') : asset('admin/images/not-found-2.jpg') }}"
                        alt=""></span>
                <input type="hidden" name="instructor[front_id_card]" value="{{ old('image') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[back_id_card]" class="form-label">
                    CCCD mặt sau
                </label>
                <span class="image img-cover image-target">
                    <img class="w-100" src ="{{ old('image') ? old('image') : asset('admin/images/not-found-2.jpg') }}"
                        alt="">
                </span>
                <input type="hidden" name="instructor[back_id_card]" value="{{ old('image') }}">
            </div>
        </div>
    </div>
</div>