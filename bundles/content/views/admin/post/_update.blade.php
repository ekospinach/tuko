{{ Form::token() }}
<div class="tab-content">
    <div class="tab-pane fade in active bubble-content" id="write">
        <div id="content-editor">
            <div class="control-group">
                <label class="control-label" for="title">
                    {{ __($module.'field.title.label') }}
                </label>
                <div class="controls">
                    <input type="text" id="title" value="{{ $post->title }}" name="title" placeholder="{{ __($module.'field.title.placeholder') }}" class="input-block-level">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="content">
                    {{ __($module.'field.content.label') }}
                </label>
                <div class="controls">
                    <textarea class="redactor" id="content" name="content" placeholder="{{ __($module.'field.content.placeholder') }}" style="height: 200px;">{{ $post->content }}</textarea>
                </div>
            </div>


        </div>
    </div>
    <div class="tab-pane fade bubble-content" id="preview">
        <div class="content-preview">

        </div>
    </div>
    <div class="tab-pane fade bubble-content" id="settings">
        <div class="row-fluid">
            <div class="span5">
                <h4 class="title">Publish</h4>

                <div class="control-group">
                    <label class="control-label" for="status">
                        {{ __($module.'field.status.label') }}
                    </label>
                    <div class="controls">
                        {{ Form::select('status', Lang::line($module.'field.status.placeholder')->get(), $post->status ) }}
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
                        {{ Form::select('comment', Lang::line($module.'field.comment.placeholder')->get(), $post->comment ) }}
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
                        <div id="">
                            {{ Form::select('month', __('content::date.month')->get(),date('m'), array('class'=>'span3')) }}
                            {{ Form::text('day',date('d'), array('style'=>'width:20px')) }}
                            {{ Form::text('year',date('Y'), array('style'=>'width:30px')) }}
                            @
                            {{ Form::text('hour',date('h'), array('style'=>'width:20px')) }} :
                            {{ Form::text('min',date('i'), array('style'=>'width:20px')) }}
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

        <div class="form-actions" style="padding-left:30px;">
            <button type="button" class="btn btn-success" id="button-post-save">Simpan</button>
        </div>

    </div>
</div>