{{ Form::token() }}
<div class="tab-content">
    <div class="tab-pane fade bubble-content" id="write">
        <div id="content-editor">
            <div class="control-group">
                <label class="control-label" for="title">
                    {{ __($module.'field.title.label') }}
                </label>
                <div class="controls">
                    <input type="text" id="title" name="title" placeholder="{{ __($module.'field.title.placeholder') }}" class="input-block-level">
                    <!--
                    <span class="help-block">
                        {{ __($module.'field.title.help') }}
                    </span> -->
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="content">
                    {{ __($module.'field.content.label') }}
                </label>
                <div class="controls">
                    <textarea class="redactor" id="content" name="content" placeholder="{{ __($module.'field.content.placeholder') }}" style="height: 200px;"></textarea>
                </div>
            </div>


        </div>
    </div>
    <div class="tab-pane fade bubble-content" id="preview">
        <div class="content-preview">

        </div>
    </div>
    <div class="tab-pane fade in active bubble-content" id="settings">
        <div class="row-fluid">
            <div class="span5">
                <h4 class="title">Publish</h4>

                <!--
                <div class="control-group">
                    <label class="control-label" for="slug">
                        {{ __($module.'field.slug.label') }}
                    </label>
                    <div class="controls">
                        <input type="text" id="slug" name="slug" placeholder="{{ __($module.'field.slug.placeholder') }}">
                        <span class="help-block">
                            {{ __($module.'field.slug.help') }}
                        </span>
                    </div>
                </div> -->

                <div class="control-group">
                    <label class="control-label" for="status">
                        {{ __($module.'field.status.label') }}
                    </label>
                    <div class="controls">
                        {{ Form::select('status', Lang::line($module.'field.status.placeholder')->get() ) }}
                        <span class="help-block">
                            {{ __($module.'field.status.help') }}
                        </span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="comment">
                        {{ __($module.'field.comment.label') }}
                    </label>
                    <div class="controls">
                        {{ Form::select('comment', Lang::line($module.'field.comment.placeholder')->get() ) }}
                        <span class="help-block">
                            {{ __($module.'field.comment.help') }}
                        </span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="created">
                        {{ __($module.'field.created.label') }}
                    </label>
                    <div class="controls">
                        <!--
                        <div id="created-default">
                            <strong>{{ Lang::line($module.'field.created.placeholder')->get() }}</strong>
                            <span>
                                <a href="#" id="update-created">Edit</a>
                            </span>
                        </div>
                        -->
                        <div id="">
                            {{ Form::select('date[month]', __('content::date.month')->get(),date('m'), array('class'=>'span3')) }}
                            {{ Form::text('date[day]',date('d'), array('style'=>'width:20px')) }}
                            {{ Form::text('date[year]',date('Y'), array('style'=>'width:30px')) }}
                            @
                            {{ Form::text('date[hour]',date('h'), array('style'=>'width:20px')) }} :
                            {{ Form::text('date[min]',date('m'), array('style'=>'width:20px')) }}
                        </div>
                        <span class="help-block">
                            {{ __($module.'field.created.help') }}
                        </span>
                    </div>
                </div>

            </div>
            <div class="span4">
                <h4 class="title">{{ __('content::admin.categories.field.name.placeholder') }}</h4>
                <div class="control-group">
                    <div class="controls">
                    @if ($categories)
                        @foreach ($categories as $cat)
                        <label class="checkbox">
                            {{ Form::checkbox('term_id', $cat->id) }}
                            {{ $cat->name }}
                        </label>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>

            <div class="span3">
                <h4 class="title">Feature Image</h4>
            </div>
        </div>

        <div class="form-actions">
            <button type="button" class="btn btn-success">Simpan</button>
        </div>

    </div>
</div>