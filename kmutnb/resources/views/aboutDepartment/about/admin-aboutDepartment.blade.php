@extends('layouts.admin-app')

@section('content')
    <div class="vue-container">
        <div class="title-head">
            <h1>ประวัติความเป็นมา</h1>
            <a href="{{route('aboutDepartment_Add')}}" class="btn-addAboutDepartment"><i class="fas fa-plus-circle"></i>เพิ่มข้อมูล</a>
        </div>

        <div class="timeline-body">

            {{-- timeline --}}
            <div class="timeline-item">
                <p class="time">พ.ศ.2505</p>
                <div class="timeline-content">
                    <h2 class="title">Title for section oneTitle for section oneTitle for section one</h2>
                    <p class="timeline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, animi eligendi ipsa odit atque reprehenderit culpa vel provident consequatur voluptates!</p>
                    <div class="admin-manageAboutDapartment">
                        <a href="{{route('aboutDepartment_Edit')}}" class="btn-edit">แก้ไข</a>
                        <a href="#" class="btn-delete">ลบ</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection