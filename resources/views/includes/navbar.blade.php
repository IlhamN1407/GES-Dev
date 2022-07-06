<nav class="navbar-one text-center">
    <div class="container">
        <div class="left">
            <div class="Plaintext">
                Welcome To Garuda Elang Sakti
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ url('Frontend/images/image (1).png') }}" alt="Logo GES">
        </a>
        <button class="navbar-toggler navbar-right" type="button" data-toggle="collapse" data-target=#navb>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2 {{ Route::currentRouteNamed('home') ? 'active' : '' }}"><a
                        href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item mx-md-2 {{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a
                        href="{{ route('about') }}" class="nav-link">About</a></li>
            </ul>
            <!-- Mobile Button -->
            <form action="https://wa.me/6285280428152?text=Saya%20sudah%20mengirim%20form"
                class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-2 px-4">
                    Chat/Call us
                </button>
            </form>
            <!-- web Button -->
            <form action="https://wa.me/6285280428152?text=Saya%20sudah%20mengirim%20form"
                class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-2 px-4">
                    Chat/Call us
                </button>
            </form>
        </div>
    </div>
</nav>
<!-- END OF NAVBAR -->
