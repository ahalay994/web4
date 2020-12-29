<div class="row">
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'title', 'label' => 'Заголовок'])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.datetime-picker', [
            'entity' => $entity,
            'required' => true,
            'field' => 'published_at',
            'label' => 'Дата и время публикации',
            'value' => ($entity && $entity->published_at) ? $entity->getPublishedAtFormatted() : '',
            ])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.image', [
			'entity' => $entity,
			'required' => (($entity && $entity->image != 0) ? false : true),
			'field' => 'image',
			'label' => 'Изображение'
		])
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        @include('admin::components.form.fields.ckeditor', ['entity' => $entity, 'required' => true, 'field' => 'short_description', 'label' => 'Краткое описание'])
    </div>
    <div class="col-sm-12">
        @include('admin::components.form.fields.ckeditor', ['entity' => $entity, 'required' => false, 'field' => 'description', 'label' => 'Полное описание'])
    </div>
</div>

@if (!empty($entity->id))
    {{ Form::hidden('id', $entity->id) }}
@endif

@include('admin::components.form.buttons.submit')
@include('admin::components.form.buttons.cancel', ['route' => 'admin.news.index'])

{{ csrf_field() }}
