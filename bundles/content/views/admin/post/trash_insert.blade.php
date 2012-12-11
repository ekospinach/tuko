<div id="content-editor" class="span7">
    {{ Form::open() }}
        <input type="text" name="title" placeholder="Enter title Hire" class="input-block-level">
        <textarea id="content" name="content" style="height: 300px;"></textarea>
    {{ Form::close() }}
</div>

<div id="content-actions" class="span3">
    <div class="postbox">
        <h3 class="handle">
            <span>Publish</span>
        </h3>
        <div class="inside">
            <div class="minor-publish">
                &nbsp; Lorep ipsum
            </div>

            <div class="major-publish">
                <div class="pull-right">
                    <button class="btn btn-primary">Publish</button>
                </div>
                {{ HTML::link('','Move to trash') }}
                <div class="clearfix"></div>
            </div>

        </div>
    </div>

    <div class="postbox">
        <h3 class="handle">
            <span>Kategori</span>
        </h3>
        <div class="inside">
            <div class="minor-publish">
                &nbsp; Lorep ipsum
            </div>

            <div class="major-publish">
                <div class="pull-right">
                    <button class="btn btn-primary">Publish</button>
                </div>
                {{ HTML::link('','Move to trash') }}
                <div class="clearfix"></div>
            </div>

        </div>
    </div>

    <div class="postbox">
        <h3 class="handle">
            <span>Tag</span>
        </h3>
        <div class="inside">
            <div class="minor-publish">
                &nbsp; Lorep ipsum
            </div>

            <div class="major-publish">
                <div class="pull-right">
                    <button class="btn btn-primary">Publish</button>
                </div>
                {{ HTML::link('','Move to trash') }}
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>

@section('js')
    @parent
    {{ HTML::script('js/redactor/redactor.min.js') }}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#content').redactor({ autoresize: true });

            var btn             = $('#btn-content'),
                contentEditor   = $('#content-editor'),
                contentAction   = $('#content-actions');

            btn.click(function(){
                if (contentAction.hasClass('hide')) {
                    contentEditor.removeClass().addClass('span7');
                    contentAction.removeClass('hide');
                } else {
                    contentEditor.removeClass().addClass('span10');
                    contentAction.addClass('hide');
                }

                return false;
            });
        });
    </script>
@endsection