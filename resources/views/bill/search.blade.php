@extends('layouts.main')
@section('content')
    <div class="billSearch content">
        <div class="search">
            <input id="searchInput" type="text" name="search" placeholder="أدخل رقم الفاتورة">
            <button id="searchBtn">
                <i class="fa-solid fa-rotate"></i>
            </button>
        </div>
        <div class="errorDiv" id="searchError" style="display: none">

        </div>
        <table cellspacing=0 id="billTable">
            <tr class="odd tableHeader">
                <th>رقم الدورة</th>
                <th>رقم الاتفاقية</th>
                <th>الاسم </th>
                <th>المبلغ السابق</th>
                <th>المبلغ الحالي </th>
                <th>أقل مبلغ للدفع</th>
            </tr>
            <tr class="even">
                <td>25361425</td>
                <td>المبغ المدفوع</td>
                <td>أبراهيم غانم</td>
                <td>المبغ المدفوع</td>
                <td>المبغ المدفوع</td>
                <td>المبغ المدفوع</td>
            </tr>
        </table>
    </div>
@endsection
