<script>
$(function() {
    $('.select-lang a').click(function(e){
        e.preventDefault();

        $(this).parents('.translatable-form').attr('data-lang', $(this).data('lang'));

        $(this).parents('.translatable-form').find('.btn:first-child').html($(this).data('lang')+' <span class="caret"></span>')
    })
});
</script>

<style>
.translatable-form .translatable-field{display: none;}
@foreach (app_config('locales') as $lang)
.translatable-form[data-lang="{{$lang}}"] .translatable-field.{{$lang}} {display: block;}
@endforeach
</style>