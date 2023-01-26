@extends('layouts.app')
@section('content')

@section('title', 'Dashboard')

@section('css')
@endsection

@component('components.brad-crumbs', [
    'title' => 'Dashboard',
])
@endcomponent


@component('components.admin-dashboard',[
    'total_employee' => $total_employee,
    'total_department' => $total_department,
    'total_designation' => $total_designation,
    'total_notice' => $total_notice,
    'attendances' => $attendances,
    'notices' => $notices,
])
@endcomponent


@section('js')
@endsection

@endsection
