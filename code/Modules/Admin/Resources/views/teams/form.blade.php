<div class="row">
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'name', 'label' => 'Кличка'])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.select2', [
            'entity' => $entity,
            'label' => 'Тип',
            'required' => true,
            'field' => 'type_id',
            'options' => \App\Models\Type::getOptions(),
            'value' => value_or_old($entity, 'type_id'),
            'multiple' => false,
        ])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'old', 'label' => 'Возраст'])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.image', [
			'entity' => $entity,
			'required' => (($entity && $entity->image != 0) ? false : true),
			'field' => 'image',
			'label' => 'Фото'
		])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.checkbox', [
            'entity' => $entity,
            'checked' => value_or_old($entity, 'sterilization_castration'),
            'field' => 'sterilization_castration',
            'label' => 'Стерелизована/кастрирован?'
        ])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.checkbox', [
            'entity' => $entity,
            'checked' => value_or_old($entity, 'active'),
            'field' => 'active',
            'label' => 'Забрали домой?'
        ])
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        @include('admin::components.form.fields.ckeditor', ['entity' => $entity, 'required' => false, 'field' => 'description', 'label' => 'Описание'])
    </div>
</div>
<div class="row">
</div>

@if (!empty($entity->id))
    {{ Form::hidden('id', $entity->id) }}
@endif

@include('admin::components.form.buttons.submit')
@include('admin::components.form.buttons.cancel', ['route' => 'admin.teams.index'])

{{ csrf_field() }}
