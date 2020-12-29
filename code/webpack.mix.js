const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.scripts(['resources/js/script.js'], 'public/js/all.js');

mix
    .scripts(['Modules/Admin/Resources/assets/js/admin.js'], 'public/js/admin.js')
    .scripts(['Modules/Admin/Resources/assets/js/delete-handler.js'], 'public/js/delete-handler.js')
;

mix.sass('resources/sass/global.scss', 'public/css')
    .options({
        postCss: [
            require('postcss-css-variables')()
        ]
    });


mix.sass('Modules/Admin/Resources/assets/sass/admin.scss', 'public/css')
    .options({
        postCss: [
            require('postcss-css-variables')()
        ]
    });


/** ADMIN LIBS AND PLUGINS **/
mix
    // datetimepicker
    .copy('Modules/Admin/Resources/assets/js/plugins/date_time_picker_bootstrap_4/build/css/bootstrap-datetimepicker.min.css', 'public/css/admin/bootstrap-datetimepicker.min.css')
    .copy('Modules/Admin/Resources/assets/js/plugins/date_time_picker_bootstrap_4/build/js/bootstrap-datetimepicker.min.js', 'public/js/admin/bootstrap-datetimepicker.min.js')
    .copy('Modules/Admin/Resources/assets/js/plugins/moment.min.js', 'public/js/admin/moment.min.js')
    // ckeditor
    // .copy('Modules/Admin/Resources/assets/js/plugins/ckeditor5/ckeditor5/src/ckeditor.js', 'public/js/admin/ckeditor/ckeditor.js')
    // .copy('Modules/Admin/Resources/assets/js/plugins/ckeditor5/full/ckeditor.js', 'public/js/admin/ckeditor/ckeditor.js')
    // .copy('Modules/Admin/Resources/assets/js/plugins/ckeditor5/config.js', 'public/js/admin/ckeditor/config.js')
;
