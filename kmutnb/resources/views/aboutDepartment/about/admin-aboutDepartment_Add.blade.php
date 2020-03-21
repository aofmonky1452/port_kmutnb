@extends('layouts.admin-app')

@section('content')
    <div class="vue-container">
        <div class="title-head">
            <h1>เพิ่มประวัติความเป็นมา</h1>
        </div>

        <form class="card-main" id="usrform">
            <div class="admin-editAboutDepartment">
                <input type="text" class="txt-edit" placeholder="เพิ่มปี พ.ศ.">
                <input type="text" class="txt-edit" placeholder="เพิ่มหัวข้อหลัก">
                <textarea name="comment" form="usrform" placeholder="เพิ่มเนื้อหา"></textarea>
                <div class="admin-manageAboutDapartmentEdit">
                    <button type="submit" class="btn-edit">เพิ่ม</button>
                    <a href="{{route('aboutDepartment_Admin')}}" class="btn-delete">ยกเลิก</a>
                </div>
            </div>
        </form>
    </div>
@endsection