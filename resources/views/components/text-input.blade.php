<div class="form-group">

    <label for="">{{$label}} {{@$required == true ?  '*' : ""}}  </label>
    <input  type={{$type}}
            name={{$name}} 
            {{@$required == true ?  'required' : ""}}
     class="form-control" placeholder={{$placeholder}} id="">
</div>