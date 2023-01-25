@extends('layouts.app')
@section('content')

@section('title', 'Designation List')

@section('css')
@endsection

<section class="section">
    <div class="row">
        <div class="col-lg-8">

            <!-- table resource show componemts -->
            @component('components.table.table', [
                'title' => 'List of designation',
                'data' => $designations,
                'id' => 'designation_id',
                'route' => 'designation',
            
                'thead1' => 'Department', //if you want reletion another table must be assign in thead 1,2,3
                'reletion1' => 'department', //easir loading reletion name
                'reletion1Field_name' => 'name', //this is reletion field thatway i am not use tdata1
            
                'thead2' => 'Name',
                'tdata2' => 'name',
            ])
            @endcomponent

        </div>

        <div class="col-lg-4">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Designation Store or updated</h5>
                    @component('components.form.designation', [
                        'edit' => @$edit,
                        'departments' => @$departments,
                    ])
                    @endcomponent
                </div>
            </div>




            @section('js')
            @endsection
        @endsection
