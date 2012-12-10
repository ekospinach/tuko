{{ Form::open() }}
    {{ Form::token() }}
    <div class="control-group">
        <label class="control-label" for="name">
            {{ __($module.'field.name.label') }}
        </label>
        <div class="controls">
            <input type="text" id="name" name="name" value="{{ $category->name }}" class="input-block-level" placeholder="{{ __($module.'field.name.placeholder') }}">
            <span class="help-block">
                {{ __($module.'field.name.help') }}
            </span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="slug">
            {{ __($module.'field.slug.label') }}
        </label>
        <div class="controls">
            <input type="text" id="slug" name="slug" value="{{ $category->slug }}" class="input-block-level" placeholder="{{ __($module.'field.slug.placeholder') }}">
            <span class="help-block">
                {{ __($module.'field.slug.help') }}
            </span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="parent">
            {{ __($module.'field.parent.label') }}
        </label>
        <div class="controls">
            {{ Form::select('parent', Term::opsCategory(), $category->slug, array('id'=>'parent')) }}
            <span class="help-block">
                {{ __($module.'field.parent.help') }}
            </span>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="description">
            {{ __($module.'field.description.label') }}
        </label>
        <div class="controls">
            <textarea id="description" name="description" placeholder="{{ __($module.'field.description.placeholder') }}" rows="6" class="span5">
                {{ $category->description }}
            </textarea>
            <span class="help-block">
                {{ __($module.'field.description.help') }}
            </span>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">{{ __($module.'btn.update') }}</button>

{{ Form::close() }}