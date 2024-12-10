<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <label for="instructor[edu_level]" class="form-label">
                    Trình độ học vấn
                </label>

                <select name="instructor[edu_level]" id="instructor[edu_level]" class="form-control">
                    <option value="1">Tiến sĩ</option>
                    <option value="2">Thạc sĩ</option>
                    <option value="3">Đại học</option>
                    <option value="4">Cao đẳng</option>
                    <option value="5">Trung cấp</option>
                    <option value="6">Sơ cấp</option>
                </select>
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[university]" class="form-label">
                    Trường học
                </label>

                <input type="text" class="form-control" name="instructor[university]" id="instructor[university]"
                    value="{{ old('university') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[major]" class="form-label">
                    Chuyên ngành
                </label>

                <input type="text" class="form-control" name="instructor[major]" id="instructor[major]"
                    value="{{ old('major') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[degree]" class="form-label">
                    Bằng cấp
                </label>

                <select name="instructor[degree]" id="instructor[degree]" class="form-control">
                    <option value="1">Cử nhân</option>
                    <option value="2">Kỹ sư</option>
                    <option value="3">Thạc sĩ</option>
                    <option value="4">Tiến sĩ</option>
                </select>
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[certificate]" class="form-label">
                    Chứng chỉ (Nếu có)
                </label>

                <input type="text" class="form-control" name="instructor[certificate]" id="instructor[certificate]"
                    value="{{ old('certificate') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[experience]" class="form-label">
                    Kinh nghiệm làm việc (Nếu có)
                </label>

                <input type="text" class="form-control" name="instructor[experience]" id="instructor[experience]"
                    value="{{ old('experience') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[skill]" class="form-label">
                    Kỹ năng (Phân cách bằng dấu phẩy)
                </label>

                <input type="text" class="form-control" name="instructor[skill]" id="instructor[skill]"
                    value="{{ old('skill') }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[language]" class="form-label">
                    Ngoại ngữ (Nếu có)
                </label>

                <input type="text" class="form-control" name="instructor[language]" id="instructor[language]"
                    value="{{ old('language') }}">
            </div>
        </div>
    </div>
</div>
