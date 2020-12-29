<div class="form-group @if ($required)required @endif {{ $errors->has($field) ? ' has-error' : '' }} @if (isset($hided) && $hided)hide @endif">
    {{ Form::label('tags', $label.':', ['class' => 'control-label']) }}
	{{ Form::select($field, $options, $value, ['id' => $field, 'class' => 'form-control '. (isset($class)? $class : 'select2'), 'multiple' => $multiple, 'data-value' => (isset($datavalue) ? $datavalue : ""), 'disabled' => (isset($disabled) ? $disabled : false)]) }}
    <small class="text-danger">{{ $errors->first($field) }}</small>
</div>
