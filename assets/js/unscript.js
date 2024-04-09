jQuery(function($){
$('body').on('click', '.upload_image_button_unete1', function(e){
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
        $('#custom_image_unete1').val(attachment.url);
        $("#custom_image1_unete1").attr("src",attachment.url);

    })
    .open();
});

$('body').on('click', '.upload_image_button_unete2', function(e1){
    e1.preventDefault();

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
        $('#custom_image_unete2').val(attachment.url);
        $("#custom_image1_unete2").attr("src",attachment.url);

    })
    .open();
});

$('body').on('click', '.upload_image_button_unete3', function(e1){
    e1.preventDefault();

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
        $('#custom_image_unete3').val(attachment.url);
        $("#custom_image1_unete3").attr("src",attachment.url);

    })
    .open();
});

$('body').on('click', '.upload_image_button_unete4', function(e1){
    e1.preventDefault();

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
        $('#custom_image_unete4').val(attachment.url);
        $("#custom_image1_unete4").attr("src",attachment.url);

    })
    .open();
});

$('body').on('click', '.upload_image_button_unete5', function(e1){
    e1.preventDefault();

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
        $('#custom_image_unete5').val(attachment.url);
        $("#custom_image1_unete5").attr("src",attachment.url);

    })
    .open();
});

});