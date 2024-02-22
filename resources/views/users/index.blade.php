@extends('layouts.main')
@section('content')
    <div class="content mangeUsers">
        <a href="{{ route('users.create') }}">
            <div class="addUser btn_hover">
                إضافة مستخدم
            </div>
        </a>
        <h3>
            <i class="fa-solid fa-list"></i>
            قائمة المستخدمين
        </h3>
        <table>
            <tr class="odd tableHeader">
                <th>الاسم</th>
                <th>نوع المستخدم</th>
                <th>اسم المستخدم</th>
                <th>الحالة</th>
            </tr>
            @foreach ($users as $user)
                <tr class="even">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->type }}</td>
                    <td>{{ $user->user_name }}</td>
                    <td class="controlpanel">
                        <div>
                            <form id="deleteUserForm_{{ $user->id }}" action="{{ Route('users.destroy',$user['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <i class="fa-solid fa-trash" onclick="document.getElementById('deleteUserForm_{{ $user->id }}').submit()"></i>
                            </form>
                        </div>
                        <div>
                            <a href="{{ Route('users.edit',$user->id)}}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </div>
                        
                    </td>
                </tr>
            @endforeach
            {{-- <tr class="odd">
                <td>محمد مزهر عمر بافرج</td>
                <td>مدير</td>
                <td>mohammed123</td>
                <td class="controlpanel">
                    <div><i class="fa-solid fa-trash"></i></div>
                    <div><i class="fa-regular fa-pen-to-square"></i></div>
                </td>
            </tr> --}}
        </table>
    </div>
@endsection
{{-- <form  action="{{Route('users.edit',$user['id'])}}" method="GET"><button class="dashbordButton"><i class="fa-regular fa-pen-to-square"></i></button></form> --}}
