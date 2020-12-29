<div class="form-group" @if ($required)'required' @endif {{ $errors->has($field) ? ' has-error' : '' }} >
    @if ($label) {{ Form::label($field, $label.':', ['class' => 'control-label']) }} @endif
	@if (isset($tooltip)) @include('admin::ui.tooltip', ['text' => $tooltip]) @endif
	<input
		type="{{!isset($type) ? 'text' : $type}}"
		class="form-control"
		name="{{$field}}"
		@if (isset($maxlength))maxlength="{{$maxlength}}"@endif
		@if (isset($minlength))minlength="{{$minlength}}"@endif
		value="{{ $value ?? (!$entity && isset($default) ?  $default : value_or_old($entity, $field)) }}"
		@if (isset($disabled) && $disabled)disabled @endif
		@if (isset($placeholder))placeholder="{{ $placeholder }}" @endif
	>
	@if (isset($rules))
		@foreach ($rules as $key => $rule)
		    <small>{{ $key }}{{ $rule }}</small><br />
		@endforeach
	@endif
    <small class="text-danger">{{ $errors->first($field) }}</small>
	@if (isset($help) && empty($errors->first($field)))<span class="help-block">{!! $help !!}</span>@endif
</div>
