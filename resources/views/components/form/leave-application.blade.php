@if (@$edit)
    <form action="@route('leave.update', @$leave->id)" enctype="multipart/form-data" method="POST">
        @method('PUT')
    @else
        <form action="@route('leave.store')" enctype="multipart/form-data" method="POST">
            @method('POST')
@endif
@csrf
<div class="row">

    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'Start date.',
            'type' => 'date',
            'name' => 'start_date',
            'placeholder' => '',
            'required' => true,
            'value' => @$edit->start_date,
        ])
        @endcomponent
    </div>
    <!--end start date -->

    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'End date.',
            'type' => 'date',
            'name' => 'end_date',
            'placeholder' => '',
            'required' => true,
            'value' => @$edit->end_date,
        ])
        @endcomponent
    </div>
    <!-- end date -->

    <div class="col-md-12 col-lg-12 col-sm-12">
        @component('components.textarea', [
            'label' => 'Resone',
            'name' => 'resone',
            'placeholder' => 'Resone...',
            'value' => @$edit ? @$edit->resone : '',
        ])
        @endcomponent
    </div>
    <!-- end date -->

    @component('components.primary-button', ['name' => @$edit ? 'Update Leave Application' : 'Crete Leave Application '])
    @endcomponent


</div>
</form>
