<div class="form-group my-2">
    <label for="">{{ $label }} {{ @$required == true ? '*' : '' }} </label>
    <input type={{ $type }} name={{ $name }} {{ @$required == true ? 'required' : '' }}
        class="form-control py-3" placeholder={{ $placeholder }} value={{ @$value }}>
</div>
