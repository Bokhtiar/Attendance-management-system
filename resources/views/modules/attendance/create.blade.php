@extends('layouts.app')
@section('content')

@section('title', 'Dashboard')

@section('css')
@endsection

@component('components.brad-crumbs', [
    'title' => 'Attendance',
])
@endcomponent

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Attendance</h5>

            <div class="mx-auto text-center">
                <a href="{{url('punch/in')}}" class="btn btn-success text-light">PunchIn</a>

                <a href="{{ url('punch/out') }}" class="btn btn-danger text-light">PunchOut</a>
            </div>
            
        </div>
    </div> 
</section>

@section('js')
@endsection

@endsection
