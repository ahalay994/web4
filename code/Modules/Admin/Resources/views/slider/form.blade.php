<div class="form-group {{ ($errors->first('image')) ? 'has-error' : '' }}">
    <input type="file" name="image[]" multiple="true" accept="image/jpeg,image/png,image/jpg">
    <p class="help-block">{{ $errors->first('image') }}</p>
</div>

@if (!empty($entity->id))
    {{ Form::hidden('id', $entity->id) }}
@endif

@include('admin::components.form.buttons.submit')
@include('admin::components.form.buttons.cancel', ['route' => 'admin.slider.index'])

{{ csrf_field() }}
