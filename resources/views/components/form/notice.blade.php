@if (@$edit)
    <form action="@route('notice.update', @$edit->notice_id)" enctype="multipart/form-data" method="POST">
        @method('PUT')
    @else
        <form action="@route('notice.store')" enctype="multipart/form-data" method="POST">
            @method('POST')
@endif
@csrf
<div class="section">
    <div class="col-md-12 col-lg-12 col-sm-12">
        @component('components.text-input', [
            'label' => 'title.',
            'type' => 'text',
            'name' => 'title',
            'placeholder' => 'grapview awsome compnay',
            'required' => true,
            'value' => @$edit->title,
        ])
        @endcomponent
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12">
        @component('components.text-input', [
            'label' => 'Short description.',
            'type' => 'text',
            'name' => 'short_des',
            'placeholder' => 'grapview awsome compnay something write where',
            'required' => true,
            'value' => @$edit->short_des,
        ])
        @endcomponent
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12">
        @component('components.textarea', [
            'label' => 'Description',
            'name' => 'long_des',
            'placeholder' => 'description...',
            'value' => @$edit->logn_des,
        ])
        @endcomponent
    </div>

    @component('components.primary-button', ['name' => @$edit ? 'Notice updated' : 'Create notice'])
    @endcomponent


</div>
</form>
