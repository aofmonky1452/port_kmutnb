@extends('layouts.app')

@section('content')
    <div class="vue-container">
        <div class="title-head">
            <h1>บุคลากร</h1>
            <a href="{{route('personal_Add')}}" class="btn-addAboutDepartment"><i class="fas fa-plus-circle"></i>เพิ่มข้อมูล</a>
        </div>

        {{-- card-personal --}}
        <div class="card-personal">
            <div class="personal-img">
                <img src="{{asset('img/personal1.jpg')}}">
            </div>
            <div class="personal-info">
                <h1>ผศ.ดร.กฤช สินธนะกุล</h1>
                <h3>หัวหน้าภาควิชา</h3>
                <p>อีเมล : example@kmutnb.ac.th</p>
                <p>โทร 01-234-5678 ต่อ 123 ต่อ 01</p>
                <div class="admin-managePersonal">
                    <a href="{{route('personal_Edit')}}" class="btn-edit">แก้ไข</a>
                    <a href="#" class="btn-delete">ลบ</a>
                </div>
            </div>
        </div>

    </div>
@endsection