@extends('layouts.app')
@section('content')

@section('title', 'Department List')

@section('css')
@endsection

<section class="section">
    <div class="row">
        <div class="col-lg-8">

            <!-- table resource show componemts -->
            @component('components.table.table', [
                'title' => 'List of department',
                'data' => $departments,
                'id' => 'department_id',
                'route' => 'department',
                'status' => false,
            
                'thead1' => 'Name',
                'tdata1' => 'name',
            ])
            @endcomponent

        </div>

        <div class="col-lg-4">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Department Store or updated</h5>
                    @component('components.form.department', [
                        "edit" => @$edit,
                    ])
                    @endcomponent
                </div>
            </div>




            @section('js')
            @endsection
        @endsection
