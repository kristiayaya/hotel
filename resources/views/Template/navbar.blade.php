<nav style="margin-left : 0px; background-color:#262424; " class="main-header navbar navbar-expand navbar-white navbar-light ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
     
        @if(Auth::user()->roles[0]['name'] == 'admin')
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('beranda') }}" class="nav-link text-white ">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('kamar.index') }}" class="nav-link text-white">Kamar</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('fashotel.index')}}" class="nav-link text-white">Fasilitas Hotel</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('faskamar.index') }}" class="nav-link text-white">Fasilitas Kamar</a>
        </li>
        @endif
        @if(Auth::user()->roles[0]['name'] == 'resepsionis')
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('beranda')}}" class="nav-link text-white" >Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('reservasi.index') }}" class="nav-link text-white">Reservasi</a>
        </li>
        @endif
        <li class="nav-item d-none d-sm-inline-block"></li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">



        


        
    </ul>
</nav>
