$(document).ready(function() {
    $('#body').summernote({
        height: 300,
        fontSizes: ['16', '20'],
        disableDragAndDrop: true,
        toolbar: [
            ['misc', ['undo', 'redo']],
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'hr']],
            ['codeview']
        ]
    });
});