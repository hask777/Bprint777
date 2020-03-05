jQuery(document).ready(function($){

    var mediaUploader;

    $('#upload-button').on('click', function(e){
        e.preventDefault();
        if(mediaUploader){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Upload Profile picture',
            button: {
                text: 'Choose picture'
            },
            multiple: false
        });

        mediaUploader.on('select', function(){
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#profile-picture').val(attachment.url);
            $('#profile-picture-preview').css('background-image', 'url(' + attachment.url + ')');
        });

        mediaUploader.open();

    });

    $('#remove-button').on('click', function(e){
        e.preventDefault();
        var answer = confirm('Are you sure you want remove your Profile Picture ?');
        if(answer == true){
            $('#profile-picture').val('');
            $('.bprint_general_form').submit();
        }
        return;
    });
});
