@if (@$edit)
    <form action="@route('role.update', @$edit->id)" enctype="multipart/form-data" method="POST">
        @method('PUT')
    @else
        <form action="@route('role.store')" enctype="multipart/form-data" method="POST">
            @method('POST')
@endif
@csrf
<div class="section">
    @component('components.text-input', [
        'label' => 'Name.',
        'type' => 'text',
        'name' => 'name',
        'placeholder' => 'employee',
        'required' => true,
        'value' => @$edit->name,
    ])
    @endcomponent

    @component('components.primary-button', ['name' => @$edit ? 'Update employee' : 'Create employee'])
    @endcomponent


</div>
</form>
