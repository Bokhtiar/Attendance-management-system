@extends('layouts.app')
@section('content')

@section('title', 'Product List')

@section('css')
@endsection

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <!-- table resource show componemts -->
            @component('components.table.table', [
                'title' => 'List of Leave application',
                'data' => $leaves,
                'id' => 'leave_id',
                'route' => 'leave',
                'status' => true,
            
                'thead1' => 'Employee', //if you want reletion another table must be assign in thead 1,2,3
                'reletion1' => 'user', //easir loading reletion name
                'reletion1Field_name' => 'f_name', //this is reletion field thatway i am not use tdata1
            
                'thead2' => 'Start date',
                'tdata2' => 'start_date',
            
                'thead3' => 'End date',
                'tdata3' => 'end_date',
            ])
            @endcomponent

        </div>
    </div>
</section>




@section('js')
@endsection
@endsection
