@extends('layouts.main')
@section('content')
    <div class="content mangeUsers">
        <a class="backToHome btn_hover" href="{{ Route('users.index') }}">
            <i class="fa-solid fa-house-crack"></i>
        </a>
        <form method="POST" action="{{ Route('users.store') }}">
            @method('POST')
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

                <div>
                    <span>الاسم</span>
                    <input type="text" name="name" placeholder="اسم الامستخدم الرباعي">
                </div>
                <div>
                    <span>نوع المستخدم</span>
                    <input type="text" name="type" placeholder="نوع المستخدم">
                </div>
                <div>
                    <span>اسم المستخدم</span>
                    <input type="text" name="user_name" placeholder="Mo123_a">
                </div>
                <div>
                    <span>كلمة المرور</span>
                    <input type="password" name="password" placeholder="*********">
                </div>
                <div class="control ">
                    <button type="submit" class="btn_hover">
                        إضافة
                    </button>
                    <button type="reset" class="btn_hover">
                        إلغاء
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
