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
                'title' => 'List of user',
                'data' => $users,
                'id' => 'id',
                'route' => 'user',
            
                'thead1' => 'First Name',
                'tdata1' => 'f_name',
            
                'thead2' => 'Last Name',
                'tdata2' => 'l_name',
            
                'thead3' => 'Email',
                'tdata3' => 'email',
            
                'thead4' => 'Phone',
                'tdata4' => 'phone',
            ])
            @endcomponent

        </div>
    </div>
</section>




@section('js')
@endsection
@endsection
