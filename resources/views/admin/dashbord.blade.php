@extends('layouts.main')
@section('content')
    <div class="dashbord content">
        <a href="{{ route("users.index") }}">
            إدارة المستخدمين
            <img src="{{ asset('assets/img/maintanance.svg') }}" alt="">
        </a>
        <a href="{{ route('bill.upload') }}">
            رفع ملف  
            <img src="{{ asset('assets/img/upload.svg') }}" alt="">
        </a>
    </div>
@endsection