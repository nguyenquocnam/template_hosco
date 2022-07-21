jQuery(function($){
    $('body').on('click', '.aw_upload_image_button', function(e){
        e.preventDefault();
  
        var button = $(this);
        aw_uploader = wp.media({
            title: 'Custom image',
            library : {
                uploadedTo : wp.media.view.settings.post.id,
                type : 'image'
            },
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image').val(attachment.url);
        })
        .open();
    });
});
jQuery(function($){
    $('body').on('click', '.aw2_upload_image_button', function(e){
        e.preventDefault();
  
        var button = $(this);
        aw_uploader = wp.media({
            title: 'Custom image',
            library : {
                uploadedTo : wp.media.view.settings.post.id,
                type : 'image'
            },
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw2_custom_image').val(attachment.url);
        })
        .open();
    });
});
jQuery(function($){
    $('body').on('click', '.linkTinhNang', function(e){
        e.preventDefault();
        
        var button = $(this);
        
        $i =$(".linkTinhNang").index($(this));
        console.log($(".linkIMG").get($i));
        aw_uploader = wp.media({
            title: 'Custom image',
            library : {
                uploadedTo : wp.media.view.settings.post.id,
                type : 'image'
            },
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {

            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $(".linkIMG").get($i).value=attachment.url;
        })
        .open();
    });
});