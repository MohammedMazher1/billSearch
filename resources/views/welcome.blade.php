@extends('layouts/main')
@section('content')
    <div class="mainContent">
    
        <div>
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>
    
        <a href="{{ route('billSearch') }}" class="btn_hover">
            إبداء
        </a>
    </div>   
@endsection