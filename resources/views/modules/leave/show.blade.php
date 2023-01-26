@extends('layouts.app')
@section('content')

@section('title', 'Product Details')

@section('css')
@endsection


@component('components.brad-crumbs', [
    'title' => 'User information',
])
@endcomponent

<div class="card">
    <div class="card-header">
        <span class="font-weight-bold">Employee :</span> {{ $show->user?$show->user->f_name : "" }}
    </div>
    <div class="card-body">
        <div class=" my-4">
            <span><strong>Employee: </strong>  {{ $show->user?$show->user->f_name : "" }}  </span> <br>
            <span><strong>Email:</strong>  {{ $show->user ? $show->user->email : "" }} </span> <br> 
            <span> <strong>Start Date:</strong> {{$show->start_date}} </span><br>
            <span> <strong>End Date:</strong> {{$show->end_date}} </span><br>
            <span> <strong>Resone</strong> {{$show->resone}} </span><br>
            
        </div>
    </div>
</div>

@section('js')
@endsection
@endsection
