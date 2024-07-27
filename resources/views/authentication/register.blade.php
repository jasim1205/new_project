@extends('layout.appAuth')
@section('title','Register')
@section('content')
 <div id="auth-left">
    {{-- <div class="auth-logo">
        <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
    </div> --}}
    <div class="shadow-lg p-4" style="border-radius: 10px;">
        <h1 class="auth-title text-center">Sign Up</h1>
        {{-- <p class="auth-subtitle mb-5">Input your data to register to our website.</p> --}}
    
        <form action="{{route('register.store')}}" method="POST" id="signupForm">
            @csrf
    
            <div class="form-group position-relative has-icon-left ">
                <input type="text" class="form-control form-control-lg" name="FullName" placeholder="Full Name">
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
                 @if($errors->has('FullName'))
                    <small class="d-block text-danger fw-bold">
                        {{$errors->first('FullName')}}
                    </small>
                @endif
            </div>
            <div class="form-group position-relative has-icon-left ">
                <input type="text" class="form-control form-control-lg" name="EmailAddress" placeholder="Email">
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
                @if($errors->has('EmailAddress'))
                    <small class="d-block text-danger fw-bold">
                        {{$errors->first('EmailAddress')}}
                    </small>
                @endif
            </div>
            <div class="form-group position-relative has-icon-left ">
                <input type="text" class="form-control form-control-lg" name="contact_no" placeholder="Contact">
                <div class="form-control-icon">
                    <i class="bi bi-phone"></i>
                </div>
                @if($errors->has('contact_no'))
                    <small class="d-block text-danger fw-bold">
                        {{$errors->first('contact_no')}}
                    </small>
                @endif
            </div>
            <div class="form-group position-relative has-icon-left ">
                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                @if($errors->has('password'))
                    <small class="d-block text-danger fw-bold">
                        {{$errors->first('password')}}
                    </small>
                @endif
            </div>
            <div class="form-group position-relative has-icon-left">
                <input type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                @if($errors->has('password_confirmation'))
                    <small class="d-block text-danger fw-bold">
                        {{$errors->first('password_confirmation')}}
                    </small>
                @endif 
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg">Sign Up</button>
        </form>
        <div class="text-center mt-1">
            <p class='text-gray-600'>Already have an account? <a href="{{route('login')}}" class="font-bold">Log
                    in</a>.</p>
        </div>
    </div>
</div>
@endsection
