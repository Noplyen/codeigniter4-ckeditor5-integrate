<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" id="meta-description-value" content="">
    <meta name="keywords" id="meta-tag-value" content="">
    <meta name="author" id="meta-author-value" content="">


    <title>ckeditor</title>

    <style>
        .ck-editor__editable {
            overflow-y: auto;
            height: 400px;
        }
        /*for caption image input ckeditor*/
        .ck .ck-editor__nested-editable {
            border: 1px solid transparent;
            max-height: 70px;
        }
    </style>
</head>
<body>

<div class="my-5" id="container-texteditor" >
    <textarea  id="editor" name="content"></textarea>
</div>

<script src="<?=base_url('ck-editor5/build/ckeditor.js')?>"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            fontFamily: {
                options: [
                    'default',
                    'Ubuntu, Arial, sans-serif'
                ]
            },
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' },
                ]
            },
            ckfinder:{
                uploadUrl:'<?php echo base_url('upload/image')?>'
            },
        } )
        .catch( error => {
            console.error( error );
        } );

</script>
</body>
</html>