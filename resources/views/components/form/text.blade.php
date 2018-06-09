<div class="form-group">
 {{Form::label($first_name,null,['class' => 'control-label'])}}
 {{Form::text($first_name,$value,array_merge(['class'=> 'form-control'], $attributes))}}
</div>