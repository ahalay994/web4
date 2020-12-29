@set('key_start_at', isset($key_start_at) ? $key_start_at : 'start_at')
@set('key_end_at', isset($key_end_at) ? $key_end_at : 'end_at')

<div class="form-group{{ $errors->has($field) ? ' has-error' : '' }} @if ($required)required @endif">
    {!! Form::label($field, $label.':') !!}

	<div class="input-group">
		<span class="input-group-addon"><i class="icon-calendar22"></i></span>
		<input type="text" class="form-control" name="{{ $field }}" id="{{$field}}" value="{{ value_or_old($entity, $field) }}">
	</div>
    <small class="text-danger">{{ $errors->first($field) }}</small>

	{{ Form::hidden($key_start_at, value_or_old($entity, $key_start_at), ['id' => $field.'-start-at']) }}
	{{ Form::hidden($key_end_at, value_or_old($entity, $key_end_at), ['id' => $field.'-end-at']) }}
</div>

@push('foot.scripts')
<script>
$(function(){

    var format = 'DD.MM.YYYY HH:mm';
	var $dtr = $('#{{$field}}');

    var startDate = $('#{{$field}}-start-at').val() ? moment($('#{{$field}}-start-at').val()).format(format) : moment().format(format);
    var endDate = $('#{{$field}}-end-at').val() ? moment($('#{{$field}}-end-at').val()).format(format) : moment().format(format);
    console.log(startDate, endDate);

	$dtr.daterangepicker({
        showDropdowns: true,
        autoUpdateInput: false,
		timePicker: true,
		timePicker24Hour: true,
        startDate: startDate,
        endDate: endDate,
        // autoApply: true,
        // opens: "left",
        applyClass: 'bg-primary', //'bg-slate-600',
        cancelClass: 'btn-default',
        locale: {
        	format: format,
            applyLabel: 'Вперед',
            cancelLabel: 'Отмена',
            startLabel: 'Начальная дата',
            endLabel: 'Конечная дата',
            customRangeLabel: 'Выбрать дату',
            daysOfWeek: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт','Сб'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            firstDay: 1
        }
    }, function(dtStart, dtEnd) {
        $('#{{$field}}-start-at').val(dtStart.format('YYYY-MM-DD HH:mm:00'));
        $('#{{$field}}-end-at').val(dtEnd.format('YYYY-MM-DD HH:mm:59'));

        $dtr.val(
            dtStart.format(format) + ' - ' + dtEnd.format(format)
        );
    });
})
</script>
@endpush

