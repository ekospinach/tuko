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

        $fub = $('.manual-file-chooser-text');
        $messages = $('#messages');

        var uploader = new qq.FineUploaderBasic({
            button: $fub[0],
            request: {
                endpoint: '/admin/post/media',
                forceMultipart: true,
                params: {
                    crsf_token: "{{ Session::token() }}"
                },
                inputName: 'qqfile',
                multiple: false,
            },
            callbacks: {
                onSubmit: function(id, fileName) {
                    // $messages.append('<div id="file-' + id + '" class="alert" style="margin: 20px 0 0"></div>');
                },
                onUpload: function(id, fileName) {
                    $('span.default').addClass('hide');
                    $('span.loading').removeClass('hide');
                    // $('#file-' + id).addClass('alert-info').html('<img src="client/loading.gif" alt="Initializing. Please hold."> ' + 'Initializing ' + '“' + fileName + '”');
                },
                /*
                onProgress: function(id, fileName, loaded, total) {
                    if (loaded < total) {
                        progress = Math.round(loaded / total * 100) + '% of ' + Math.round(total / 1024) + ' kB';
                        $('#file-' + id).removeClass('alert-info').html('<img src="client/loading.gif" alt="In progress. Please hold."> ' + 'Uploading ' + '“' + fileName + '” ' + progress);
                    } else {
                        $('#file-' + id).addClass('alert-info').html('<img src="client/loading.gif" alt="Saving. Please hold."> ' + 'Saving ' + '“' + fileName + '”');
                    }
                },*/
                onComplete: function(id, fileName, response) {
                    if (response.code) {
                        // $('#content').atCaret('getCaretPosition');
                        var file = "![Alt text]("+response.data.file+")";
                        insertAtCaret('content', file);
                        $('span.loading').addClass('hide');
                        $('span.default').removeClass('hide');
                        // alert(response.data.file);
                    } else {
                        $('span.loading').addClass('hide');
                    }
                }
            },
            debug: true
        });

        function insertAtCaret(areaId,text) { var txtarea = document.getElementById(areaId); var scrollPos = txtarea.scrollTop; var strPos = 0; var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ? "ff" : (document.selection ? "ie" : false ) ); if (br == "ie") { txtarea.focus(); var range = document.selection.createRange(); range.moveStart ('character', -txtarea.value.length); strPos = range.text.length; } else if (br == "ff") strPos = txtarea.selectionStart; var front = (txtarea.value).substring(0,strPos); var back = (txtarea.value).substring(strPos,txtarea.value.length); txtarea.value=front+text+back; strPos = strPos + text.length; if (br == "ie") { txtarea.focus(); var range = document.selection.createRange(); range.moveStart ('character', -txtarea.value.length); range.moveStart ('character', strPos); range.moveEnd ('character', 0); range.select(); } else if (br == "ff") { txtarea.selectionStart = strPos; txtarea.selectionEnd = strPos; txtarea.focus(); } txtarea.scrollTop = scrollPos; }
    });
</script>