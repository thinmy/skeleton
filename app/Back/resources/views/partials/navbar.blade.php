<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ route('dashboard') }}">{{ config('app.name') }}</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('dashboard') }}">{{ trans('base.dashboard') }}</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">{{ trans('base.system') }} <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="{{ route('back.system.users.index') }}">{{ trans('base.users') }}</a></li>
                        <li><a href="{{ route('dashboard.panel') }}">Panel with tabs</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">{{ trans('actions.go-to') }} site</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{ Auth::user()->gravatar(40) }}" alt="avatar" class="img-circle profile-image"> {{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('back.profile.index') }}">{{ trans('dictionary.profile') }}</a></li>
                        <li class="divider"></li>
                        <li><a href="/auth/logout">{{ trans('dictionary.logout') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>