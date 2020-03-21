@extends('layouts.app')

@section('content')
    <div class="vue-container">
        <div class="title-head">
            <h1>บุคลากร</h1>
        </div>

        {{-- card-personal --}}
        <div class="card-personal">
            <div class="personal-img">
                <img src="{{asset('img/personal1.jpg')}}" alt="">
            </div>
            <div class="personal-info">
                <h1>ผศ.ดร.กฤช สินธนะกุล</h1>
                <h3>หัวหน้าภาควิชา</h3>
                <p>example@kmutnb.ac.th</p>
                <p>โทร 01-234-5678 ต่อ 123 ต่อ 01</p>
            </div>
        </div>

    </div>
@endsection