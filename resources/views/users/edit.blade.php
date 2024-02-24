@extends('layouts.main')
@section('content')
    <div class="content mangeUsers">
        <a class="backToHome btn_hover" href="{{ Route('users.index') }}">
            <i class="fa-solid fa-house-crack"></i>
        </a>
        <form action="{{ Route('users.update', $user['id']) }}" method="POST">
            @method('PUT')
            @csrf
            @if (Session::get('error'))
                <div class="errorDiv">
                    {{ Session::get('error') }}
                </div>
            @endif
            <h3>
                <i class="fa-solid fa-plus"></i>
                معلومات المستخدم
            </h3>
            <div class="userIfo">

                <div class="formInput">
                    <span>الاسم</span>
                    <input type="text" name="name" value="{{ $user->name }}">
                </div>
                <div class="formInput">
                    <span>نوع المستخدم</span>
                    <input type="text" name="type" value="{{ $user->type }}">
                </div>
                <div class="formInput">
                    <span>اسم المستخدم</span>
                    <input type="text" name="user_name" value="{{ $user->user_name }}">
                </div>
                <div class="formInput">
                    <span>كلمة المرور</span>
                    <input type="password" name="password">
                </div>
                <div class="control">
                    <button type="submit" class="btn_hover">
                        تعديل
                    </button>
                    <button type="reset" class="btn_hover">
                        إلغاء
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
