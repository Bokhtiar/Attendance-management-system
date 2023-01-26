@extends('layouts.app')
@section('content')

@section('title', 'Permission create Form')

@section('css')
@endsection


<div class="pagetitle">
    <h1>Permission detail</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item">Permission show</li>
            <li class="breadcrumb-item active">Permission details</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<div class="card">
    <div class="card-header">
        <span class="font-weight-bold">Permission table list</span>
    </div>
    <div class="card-body">
        <div class="container">
            <form action="@route('permission.update', $permission->id)" method="POST">
                @method('put')
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select name="role_id" class="form-control">
                                <option value="">Please select a role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        @if ($role->id === $permission->role_id) selected @endif>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                       
                    </div>
                    <div class="col-md-8">
                        <table class="table responsive-table-input-matrix">
                            <thead>
                                <tr>
                                    <th>Permission</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                    <th>List</th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- role start --}}
                                <tr>
                                    <td>Roles</td>
                                    <td>
                                        <input type="checkbox" name="permission[role][add]"
                                            @isset($permission['permission']['role']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[role][edit]"
                                            @isset($permission['permission']['role']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[role][view]"
                                            @isset($permission['permission']['role']['view']) checked @endisset value="1">

                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[role][delete]"
                                            @isset($permission['permission']['role']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[role][list]"
                                            @isset($permission['permission']['role']['list']) checked @endisset value="1">
                                    </td>

                                </tr>
                                {{-- role end --}}

                                {{-- permission start --}}
                                <tr>
                                    <td>Permissions</td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][add]"
                                            @isset($permission['permission']['permission']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][edit]" value="1"
                                            @isset($permission['permission']['permission']['edit']) checked @endisset>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][view]" value="1"
                                            @isset($permission['permission']['permission']['view']) checked @endisset>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][delete]"
                                            @isset($permission['permission']['permission']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][list]"
                                            @isset($permission['permission']['permission']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- permission end --}}

                                {{-- user start --}}
                                <tr>
                                    <td>CHnage password</td>
                                    <td>
                                        <input type="checkbox" name="permission[change_password][list]"
                                            @isset($permission['permission']['change_password']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- user end  --}}

                                {{-- user start --}}
                                <tr>
                                    <td>Users</td>
                                    <td>
                                        <input type="checkbox" name="permission[user][add]"
                                            @isset($permission['permission']['user']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[user][edit]"
                                            @isset($permission['permission']['user']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[user][view]"
                                            @isset($permission['permission']['user']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[user][delete]"
                                            @isset($permission['permission']['user']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[user][list]"
                                            @isset($permission['permission']['user']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- user end  --}}


                                <tr>
                                    <td>Department</td>
                                    <td>
                                        <input type="checkbox" name="permission[department][add]"
                                            @isset($permission['permission']['department']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[department][edit]"
                                            @isset($permission['permission']['department']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[department][view]"
                                            @isset($permission['permission']['department']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[department][delete]"
                                            @isset($permission['permission']['department']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[department][list]"
                                            @isset($permission['permission']['department']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- department end  --}}

                                <tr>
                                    <td>Designation</td>
                                    <td>
                                        <input type="checkbox" name="permission[designation][add]"
                                            @isset($permission['permission']['designation']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[designation][edit]"
                                            @isset($permission['permission']['designation']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[designation][view]"
                                            @isset($permission['permission']['designation']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[designation][delete]"
                                            @isset($permission['permission']['designation']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[designation][list]"
                                            @isset($permission['permission']['designation']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- designation end  --}}

                                <tr>
                                    <td>Attendance</td>
                                    <td>
                                        <input type="checkbox" name="permission[attendance][add]"
                                            @isset($permission['permission']['attendance']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[attendance][edit]"
                                            @isset($permission['permission']['attendance']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[attendance][view]"
                                            @isset($permission['permission']['attendance']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[attendance][delete]"
                                            @isset($permission['permission']['attendance']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[attendance][list]"
                                            @isset($permission['permission']['attendance']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- Leave end  --}}


                                <tr>
                                    <td>Salary</td>
                                    <td>
                                        <input type="checkbox" name="permission[salary][add]"
                                            @isset($permission['permission']['salary']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[salary][edit]"
                                            @isset($permission['permission']['salary']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[salary][view]"
                                            @isset($permission['permission']['salary']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[salary][delete]"
                                            @isset($permission['permission']['salary']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[salary][list]"
                                            @isset($permission['permission']['salary']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- Leave end  --}}

                                <tr>
                                    <td>Leave</td>
                                    <td>
                                        <input type="checkbox" name="permission[leave][add]"
                                            @isset($permission['permission']['leave']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[leave][edit]"
                                            @isset($permission['permission']['leave']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[leave][view]"
                                            @isset($permission['permission']['leave']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[leave][delete]"
                                            @isset($permission['permission']['leave']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[leave][list]"
                                            @isset($permission['permission']['leave']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- Leave end  --}}

                                <tr>
                                    <td>Notice</td>
                                    <td>
                                        <input type="checkbox" name="permission[notice][add]"
                                            @isset($permission['permission']['notice']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[notice][edit]"
                                            @isset($permission['permission']['notice']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[notice][view]"
                                            @isset($permission['permission']['notice']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[notice][delete]"
                                            @isset($permission['permission']['notice']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[notice][list]"
                                            @isset($permission['permission']['notice']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- Leave end  --}}


                                <tr>
                                    <td>Report</td>
                                    <td>
                                        <input type="checkbox" name="permission[report][list]"
                                            @isset($permission['permission']['report']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- user end  --}}

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center my-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>

@endsection
