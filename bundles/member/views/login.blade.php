@layout('themes::admin.main')

@section('title')
{{ $title }}
@endsection

@section('content')
<div class="form-signin">
    <h2 class="form-signin-heading">Tuko CMS</h2>
    @if (Session::get('error'))
        <div class="alert">{{ Session::get('error') }}</div>
    @endif
    {{ Form::open('/session') }}
        {{ Form::token() }}
        <input type="text" class="input-block-level" name="email" placeholder="Email address">
        <input type="password" class="input-block-level" name="password" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-primary" type="submit">Sign in</button>
    </form>
</div>
@endsection