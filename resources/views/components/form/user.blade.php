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
                'name' => 'l_name',
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
                'name' => 'l_name',
                'placeholder' => '018xxxxxxxxx',
                "max" => 11
            ])
            @endcomponent
        </div>
        <!--end phone -->



        <input type="submit" class="btn btn-danger" name="" value="Create user" id="">


    </div>
</form>
