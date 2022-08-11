
<!-- Google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=<?=$GLOBALS['config']['Website']['google_maps_key']?>" async defer></script>

<script>
    $(function(){

        $('.send_contacts_form').on('click', function(){
            $.post('/crm/api/add_contacts_request', {

                name_contacts : $('.contacts_form .name').val()+' ; '+$('.contacts_form .email').val()+' ; '+$('.contacts_form .phone').val(),
                message : $('.contacts_form .message').val(),
                url : '' // In this version Forms do not have URL field

            }, function(obj){

                if (obj.status == 'success') {

                    alert('<?=$t->get('message_saved');?>');
                }

            });

        });
    });
</script>