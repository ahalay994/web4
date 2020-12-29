<div class="form-group @if ($required)required @endif {{ $errors->has($field) ? ' has-error' : '' }}">
	{{ Form::label($field, $label.':',  ['class' => 'control-label']) }}
	<textarea rows="10" class="form-control" name="{{$field}}" id="{{$field}}">{{ value_or_old($entity, $field) }}</textarea>
    <small class="text-danger">{{ $errors->first($field) }}</small>
</div>

@push('foot.scripts')
    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
            max-height: 400px;
        }
    </style>
<script>
$(function() {
    ClassicEditor
        .create(document.querySelector('#{{$field}}'), {
            toolbar: ["Source", "Sourcedialog", "selectAll", "Undo", "redo", "bold", "italic", "blockQuote", "ckfinder", "imageTextAlternative", "imageUpload", "heading", "imageStyle:full", "imageStyle:side", "indent", "outdent", "link", "numberedList", "bulletedList", "mediaEmbed", "insertTable", "tableColumn", "tableRow", "mergeTableCells"],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
            ckfinder: {
                uploadUrl: '/public/upload/ckeditor/',
                options: {
                    resourceType: 'Images'
                },
                // openerMethod: 'popup'
            }
        })
        .then( editor => {
            // console.log( Array.from( editor.ui.componentFactory.names() ) );
        } )
        .catch( error => {
            console.error( error );
        } );
});
</script>
@endpush
