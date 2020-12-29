@set('disabled', isset($disabled) && $disabled ? true : false)
@set('required', isset($required) && $required == true ? true : false)
<div class="form-group @if ($required) required @endif {{ $errors->has($field) ? ' has-error' : '' }}">
	{{ Form::label($field, $label, ['class' => 'control-label']) }}
	{{ Form::text($field, value_or_old($entity, $field), ['class' => 'form-control required', 'id' => 'picker_container_' . $field, 'disabled' => $disabled]) }}

	<small class="text-danger">{{ $errors->first($field) }}</small>
</div>

@push('foot.scripts')
<script>
	$(function(){
		var options = {
			color: '#0000ff',
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#picker_container_{{ $field }}').val('#' + hex);
			}
		};
		$('#picker_container_{{ $field }}').ColorPicker(options);

		@if (!empty($entity->{$field}))
			$('#picker_container_{{ $field }}').ColorPickerSetColor('{{ $entity->{$field} }}');
		@endif
	})
</script>
@endpush