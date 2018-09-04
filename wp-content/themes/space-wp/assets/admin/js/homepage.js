jQuery(document).ready(function ($) {
    $(document).on('click', ".loadMediaLibrary", function (e) {
        e.preventDefault();
        var btn = $(this);
        var image = wp.media({
            title: 'Upload Image',
            multiple: false
        }).open()
            .on('select', function (e) {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                btn.parent().find('.previewer>img').attr('src', image_url).show();
                btn.parent().find('input.articleImageUrl').attr('value', image_url);
                btn.addClass('withImage');
            });
    });
    $(document).on('click', "#upload_slide_image", function (e) {
        e.preventDefault();
        var btn = $(this);
        var image = wp.media({
            title: 'Upload Image',
            multiple: true
        }).open()
            .on('select', function (e) {
                var selection = image.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    $("#sliderItems").append("<div class=\"previewer\"><span class=\"close dashicons dashicons-no\"></span>\n" +
                        "                                            <input type=\"hidden\" name=\"bottom_slides[]\" value=\"" + attachment.url +"\"><img src=" +attachment.url+"></div>");
                });

            });
    });
    $(document).on('click', '#sliderItems .previewer > span.close', function(e){
        e.preventDefault();
        $(this).parent().remove();
    })
    $(document).on('click', ".remove_banner_bg_image", function (e) {
        e.preventDefault();
        var btn = $(this);
        btn.parent().find('.previewer>img').attr('src', btn.data('default'));
        btn.parent().find('input.articleImageUrl').attr('value', '');
    });
});
