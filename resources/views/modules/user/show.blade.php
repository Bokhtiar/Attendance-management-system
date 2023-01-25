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
        <span class="font-weight-bold">Name :</span> {{ $show->f_name . ' ' . $show->l_name }}
    </div>
    <div class="card-body">
        <div class="row my-4">
            <div class="col-md-3 col-lg-3 col-sm-12 text-center">
                <img height="250px" width="250px" class="rounded " src="/images/users/{{ $show->image }}" alt="">
            </div>
            <div class="col-md-8 col-lg-8 col-sm-12 my-auto">
                <span><strong>Email:</strong> {!! $show->email !!} </span> <br>
                <span><strong>Phone:</strong> {!! $show->phone !!} </span> <br>
                <span><strong>Parmanent address:</strong> {!! $show->permanent_address !!} </span> <br>
                <span><strong>Present address:</strong> {!! $show->present_address !!} </span> <br>
                <span><strong>Designation:</strong> {{ $show->designation ? $show->designation->name : '' }} </span>
                <br>
                <span><strong>Salary:</strong> {!! $show->salary !!} </span> <br>
            </div>
        </div>
    </div>
</div>

@section('js')
@endsection
@endsection
