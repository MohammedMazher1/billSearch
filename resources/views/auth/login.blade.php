@extends('layouts.main')
@section('content')
    <form method="POST" action="{{ route('authenticate') }}">
        @csrf
        <div class="login">
            @if (Session::get('error'))
                <div class="errorDiv">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="formInput">
                <span>أسم المستخدم</span>
                <input type="text" name="user_name" id="user_name" value="{{ old('user_name') }}">
                @error('user_name')
                    <mark>{{ $message }} </mark>
                @enderror
            </div>
            <div class="formInput">
                <span>كلمة المرور</span>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <button class="loginBtn btn_hover" type="submit">
                    دخول
                </button>
            </div>
        </div>
    </form>
@endsection
