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
                'title' => 'List of notice',
                'data' => $notices,
                'id' => 'notice_id',
                'route' => 'notice',
                'status' => false,
            
                'thead0' => 'Image', //if you can image show must be thead0 inside image show
                'image_path' => '/images/notice/', //image path
                'tdata0' => 'image',
            
                'thead1' => 'Title',
                'tdata2' => 'title',
            
                'thead3' => 'Short Description',
                'tdata3' => 'short_des',
            ])
            @endcomponent

        </div>
    </div>
</section>




@section('js')
@endsection
@endsection
