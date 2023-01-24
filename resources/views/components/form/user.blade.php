@if (@$edit)
    <form action="@route('user.update', @$edit->id)" enctype="multipart/form-data" method="POST">
        @method('PUT')
    @else
        <form action="@route('user.store')" enctype="multipart/form-data" method="POST">
            @method('POST')
@endif
@csrf
<div class="row">

    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'First name.',
            'type' => 'text',
            'name' => 'f_name',
            'placeholder' => 'jhon',
            'required' => true,
            'value' => @$edit->f_name,
        ])
        @endcomponent
    </div>
    <!--end first name -->

    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'Last name.',
            'type' => 'text',
            'name' => 'l_name',
            'placeholder' => 'sina',
            'required' => true,
            'value' => @$edit->l_name,
        ])
        @endcomponent
    </div>
    <!--end last name -->

    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'Email address.',
            'type' => 'email',
            'name' => 'email',
            'placeholder' => 'example@gmail.com',
            'required' => true,
            'value' => @$edit->email,
        ])
        @endcomponent
    </div>
    <!-- end email -->

    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'Phone',
            'type' => 'number',
            'name' => 'phone',
            'placeholder' => '018xxxxxxxxx',
            'required' => true,
            'value' => @$edit->phone,
        ])
        @endcomponent
    </div>
    <!--end phone -->

    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'Permanent address',
            'type' => 'text',
            'name' => 'permanent_address',
            'placeholder' => 'Dhaka',
            'required' => true,
            'value' => @$edit->permanent_address,
        ])
        @endcomponent
    </div>
    <!--parmanents address -->

    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'Present address',
            'type' => 'text',
            'name' => 'present_address',
            'placeholder' => 'Dhaka',
            'required' => true,
            'value' => @$edit->present_address,
        ])
        @endcomponent
    </div>
    <!--end present_address -->


    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'Designation',
            'type' => 'text',
            'name' => 'designation_id',
            'placeholder' => '1',
            'value' => @$edit->designation_id,
        ])
        @endcomponent
    </div>
    <!--end designation id -->


    <div class="col-md-6 col-lg-6 col-sm-12">
        @component('components.text-input', [
            'label' => 'Salary',
            'type' => 'number',
            'name' => 'salary',
            'placeholder' => '205000',
            'required' => true,
            'value' => @$edit->salary,
        ])
        @endcomponent
    </div>
    <!--end present_address -->

    <div class="col-md-12 col-lg-12 col-sm-12">
        @component('components.text-input', [
            'label' => 'Password',
            'type' => 'text',
            'name' => 'password',
            'placeholder' => '123456789',
            'required' => true,
            'value' => @$edit->password,
        ])
        @endcomponent
    </div>
    <!--end present_address -->

    @component('components.primary-button', ['name' => @$edit ? 'Update employee' : 'Create employee'])
    @endcomponent


</div>
</form>
