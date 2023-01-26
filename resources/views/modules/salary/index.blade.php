@extends('layouts.app')
@section('content')

@section('title', 'Salary List')

@section('css')
@endsection

<section class="section">
    <div class="row">
        <div class="col-lg-8">

            <!-- table resource show componemts -->
            @component('components.table.table', [
                'title' => 'List of salary',
                'data' => $salaries,
                'id' => 'salary_id',
                'route' => 'salary',
                'status' => true,
            
                'thead1' => 'Employee', //if you want reletion another table must be assign in thead 1,2,3
                'reletion1' => 'user', //easir loading reletion name
                'reletion1Field_name' => 'f_name', //this is reletion field thatway i am not use tdata1
            
                'thead2' => 'amount',
                'tdata2' => 'amount',
            ])
            @endcomponent

        </div>

        <div class="col-lg-4">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Designation Store or updated</h5>
                    @component('components.form.salary', [
                        'edit' => @$edit,
                        'users' => @$users,
                    ])
                    @endcomponent
                </div>
            </div>




            @section('js')
            @endsection
        @endsection
