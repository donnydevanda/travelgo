<nav class="container navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">Travelgo</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item mx-md-2"><a href="#" class="nav-link active">Home</a></li>
            <li class="nav-item mx-md-2"><a href="#" class="nav-link">Package</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Flight</a></li>
                    <li><a class="dropdown-item" href="#">Hotel</a></li>
                    <li><a class="dropdown-item" href="#">Tour</a></li>
                </ul>
            </li>
            <li class="nav-item mx-md-2"><a href="#" class="nav-link">Testimonial</a></li>
            @auth
            <li class="nav-item mx-md-2"><a href="{{ route('profile.show') }}" class="nav-link">Account</a></li>  
            <form class="" action="{{url('logout')}}" method="POST">
                @csrf
                <button class="btn btn-login px-5 py-2" type="submit">Logout</button>
            </form>
            @endauth
            @guest
                <button class="btn btn-login px-5 py-2" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">Login</button>
            @endguest     
        </ul>    
    </div>
</nav>