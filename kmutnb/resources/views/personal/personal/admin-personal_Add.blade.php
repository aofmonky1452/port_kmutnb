@extends('layouts.admin-app')

@section('content')
    <div class="vue-container">
        <div class="title-head">
            <h1>เพิ่มข้อมูลบุคลากร</h1>
        </div>

        {{-- Upload image --}}
        <div class="avatar-upload">
            <div class="avatar-edit">
                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                <label for="imageUpload">
                    <i class="fas fa-pencil-alt"></i>
                </label>
            </div>
            <div class="avatar-preview-personal">
                <div id="imagePreview" style="background-image: url('{{asset('img/personal1.jpg')}}');">
                </div>
            </div>
        </div>

        {{-- Card --}}
        <form class="card-main" id="usrform">
            <div class="admin-editAboutDepartment">
                <input type="text" class="txt-edit" placeholder="เพิ่มชื่อบุคลากร">
                <input type="text" class="txt-edit" placeholder="เพิ่มตำแหน่ง">
                <input type="text" class="txt-edit" placeholder="เพิ่มอีเมล">
                <input type="text" class="txt-edit" placeholder="เพิ่มโทรศัพท์">
                <div class="admin-manageAboutDapartmentEdit">
                    <button type="submit" class="btn-edit">เพิ่ม</button>
                    <a href="{{route('personal_Admin')}}" class="btn-delete">ยกเลิก</a>
                </div>
            </div>
        </form>
    </div>
@endsection