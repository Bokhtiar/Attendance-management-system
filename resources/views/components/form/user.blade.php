<form action="">
    <div class="row">

        <div class="col-md-6 col-lg-6 col-sm-12">
            @component('components.text-input', [
                'label' => 'First name.',
                'type' => 'text',
                'name' => 'f_name',
                'placeholder' => 'jhon',
                "required" => true
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
                'required' => true                
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
            ])
            @endcomponent
        </div>
        <!--end phone -->

        <div class="col-md-6 col-lg-6 col-sm-12">
            @component('components.text-input', [
                'label' => 'Permanent address',
                'type' => 'text',
                'name' => 'permanent_address',
                'placeholder' => "Dhaka",
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
            ])
            @endcomponent
        </div>
        <!--end present_address -->

        @component('components.primary-button',[
            "name" => "Create employee"
        ])
        @endcomponent


    </div>
</form>
