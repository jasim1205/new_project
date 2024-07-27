@extends('layout.appAuth')
@section('title','Login')
@section('content')
 <div id="auth-left" class="">
    {{-- <div class="auth-logo">
        <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
    </div> --}}
    <div class="shadow-lg p-4" style="border-radius: 10px;">
        <h1 class="auth-title text-center">Login</h1>
        <form action="{{route('login.check')}}" method="POST" class="">
            @csrf
            <div class="form-group position-relative has-icon-left">
                <input type="text" class="form-control form-control-xl" name="username" placeholder="Username" value="{{old('username')}}">
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
                @if($errors->has('username'))
                    <small class="d-block text-danger fw-bold">
                        {{$errors->first('username')}}
                    </small>
                @endif
            </div>
            <div class="form-group position-relative has-icon-left">
                <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                @if($errors->has('password'))
                    <small class="d-block text-danger fw-bold">
                        {{$errors->first('password')}}
                    </small>
                @endif
            </div>
            {{-- <div class="form-check form-check-lg d-flex align-items-end">
                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label text-gray-600" for="flexCheckDefault">
                    Keep me logged in
                </label>
            </div> --}}
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Log in</button>
        </form>
        <div class="text-center mt-3">
            <p class="text-gray-600">Don't have an account? <a href="{{route('register')}}" class="font-bold ">Sign
                    up</a>.</p>
            {{-- <p><a class="" href="auth-forgot-password.html">Forgot password?</a>.</p> --}}
        </div>
    </div>
</div>
@endsection
