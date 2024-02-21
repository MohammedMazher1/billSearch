@extends('layouts.main')
@section('content')
    <div class="content mangeUsers">
        {{-- <form action="{{ route('users.update') }}" method="POST"> --}}
            <h3>
                <i class="fa-solid fa-plus"></i>
                معلومات المستخدم
            </h3>
            <div class="userIfo">
               
                <div>
                    <span>الاسم</span>
                    <input type="text" name="name">
                </div>
                <div>
                    <span>نوع المستخدم</span>
                    <input type="text" name="type">
                </div>
                <div>
                    <span>اسم المستخدم</span>
                    <input type="text" name="user_name">
                </div>
                <div>
                    <span>كلمة المرور</span>
                    <input type="password" name="user_name">
                </div>
                <div class="control">
                    <a href="#">
                        إضافة
                    </a>
                    <a href="#">
                        إلغاء
                    </a>
                </div>
            </div>
        {{-- </form> --}}
        
    </div>
@endsection
