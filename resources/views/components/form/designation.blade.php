@if (@$edit)
    <form action="@route('designation.update', @$edit->designation_id)" enctype="multipart/form-data" method="POST">
        @method('PUT')
    @else
        <form action="@route('designation.store')" enctype="multipart/form-data" method="POST">
            @method('POST')
@endif
@csrf
<div class="section">
    @component('components.text-input', [
        'label' => 'Name.',
        'type' => 'text',
        'name' => 'name',
        'placeholder' => 'software eng.',
        'required' => true,
        'value' => @$edit->name,
    ])
    @endcomponent

    @component('components.select-input', [
        'id' => 'department_id',
        'name' => 'department_id',
        'resource' => $departments,
        'field_id' => 'department_id',
        'label' => 'Select department',
        'field_name' => 'name',
        'value' => @$edit ? @$edit->department_id : '',
    ])
    @endcomponent

    @component('components.primary-button', ['name' => @$edit ? 'Update designation' : 'Create designation'])
    @endcomponent


</div>
</form>
