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
            @for ($i = 0; $i < count($users); $i++)
                @if ($i%2 == 0)
                    <tr class="even">
                        <td>{{ $users[$i]->name }}</td>
                        <td>{{ $users[$i]->type }}</td>
                        <td>{{ $users[$i]->user_name }}</td>
                        <td class="controlpanel">
                            <div>
                                <form id="deleteUserForm_{{ $users[$i]->id }}" action="{{ Route('users.destroy',$users[$i]['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <i class="fa-solid fa-trash" onclick="document.getElementById('deleteUserForm_{{ $users[$i]->id }}').submit()"></i>
                                </form>
                            </div>
                            <div>
                                <a href="{{ Route('users.edit',$users[$i]->id)}}">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                            </div>
                            
                        </td>
                    </tr>
                @else
                <tr class="odd">
                    <td>{{ $users[$i]->name }}</td>
                    <td>{{ $users[$i]->type }}</td>
                    <td>{{ $users[$i]->user_name }}</td>
                    <td class="controlpanel">
                        <div>
                            <form id="deleteUserForm_{{ $users[$i]->id }}" action="{{ Route('users.destroy',$users[$i]['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <i class="fa-solid fa-trash" onclick="document.getElementById('deleteUserForm_{{ $users[$i]->id }}').submit()"></i>
                            </form>
                        </div>
                        <div>
                            <a href="{{ Route('users.edit',$users[$i]->id)}}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </div>
                        
                    </td>
                </tr>
                @endif
            @endfor
        </table>
    </div>
@endsection
