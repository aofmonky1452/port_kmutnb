@extends('layouts.admin-app')

@section('content')
    <div class="vue-container">
        <div class="title-head">
            <h1>แก้ไขประวัติความเป็นมา</h1>
        </div>

        <form class="card-main" id="usrform">
            <div class="admin-editAboutDepartment">
                <input type="text" class="txt-edit" placeholder="แก้ไขปี พ.ศ.">
                <input type="text" class="txt-edit" placeholder="แก้ไขหัวข้อหลัก">
                <textarea name="comment" form="usrform" placeholder="แก้ไขเนื้อหา"></textarea>
                <div class="admin-manageAboutDapartmentEdit">
                    <button type="submit" class="btn-edit">แก้ไข</button>
                    <a href="{{route('aboutDepartment_Admin')}}" class="btn-delete">ยกเลิก</a>
                </div>
            </div>
        </form>
    </div>
@endsection