<?php

namespace App\Admin\Http\Requests\Instructor;

use App\Admin\Http\Requests\BaseRequest;

class InstructorRequest extends BaseRequest
{
    public function methodPost()
    {
        return [
            'info.name' => 'required',
            'info.email' => 'required|email|unique:users,email',
            'info.password' => 'required|min:6|confirmed',
            'info.status' => 'required',
            'info.province_id' => 'nullable',
            'info.district_id' => 'nullable',
            'info.ward_id' => 'nullable',
            'info.address' => 'nullable',
            'info.phone' => 'nullable',
            'info.birthday' => 'nullable',
            'info.image' => 'nullable',
            'info.description' => 'nullable',
            'info.role' => 'required',
            'instructor.id_card_type' => 'required',
            'instructor.id_card' => 'required',
            'instructor.id_card_date' => 'required',
            'instructor.id_card_place' => 'required',
            'instructor.front_id_card' => 'nullable',
            'instructor.back_id_card' => 'nullable',
            'instructor.edu_level' => 'required',
            'instructor.university' => 'nullable',
            'instructor.major' => 'nullable',
            'instructor.degree' => 'nullable',
            'instructor.certificate' => 'nullable',
            'instructor.experience' => 'nullable',
            'instructor.skill' => 'nullable',
            'instructor.language' => 'nullable',
            'instructor.status' => 'required',
            'instructor.is_verify' => 'required',
        ];
    }

    public function methodPut()
    {
        return [
            'info.id' => 'required|exists:users,id',
            'info.name' => 'required',
'info.email' => 'required|email|unique:users,email,' . ($this->info['id'] ?? 'NULL'),
            'info.password' => 'nullable|min:6|confirmed',
            'info.status' => 'required',
            'info.province_id' => 'nullable',
            'info.district_id' => 'nullable',
            'info.ward_id' => 'nullable',
            'info.address' => 'nullable',
            'info.phone' => 'nullable' ,
            'info.birthday' => 'nullable',
            'info.image' => 'nullable',
            'info.description' => 'nullable',
            'info.role' => 'required',
            'instructor.id' => 'required|exists:instructors,id',
            'instructor.id_card_type' => 'required',
            'instructor.id_card' => 'required',
            'instructor.id_card_date' => 'required',
            'instructor.id_card_place' => 'required',
            'instructor.front_id_card' => 'nullable',
            'instructor.back_id_card' => 'nullable',
            'instructor.edu_level' => 'required',
            'instructor.university' => 'nullable',
            'instructor.major' => 'nullable',
            'instructor.degree' => 'nullable',
            'instructor.certificate' => 'nullable',
            'instructor.experience' => 'nullable',
            'instructor.skill' => 'nullable',
            'instructor.language' => 'nullable',
            'instructor.status' => 'required',
            'instructor.is_verify' => 'required',
            'instructor.is_identify' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.confirmed' => 'Mật khẩu không khớp',
            'status.required' => 'Vui lòng chọn trạng thái',
            'role.required' => 'Vui lòng chọn vai trò',
        ];
    }
}