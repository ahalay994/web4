<div class="form-group @if ($required)required @endif {{ $errors->has($field) ? ' has-error' : '' }} @if (isset($hided) && $hided)hide @endif">
    <div class="checkbox checkbox-switch">
    <label>
        <input type="checkbox" class="switch"
            name="{{$field}}"
            data-on-text="{{$on_text}}"
            data-off-text="{{$off_text}}"
            data-on-color="{{$on_color}}"
            data-off-color="{{$off_color}}"
            @if (isset($checked) && $checked)checked="checked"@endif
            @if (isset($value) && $value)value="{{$value}}"@endif
        >
        @if (isset($label)) {{$label}} @endif
        <small>@if (isset($help)) ({{ $help }}) @endif</small>
    </label>
    </div>
    <small class="text-danger">{{ $errors->first($field) }}</small>
</div>

