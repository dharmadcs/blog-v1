<header class="header text-center">
    <h1 class="blog-name pt-lg-4 mb-0"><a href="{{ url('/') }}">DCS_Blog</a></h1>

    <nav class="navbar navbar-expand-lg navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column">
            <div class="profile-section pt-3 pt-lg-0">
                <img class="profile-image mb-3 rounded-circle mx-auto" src="http://blog-v1.epizy.com/uploads/img/blog.png" alt="image" height="160px" width="160px">

                {{-- <!--//bio-->
                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="{{ $user->profile->twitter }}"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="{{ $user->profile->linkedin }}"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="{{ $user->profile->facebook }}"><i class="fab fa-facebook fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="{{ $user->profile->stackoverflow }}"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="{{ $user->profile->youtube }}"><i class="fab fa-youtube fa-fw"></i></a></li>
                </ul> --}}
                <!--//social-list-->
                <hr>
            </div>
            <!--//profile-section-->

            <ul class="navbar-nav flex-column text-left">
                <li class="nav-item {{ Request::is ('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home fa-fw mr-2"></i>Home</a>
                </li>
                <li class="nav-item {{ Request::is ('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-user fa-fw mr-2"></i>About</a>
                </li>
            </ul>

            <div class="my-2 my-md-3">
                <a class="btn btn-primary" href="/login" target="_blank">Login</a>
            </div>
        </div>
    </nav>
</header>