<!-- Lightslider -->
<script src="/Public/InsideAdmin/inside_admin_template/js/lightslider/js/lightslider.js"></script>
<!-- Lightgallery -->
<script src="/Public/InsideAdmin/inside_admin_template/js/lightGallery/dist/js/lightgallery.min.js"></script>
<script src="/Public/InsideAdmin/inside_admin_template/js/lightGallery/dist/js/lg-video.min.js"></script>

<script>
    $('#comment_post').on('click', function(){


        if ($('#comment').val() == '') {
            $('#comment').addClass('red_border');
            $('.comment_msg').removeClass('green');
            $('.comment_msg').addClass('red');
            $('.comment_msg').html('Комментарий не может быть пустым!');
            setTimeout(function() {
                $('.comment_msg').html('');
            }, 5000);
        }
        else {
            var options = {
                url: "/content/info/ajax_add_comment/",
                success: function(data) {
                    var obj = jQuery.parseJSON(data);
                    if (obj.status == "success") {

                        $('.comment_msg').removeClass('red');
                        $('.comment_msg').addClass('green');
                        $('.comment_msg').html(obj.message);
                        //$('#comment_post').hide();
                    } else {
                        $('.comment_msg').removeClass('green');
                        $('.comment_msg').addClass('red');
                        $('.comment_msg').html(obj.message);

                    }

                    setTimeout(function() {
                        $('.comment_msg').html('');
                    }, 5000);
                }
            };
            $("#comment_form").ajaxSubmit(options);
        }
    });

    $(document).ready(function() {
        $("#lightSlider").lightSlider({
            adaptiveHeight:true,
            enableDrag: false,
            pager: false,
            prevHtml: '<i aria-hidden="true" style="font-size: 40px; color: black;" class="ion-android-arrow-back"></i>',
            nextHtml: '<i aria-hidden="true" style="font-size: 40px; color: black;" class="ion-android-arrow-forward"></i>'
        });

        $('#lightSlider').lightGallery({
            thumbnail:true,
            animateThumb: false,
            showThumbByDefault: false
        });
    });
</script>