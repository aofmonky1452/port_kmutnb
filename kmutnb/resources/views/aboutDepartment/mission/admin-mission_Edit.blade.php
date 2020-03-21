@extends('layouts.admin-app')

@section('content')
    <div class="vue-container">
        <div class="title-head">
            <h1>แก้ไขข้อมูลเกี่ยวกับภาควิชา</h1>
        </div>

        {{-- Upload image --}}
        <div class="avatar-upload">
            <div class="avatar-edit">
                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                <label for="imageUpload">
                    <i class="fas fa-pencil-alt"></i>
                </label>
            </div>
            <div class="avatar-preview">
                <div id="imagePreview" style="background-image: url('{{asset('img/mission1.jpg')}}');">
                </div>
            </div>
        </div>

        {{-- Card --}}
        <form class="card-main" id="usrform">
            <div class="admin-editAboutDepartment">
                <input type="text" class="txt-edit" placeholder="แก้ไขหัวข้อหลัก">
                <textarea name="comment" form="usrform" placeholder="แก้ไขเนื้อหา"></textarea>
                <div class="admin-manageAboutDapartmentEdit">
                    <button type="submit" class="btn-edit">แก้ไข</button>
                    <a href="{{route('mission_Admin')}}" class="btn-delete">ยกเลิก</a>
                </div>
            </div>
        </form>
    </div>
@endsection