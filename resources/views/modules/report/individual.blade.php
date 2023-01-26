@extends('layouts.app')
@section('content')

@section('title', 'Product List')

@section('css')
@endsection

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @component('components.brad-crumbs',[
                'title' => "Report",               
            ])
                
            @endcomponent

            <div class="card">
                <div class="card-body my-4">
                    <h3>Individual Report</h3>
                    <form class="d-flex" action="@route('report.search')" method="POST">
                        @method('post')
                        @csrf
                        <select name="user_id" id="" class="form-control">
                            <option value="">Select Employee</option>
                            @foreach ($users as $item)
                            <option value="{{$item->id}}">{{$item->f_name .' '. $item->l_name}}</option>
                            @endforeach
                        </select>
                        <input type="submit" class="btn btn-success" value="Search" name="" id="">
                    </form>
                </div>
            </div>


            <!-- table resource show componemts -->
            @component('components.table.table', [
                'title' => 'List of attendances',
                'data' => $attendances,
                'id' => 'attendance_id',
                'route' => 'attendance',
            
                'thead1' => 'Employee', //if you want reletion another table must be assign in thead 1,2,3
                'reletion1' => 'user', //easir loading reletion name
                'reletion1Field_name' => 'f_name', //this is reletion field thatway i am not use tdata1
            
                'thead2' => 'PunchIn',
                'tdata2' => 'in',
            
                'thead3' => 'PunchOut',
                'tdata3' => 'out',

                'thead4' => 'Date',
                'tdata4' => 'created_at',
            ])
            @endcomponent

        </div>
    </div>
</section>




@section('js')
@endsection
@endsection
