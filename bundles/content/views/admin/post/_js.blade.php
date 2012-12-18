<script type="text/javascript">
    $(document).ready(function() {

        $(".tabby").tabby({tabString:'    '}).autosize({append: "\n"});

        // preview post
        $('#tab-preview').on('click', function(){
            contentTitle = $('#title').val();
            contentBody  = $('#content').val();

            if (contentTitle == '' || contentBody == '') {
                alert ('Please add your title or body');
                return false;
            } else {
                $.ajax({
                    type: 'POST',
                    url: '/admin/post/preview',
                    data: { content: contentBody, crsf_token: "{{ Session::token() }}"},
                    dataType: 'json',
                    success: function(response){
                        if (response.code == '200') {
                            $('.content-preview').html('<div class="post-title">'+contentTitle+'</div>' + '<div class="post-body">' + response.data.html + '</div>');
                            window.prettyPrint && prettyPrint();
                        } else {

                        }
                    }

                });


            }
        });
        // save post
        $('#button-post-save').click(function(){
            var form        = $('#form-post'),
                error       = $('#error-post')
                btnClose   = '<button type="button" class="close" data-dismiss="alert">&times;</button>';

            form.ajaxSubmit({
                dataType: 'json',
                success: function(response) {
                    if (response.code == '500') {

                        error.removeClass().removeAttr('style').addClass('alert alert-error').html(btnClose + response.data.html);

                        window.setTimeout(function(){
                            error.fadeOut(200);
                        }, 5000);

                    } else {

                        error.removeClass().removeAttr('style').addClass('alert alert-success').html(btnClose + response.data.html);

                        window.setTimeout(function(){
                            window.location.href = '/admin/content';
                        }, 1000);

                    }
                }
            });
        });
    });
</script>