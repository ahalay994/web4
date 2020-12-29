<div class="row">
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'title', 'label' => 'Название'])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'url', 'label' => 'Ссылка'])
    </div>
</div>

@if (!empty($entity->id))
    {{ Form::hidden('id', $entity->id) }}
@endif

@include('admin::components.form.buttons.submit')
@include('admin::components.form.buttons.cancel', ['route' => 'admin.menu.index'])

{{ csrf_field() }}
