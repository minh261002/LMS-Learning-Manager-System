<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <label for="instructor[edu_level]" class="form-label">
                    Trình độ học vấn
                </label>

                <select name="instructor[edu_level]" id="instructor[edu_level]" class="form-control">
                    <option value="1"
                        {{ old('edu_level') == 1 ? 'selected' : ($instructor->edu_level == 1 ? 'selected' : '') }}>
                        Tiến sĩ</option>
                    <option value="2"
                        {{ old('edu_level') == 2 ? 'selected' : ($instructor->edu_level == 2 ? 'selected' : '') }}>
                        Thạc sĩ</option>
                    <option value="3"
                        {{ old('edu_level') == 3 ? 'selected' : ($instructor->edu_level == 3 ? 'selected' : '') }}>
                        Đại học</option>
                    <option value="4"
                        {{ old('edu_level') == 4 ? 'selected' : ($instructor->edu_level == 4 ? 'selected' : '') }}>
                        Cao đẳng</option>
                    <option value="5"
                        {{ old('edu_level') == 5 ? 'selected' : ($instructor->edu_level == 5 ? 'selected' : '') }}>
                        Trung cấp</option>
                    <option value="6"
                        {{ old('edu_level') == 6 ? 'selected' : ($instructor->edu_level == 6 ? 'selected' : '') }}>
                        Sơ cấp</option>
                </select>
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[university]" class="form-label">
                    Trường học
                </label>

                <input type="text" class="form-control" name="instructor[university]" id="instructor[university]"
                    value="{{ $instructor->university }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[major]" class="form-label">
                    Chuyên ngành
                </label>

                <input type="text" class="form-control" name="instructor[major]" id="instructor[major]"
                    value="{{ $instructor->major }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[degree]" class="form-label">
                    Bằng cấp
                </label>

                <select name="instructor[degree]" id="instructor[degree]" class="form-control">
                    <option value="1"
                        {{ old('degree') == 1 ? 'selected' : ($instructor->degree == 1 ? 'selected' : '') }}>
                        Cử nhân</option>
                    <option value="2"
                        {{ old('degree') == 2 ? 'selected' : ($instructor->degree == 2 ? 'selected' : '') }}>
                        Kỹ sư</option>
                    <option value="3"
                        {{ old('degree') == 3 ? 'selected' : ($instructor->degree == 3 ? 'selected' : '') }}>
                        Thạc sĩ</option>
                    <option value="4"
                        {{ old('degree') == 4 ? 'selected' : ($instructor->degree == 4 ? 'selected' : '') }}>
                        Tiến sĩ</option>
                </select>
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[certificate]" class="form-label">
                    Chứng chỉ (Nếu có)
                </label>

                <input type="text" class="form-control" name="instructor[certificate]" id="instructor[certificate]"
                    value="{{ $instructor->certificate }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[experience]" class="form-label">
                    Kinh nghiệm làm việc (Nếu có)
                </label>

                <input type="text" class="form-control" name="instructor[experience]" id="instructor[experience]"
                    value="{{ $instructor->experience }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[skill]" class="form-label">
                    Kỹ năng (Phân cách bằng dấu phẩy)
                </label>

                <input type="text" class="form-control" name="instructor[skill]" id="instructor[skill]"
                    value="{{ $instructor->skill }}">
            </div>

            <div class="col-md-6 form-group mb-3">
                <label for="instructor[language]" class="form-label">
                    Ngoại ngữ (Nếu có)
                </label>

                <input type="text" class="form-control" name="instructor[language]" id="instructor[language]"
                    value="{{ $instructor->language }}">
            </div>
        </div>
    </div>
</div>
