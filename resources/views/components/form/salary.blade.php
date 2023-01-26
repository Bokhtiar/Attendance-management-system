@if (@$edit)
    <form action="@route('salary.update', @$edit->salary_id)" enctype="multipart/form-data" method="POST">
        @method('PUT')
    @else
        <form action="@route('salary.store')" enctype="multipart/form-data" method="POST">
            @method('POST')
@endif
@csrf
<div class="row">

    <div class="col-md-12 col-lg-12 col-sm-12">
        @component('components.select-input', [
            'id' => 'id',
            'name' => 'user_id',
            'resource' => $users,
            'field_id' => 'id',
            'label' => 'Select employee',
            'field_name' => 'f_name',
            'value' => @$edit ? @$edit->user_id : '',
        ])
        @endcomponent
    </div>
    <!--end designation id -->

    <div class="col-md-12 col-lg-12 col-sm-12">
        @component('components.text-input', [
            'label' => 'Amount.',
            'type' => 'number',
            'name' => 'amount',
            'placeholder' => '34000',
            'required' => true,
            'value' => @$edit->amount,
        ])
        @endcomponent
    </div>
    <!-- end date -->

    @component('components.primary-button', ['name' => @$edit ? 'Salary updated' : 'Crete salary '])
    @endcomponent


</div>
</form>
