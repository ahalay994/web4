<div class="row">
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'key', 'label' => 'Ключ'])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'name', 'label' => 'Название'])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'value', 'label' => 'Значение'])
    </div>
</div>

@if (!empty($entity->id))
    {{ Form::hidden('id', $entity->id) }}
@endif

@include('admin::components.form.buttons.submit')
@include('admin::components.form.buttons.cancel', ['route' => 'admin.settings.index'])

{{ csrf_field() }}
