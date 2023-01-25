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

            
            <a href="{{url('punch/in')}}">PunchIn</a>

            <a href="{{ url('punch/out') }}">Punch Out</a>
        </div>
    </div> 
</section>

@section('js')
@endsection

@endsection
