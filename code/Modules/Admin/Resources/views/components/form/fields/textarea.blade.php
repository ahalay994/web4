@set('disabled', isset($disabled) && $disabled ? true : false)
@set('hided', isset($hided) && $hided == true ? true : false)
@set('rows', isset($rows) && $rows ? $rows : 3)
<div class="form-group @if ($required)required @endif {{ $errors->has($field) ? ' has-error' : '' }} @if ($hided)hide @endif">
    {{ Form::label($field, $label.':', ['class' => 'control-label']) }}
    <textarea 
        rows="{{$rows}}" 
        class="form-control" 
        name="{{$field}}" 
        id="{{$field}}" 
        @if (isset($maxlength))maxlength="{{$maxlength}}"@endif 
        @if (isset($minlength))minlength="{{$minlength}}"@endif
        @if ($disabled)disabled @endif
    >{{ isset($value) ? $value : value_or_old($entity, $field) }}</textarea>
    <small class="text-danger">{{ $errors->first($field) }}</small>
    @if (isset($help) && empty($errors->first($field)))<span class="help-block">{!! $help !!}</span>@endif
</div>