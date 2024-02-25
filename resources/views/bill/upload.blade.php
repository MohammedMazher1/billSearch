@extends('layouts.main')
@section('content')
    <div class="content billupload">
        <h3>
            رفع ملف الدورة
        </h3>
        <form action="{{ Route('bill.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (Session::get('error'))
                <div class="errorDiv">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="upload">
                {{-- <div>
                    <span>رقم الدورة</span>
                    <input type="number" name="bill_No" required placeholder="رقم الفاتورة">
                </div> --}}
                <div>
                    <i id="uploadIcon" class="fa-solid fa-cloud-arrow-up"></i>
                    <input id="uploadInput" type="file" name="file" required>
                </div>

            </div>
            <div>
                <button type="submit">
                    إرسال
                </button>
            </div>
        </form>
    </div>
@endsection
