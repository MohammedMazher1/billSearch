@extends('layouts.main')
@section('content')
    <div class="billSearch content">
        <div class="search">
            <input id="searchInput" type="text" name="search" required placeholder="أدخل رقم الفاتورة">
            <button id="searchBtn">
                <i class="fa-solid fa-rotate"></i>
            </button>
        </div>
        <mark id="searchError" style="display: none">

        </mark>
        <table cellspacing=0 id="billTable">
            <tr class="odd tableHeader">
                <th>رقم الفرع</th>
                <th>رقم الاتفاقية</th>
                <th>الاسم </th>
                <th>الشهر</th>
                <th>السنة</th>
                <th>المبلغ السابق</th>
                <th>المبلغ الحالي </th>
                <th>أقل مبلغ للدفع</th>
            </tr>
        </table>
    </div>
@endsection
