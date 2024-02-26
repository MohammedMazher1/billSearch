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

                <div class="formInput">
                    <span>الاسم</span>
                    <input type="text" name="name" placeholder="اسم الامستخدم الرباعي">
                </div>
                <div class="formInput">
                    <span>نوع المستخدم</span>
                    <select name="type" id="#">
                        <option value="admin">مدير نظام</option>
                        <option value="accountant">محاسب</option>
                    </select>
                </div>
                <div class="formInput">
                    <span>اسم المستخدم</span>
                    <input type="text" name="user_name" placeholder="Mo123_a">
                </div>
                <div class="formInput">
                    <span>كلمة المرور</span>
                    <input type="password" name="password" placeholder="*********">
                </div>
                <div class="control">
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
