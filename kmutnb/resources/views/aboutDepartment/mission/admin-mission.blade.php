@extends('layouts.admin-app')

@section('content')
    <div class="vue-container">
        <div class="title-head">
            <h1>ข้อมูลเกี่ยวกับภาควิชา</h1>
            <a href="{{route('mission_Add')}}" class="btn-addAboutDepartment"><i class="fas fa-plus-circle"></i>เพิ่มข้อมูล</a>
        </div>

        <div class="card-mission">
            <div class="mission-img">
                <img src="{{asset('img/mission1.jpg')}}" alt="">
            </div>
            <div class="mission-info">
                <h1>พันธกิจ</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum expedita possimus cum tenetur voluptates repellendus! Deleniti provident amet quod quas soluta quo molestiae, ut ex nulla iusto nihil earum velit ipsum aperiam enim sunt quos eum explicabo aliquid corporis nobis ducimus exercitationem numquam! Et reiciendis fugit assumenda soluta voluptatibus accusantium?</p>
                <div class="admin-manageMission">
                    <a href="{{route('mission_Edit')}}" class="btn-edit">แก้ไข</a>
                    <a href="#" class="btn-delete">ลบ</a>
                </div>
            </div>
        </div>

        <div class="card-mission">
            <div class="mission-img">
                <img src="{{asset('img/mission2.jpg')}}" alt="">
            </div>
            <div class="mission-info">
                <h1>วิสัยทัศน์</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam deserunt eos, iure at provident quasi perspiciatis mollitia ratione atque nostrum quibusdam debitis eius! Quis laudantium vero unde voluptas saepe veritatis nostrum ipsam perspiciatis aut eaque? Facere iure quam ipsam, repellendus odio vel, delectus architecto harum fugit ipsum itaque, repellat voluptate!</p>
                <div class="admin-manageMission">
                    <a href="{{route('mission_Edit')}}" class="btn-edit">แก้ไข</a>
                    <a href="#" class="btn-delete">ลบ</a>
                </div>
            </div>
        </div>
    </div>
@endsection