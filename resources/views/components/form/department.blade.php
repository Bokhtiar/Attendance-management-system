@if (@$edit)
    <form action="@route('department.update', @$edit->department_id)" enctype="multipart/form-data" method="POST">
        @method('PUT')
    @else
        <form action="@route('department.store')" enctype="multipart/form-data" method="POST">
            @method('POST')
@endif
@csrf
<div class="section">
    @component('components.text-input', [
        'label' => 'Name.',
        'type' => 'text',
        'name' => 'name',
        "placeholder" => "Developer.",
        'required' => true,
        "value" => @$edit->name,
    ])
    @endcomponent


    @component('components.primary-button', ['name' => @$edit ? 'Update department' : 'Create department'])
    @endcomponent


</div>
</form>
