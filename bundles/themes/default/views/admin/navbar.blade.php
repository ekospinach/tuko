 <!-- Navbar
================================================== -->
 @if ( ! Auth::guest() )
<div class="navbar">
    <div class="navbar-static-top navbar-inner-bap">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            {{ HTML::link('welcome','TUKO CMS', array('class'=>"brand")) }}

            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li class="name">{{ HTML::link('profile/'.Auth::user()->username, Gravitas\API::image(Auth::user()->email, 20). 'Purwandi') }}</li>
                    <li class="">
                        <a href="/setting" data-placement="bottom" rel="tooltip" data-original-title="Setting">
                            <i aria-hidden="true" class="icon-cog"></i>
                        </a>
                    </li>
                    <li class="">
                        <a href="/notifications" data-placement="bottom" rel="tooltip" data-original-title="Notifikasi">
                            <i aria-hidden="true" class="icon-broadcast"></i>
                        </a>
                    </li>
                    <li class="">
                        <a href="/logout" data-placement="bottom" rel="tooltip" data-original-title="Keluar">
                            <i aria-hidden="true" class="icon-exit"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

@endif

@if (Auth::guest())

@else

@endif