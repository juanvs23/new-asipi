jQuery(function($){
    $('body').on('click', '.upload_image_button_academico', function(e){
        e.preventDefault();
  
        var button = $(this),
        aw_uploader = wp.media({
            title: 'Custom image',
            library: {
                uploadedTo: wp.media.view.settings.post.id,
                type: 'image'
            },
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#custom_image_academico').val(attachment.url);
            $("#custom_image1_academico").attr("src",attachment.url);

        })
        .open();
    });
});