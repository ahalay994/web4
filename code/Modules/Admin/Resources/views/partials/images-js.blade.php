{{ Html::script(admin_asset('assets/js/plugins/uploaders/fileinput.min.js')) }}

{{ Html::script(admin_asset('js/fileinput/ru.js')) }}
<script>
$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var imgs = [];
    var preview = [];

    @if (count($entity->images))
        @foreach ($entity->images as $item)
            imgs.push('{!! \Html::img($item->url(), [
                'class' => 'file-preview-image',
                'data-id' => $item->id,
                'data-mark-url' => route($route_image_mark, ['id' => $entity->id, 'image_id' => $item->id]) ]) !!}'
            );

            preview.push({
                caption: "{{ $item->filename }}",
                url: "{{ route($route_image_delete, ['id' => $entity->id, 'image_id' => $item->id]) }}",
                mark_url: "{{ route($route_image_mark, ['id' => $entity->id, 'image_id' => $item->id]) }}",
                frameClass: "file-preview-image {{ $item->is_main? ' preview-marked' : '' }}",
                // frameAttr: {"testmarked": 1, "url": "#"},
                key: {{ $item->id }}
            });
        @endforeach
    @endif

    var templateMarkAction = '{!! el('a.btn.btn-xs.btn-default.mark-action', [
            'href' => '#', 'title' => 'сделать основным изображением'
        ], el('i.fa.fa-star'))
    !!}';

    var STYLE_SETTING = 'style="width:100%;height:{height};"'; //'style="width:{width};height:{height};"';

    $(".file-input-preview").fileinput({
        language: "ru",
        // browseLabel: 'Browse',
        // browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            actions: '<div class="file-actions">\n' +
                '    <div class="file-footer-buttons">\n' +
                '        {upload}' + templateMarkAction +
                ' {delete} {other}'  +
                '    </div>\n' +
                // '    {drag}\n' +
                '    <div class="file-upload-indicator" title="{indicatorTitle}">{indicator}</div>\n' +
                '    <div class="clearfix"></div>\n' +
                '</div>'
        },
        previewTemplates: {
            generic: '<div class="file-preview-frame{frameClass}" id="{previewId}" data-fileindex="{fileindex}" data-template="{template}"><div class="file-preview-wrap">\n' +
                '   {content}\n' +
                '   {footer}\n' +
                '</div></div>\n',
            image: '<div class="file-preview-frame" id="{previewId}" data-fileindex="{fileindex}" data-template="{template}"><div class="file-preview-wrap">\n' +
                '   <div class="kv-file-content">' +
                '       <img src="{data}" class="kv-preview-data file-preview-image" title="{caption}" alt="{caption}" ' + STYLE_SETTING + '>\n' +
                '   </div>\n' +
                '   {footer}\n' +
                '</div></div>\n'

        },
        uploadUrl: "{{ route($route_image_upload, ['id' => $entity->id] ) }}", // server upload action
        uploadAsync: true,
        minFileCount: 1,
        maxFileCount: 20,
        initialPreview: imgs,
        initialPreviewAsData: false,
        initialPreviewFileType: 'image',
        initialPreviewConfig: preview,
        overwriteInitial: false,
        maxFileSize: {{ $maxsize }}
    });

    $('.file-input-preview').on('fileimageloaded', function(event, previewId) {
        var $preview = $('#'+previewId);
        $preview.find('.mark-action').addClass('disabled');
        $preview.find('.kv-file-remove').addClass('disabled');
    });

    $('.file-preview-frame.preview-marked').find('.mark-action').addClass('disabled');

    $('.file-input-preview').on('fileuploaded', function(event, data, previewId, index) {

        var $preview = $('#'+previewId);
        var $markAction = $preview.find('.mark-action');

        $markAction.removeClass('disabled');
        $preview.find('.kv-file-remove').removeClass('disabled');
    });

    $(document).on('filepredelete', ".file-input-preview", function(jqXHR) {
        var abort = true;
        if (confirm("Are you sure you want to delete this image?")) {
            abort = false;
        }
        return abort;

    });

    $(document).on('click', '.mark-action', function(e) {
        e.preventDefault();

        var $frame = $(this).parents('.file-preview-frame');
        var action = $frame.find('img.file-preview-image').data('mark-url');

        $.post(action)
            .done(function(){
                $('.mark-action').removeClass('disabled');
                $('.file-preview-frame.preview-marked').removeClass('preview-marked');

                $frame.find('.mark-action').addClass('disabled');
                $frame.addClass('preview-marked');
            })
            .fail(function(){
                alert('упс...');
                console.log('error', arguments);
            })
        ;
    });
});
</script>