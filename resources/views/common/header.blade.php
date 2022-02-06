@section('header')
<header>
<div class="header-contents mb-3">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="text-center"><a href="/">Funtech</a></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-9"></div>
        <div class="col-3">
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                <div class="d-flex">
                    <a class="dropdown-item" href="/goods">
                        {{ __('Goods List Page') }}
                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endguest
            </ul>
        </div>
    </div>
</div>
</header>
@endsection('header')