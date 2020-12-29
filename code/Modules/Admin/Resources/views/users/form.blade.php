<div class="row">
    <div class="col-sm-4">
        @include('admin::components.form.fields.checkbox', [
			'entity' => $entity,
			'checked' => value_or_old($entity, 'active'),
			'field' => 'active',
			'label' => 'Заблокировать пользователя?'
		])
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'name', 'label' => 'Иия'])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'email', 'label' => 'Email'])
    </div>
    <div class="col-sm-4">
        @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => false, 'field' => 'phone', 'label' => 'Номер телефона'])
    </div>
</div>

@if (!$entity && empty($entity->id))
    <div class="row">
        <div class="col-sm-4">
            @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'password', 'label' => 'Пароль'])
        </div>
        <div class="col-sm-4">
            @include('admin::components.form.fields.text', ['entity' => $entity, 'required' => true, 'field' => 'password_confirmation', 'label' => 'Пароль ещё раз'])
        </div>
    </div>
@endif

@if (!empty($entity->id))
    {{ Form::hidden('id', $entity->id) }}
@endif

@include('admin::components.form.buttons.submit')
@include('admin::components.form.buttons.cancel', ['route' => 'admin.users.index'])

{{ csrf_field() }}
