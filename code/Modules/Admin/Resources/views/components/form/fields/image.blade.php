@if ($message = \Session::get('success'))

    <div class="alert alert-success alert-block">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{{ $message }}</strong>

    </div>

    <img src="images/{{ Session::get('image') }}">

@endif

<div class="form-group @if ($required)required @endif file-field">
	<label>{{$label}}:</label>
	{{-- <input type="file" class="file-input file-input-fl" data-show-caption="false" data-show-upload="false" name="image"> --}}
	{!! Form::file($field) !!}
    @if (isset($maxsize))
{{--	    <span class="help-block">Допускаются изображения не более {{ format_bytes($maxsize, 0) }} (jpg, png)</span>--}}
    @endif
    @if (isset($showhelp) && !empty($showhelp))
	    <span class="help-block">Допускаются изображения с расширениями: jpg, png</span>
    @endif
	<small class="text-danger">{{ $errors->first($field) }}</small>
	@if (isset($help) && empty($errors->first($field)))<span class="help-block">{!! $help !!}</span>@endif

{{--	@if ($entity)--}}
		{{--  {{ Form::hidden($field.'_url', value_or_old($entity, $field.'_url')) }}  --}}
		{{ Form::hidden($field, value_or_old($entity, $field)) }}
{{--	@endif--}}
</div>
