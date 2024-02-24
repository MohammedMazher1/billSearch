@extends('layouts.main')
@section('content')
  <div class="content billupload">
    <h3>
        رفع ملف الدورة
    </h3>
    <form action="#" method="GET">
    <div class="upload">
            <div>
                <span>رقم الفاتورة</span>
                <input type="number" name="bill_No" required placeholder="رقم الفاتورة">
            </div>
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