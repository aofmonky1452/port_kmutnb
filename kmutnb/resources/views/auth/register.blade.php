@extends('layouts.app')

@section('content')

<div class="vue-container">
    <div class="card-login">
        <p>สมัครสมาชิก</p>
        <form class="register" method="POST" action="{{ route('register') }}">
            {{-- Student ID FIX 13 digits --}}
            <input id="tname" type="text" class="txt-login @error('tname') is-invalid @enderror" name="tname" value="{{ old('tname') }}" required autocomplete="tname" placeholder="รหัสนักศึกษา">
            
            {{-- Password --}}
            <input id="tname" type="password" class="txt-login @error('tname') is-invalid @enderror" name="tname" value="{{ old('tname') }}" required autocomplete="tname" placeholder="รหัสผ่าน">

            <div class="registerForm-row">
                {{-- Title name --}}
                <select class="select-title">
                    <option value="">คำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>

                {{-- First name --}}
                <input id="fname" type="text" class="txt-small @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" placeholder="ชื่อ">
                {{-- Last name --}}
                <input id="fname" type="text" class="txt-small @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" placeholder="นามสกุล">
            </div>

            <div class="registerForm-row">
                {{-- Year --}}
                <select class="select-year">
                    <option value="">ชั้นปี</option>
                    <option value="ปี 1">ปี 1</option>
                    <option value="ปี 2">ปี 2</option>
                    <option value="ปี 3">ปี 3</option>
                    <option value="ปี 4">ปี 4</option>
                </select>

                {{-- Department --}}
                <select class="select-department">
                    <option value="">สาขาวิชา</option>
                    <option value="PnET(PE)-R">PnET(PE)-R</option>
                    <option value="PnET(PE)-2R">PnET(PE)-2R</option>
                    <option value="PnET(C)-R">PnET(C)-R</option>
                    <option value="PNT-R">PNT-R</option>
                    <option value="PNT-T">PNT-T</option>
                </select>
            </div>

            {{-- email --}}
            <input id="fname" type="text" class="txt-login @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" placeholder="อีเมล">

            {{-- Tel Fix 9 digits --}}
            <input id="fname" type="text" class="txt-login @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" placeholder="โทรศัพท์">
            
            {{-- Button submit --}}
            <input type="submit" value="สมัครสมาชิก" class="btn-register">

        </form>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="tname" class="col-md-4 col-form-label text-md-right">{{ __('TitleName') }}</label>

                            <div class="col-md-6">
                                <input id="tname" type="text" class="form-control @error('tname') is-invalid @enderror" name="tname" value="{{ old('tname') }}" required autocomplete="tname" autofocus>

                                @error('tname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required >

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
