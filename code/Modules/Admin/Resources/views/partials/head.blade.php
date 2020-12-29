<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

<link href="{{ Module::asset('admin:assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ admin_asset('assets/css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ Module::asset('admin:assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ Module::asset('admin:assets/css/core.css') }}" rel="stylesheet" type="text/css">
<link href="{{ Module::asset('admin:assets/css/components.css') }}" rel="stylesheet" type="text/css">
<link href="{{ Module::asset('admin:assets/css/colors.css') }}" rel="stylesheet" type="text/css">
<link href="{{ Module::asset('admin:plugins/nestable/jquery.nestable.css') }}" rel="stylesheet" type="text/css">
<link href="{{ admin_asset('assets/css/fixes.css') }}" rel="stylesheet" type="text/css">

<!-- /global stylesheets -->


{{ Html::style(admin_asset('plugins/bootstrap-sweetalert/sweetalert.css')) }}

<!-- Core JS files -->
<script type="text/javascript" src="{{ Module::asset('admin:assets/js/core/libraries/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ Module::asset('admin:assets/js/core/libraries/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ admin_asset('assets/js/plugins/loaders/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ admin_asset('assets/js/plugins/loaders/blockui.min.js') }}"></script>
<!-- /core JS files -->

<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="{{ Module::asset('admin:assets/js/plugins/ui/nicescroll.min.js') }}"></script>

<script type="text/javascript" src="{{ Module::asset('admin:assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script type="text/javascript" src="{{ Module::asset('admin:assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>

{{-- <script type="text/javascript" src="{{ admin_asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script> --}}
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>

{{-- <script type="text/javascript" src="{{ admin_asset('assets/js/plugins/tables/datatables/extensions/buttons.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ admin_asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script> --}}
<script type="text/javascript" src="{{ admin_asset('assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
<script type="text/javascript" src="{{ admin_asset('assets/js/plugins/forms/styling/switch.min.js') }}"></script>
<script type="text/javascript" src="{{ admin_asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

{{ Html::script(admin_asset('assets/js/plugins/ui/moment/moment.min.js')) }}
{{ Html::script(admin_asset('assets/js/plugins/pickers/daterangepicker.js')) }}
{{ Html::script(admin_asset('assets/js/plugins/pickers/anytime.min.js')) }}
{{ Html::script(admin_asset('assets/js/plugins/pickers/pickadate/picker.js')) }}
{{ Html::script(admin_asset('assets/js/plugins/pickers/pickadate/picker.date.js')) }}
{{ Html::script(admin_asset('assets/js/plugins/pickers/pickadate/picker.time.js')) }}
{{ Html::script(admin_asset('assets/js/plugins/pickers/pickadate/legacy.js')) }}
{{ Html::script(admin_asset('assets/js/core/libraries/jquery_ui/interactions.min.js')) }}
{{ Html::script(admin_asset('assets/js/plugins/forms/selects/select2.min.js')) }}
{{-- {{ Html::script(admin_asset('assets/js/plugins/forms/inputs/formatter.min.js')) }} --}}
{{ Html::script(admin_asset('assets/js/plugins/forms/inputs/formatter.min.js')) }}
{{ Html::script(admin_asset('assets/js/plugins/forms/inputs/jquery.maskMoney.min.js')) }}
{{ Html::script(admin_asset('assets/js/core/libraries/jasny_bootstrap.min.js')) }}

<script type="text/javascript" src="{{ Module::asset('admin:assets/js/core/app.js') }}"></script>

{{-- <script type="text/javascript" src="{{ Module::asset('admin:assets/js/layout_fixed_custom.js') }}"></script> --}}
<!-- /theme JS files -->

{{ Html::script(admin_asset('plugins/nestable/jquery.nestable.js')) }}
{{ Html::script(admin_asset('plugins/bootstrap-sweetalert/sweetalert.min.js')) }}
<script type="text/javascript" src="{{ admin_asset('assets/js/pages/datatables_data_sources.js') }}"></script>
{{ Html::script(admin_asset('assets/js/pages/uploader_bootstrap.js')) }}


{{--  date time picker  --}}
{{ Html::script(admin_asset('plugins/moment/min/moment.min.js')) }}
{{ Html::script(admin_asset('plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')) }}
{{ Html::style(admin_asset('plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')) }}

{{-- color picker --}}
{{ Html::script(admin_asset('plugins/colorpicker/js/colorpicker.js')) }}
{{ Html::style(admin_asset('plugins/colorpicker/css/colorpicker.css')) }}

{{ Html::style(admin_asset('css/custom.css')) }}