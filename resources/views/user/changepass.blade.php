@extends('layout.app')
@section('title',trans('Employee'))
@section('page',trans('Apply Leave'))
@section('content')
<style>
      .form-group label {
            width: 150px; /* Adjust the width as needed */
            text-align: right;
            margin-right: 10px;
        } 
       .form-box{
        border: 1px solid blue;
        background-color:#fdffff;
       }
       .img{
            border: 5px solid rgb(73, 145, 73);
        }
        input{
            width: 50%;
        }
</style>
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="" >
    
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <img src="{{ asset('public/uploads/employee/' . $employee->image) }}" alt="Profile" class="rounded img" width="150px" height="170px">
                <p>{{$employee->name}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="py-3 form-box">
                    <form class="form" method="post" action="{{ route('change.password') }}">
                        @csrf
                            <div class="form-group">
                                <label for="current_password" class="">Current Password :</label>
                                <input name="current_password" type="password" class="" id="current_password" required>
                                @if($errors->has('current_password'))
                                    <span class="text-danger"> {{ $errors->first('current_password') }}</span>
                                @endif
                            </div>
                        <div class="form-group">
                            <label for="new_password" class="">New Password :</label>
                            <input name="password" type="password" class="" id="password">
                             @if($errors->has('password'))
                                <span class="text-danger"> {{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="">Confirm Password :</label>
                            <input name="password_confirmation" type="password" class="" id="password_confirmation">
                             @if($errors->has('password_confirmation'))
                                <span class="text-danger"> {{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>           
            </div>
        </div>
</div>
@endsection
