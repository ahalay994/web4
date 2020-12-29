<div class="form-group {{$classWrap ?? ''}}">
	<div class="checkbox @if(isset($disabled) && $disabled) disabled @endif">
		<label>
			<input type="checkbox" class="styled" name="{{$field}}" @if(isset($checked) && $checked) value="1" @endif @if(isset($checked) && $checked) checked="checked" @endif @if(isset($disabled) && $disabled) disabled="disabled" @endif>
			{{ $label }}
		</label>
	</div>
	@if (isset($help) && empty($errors->first($field)))<span class="help-block">{!! $help !!}</span>@endif
</div>
<script>
	$('input[name="{{$field}}"]').change(function() {
		var checked = $('input[name="{{$field}}"]:checked').size();
		if (checked) {
			$(this).attr('checked', true);
		} else {
			$(this).attr('checked', false);
		}
		$(this).val(checked);
	})
</script>
