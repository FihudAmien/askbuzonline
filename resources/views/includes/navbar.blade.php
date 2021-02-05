<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#homepage"><img src="{{url('frontend/img/LogoAskBuz.svg')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false " aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto navtext">
                <a class="nav-link" href="#homepage">Home </a>
                <a class="nav-link" href="#servicepage">Layanan</a>
                <a class="nav-link" href="#aboutpage">Tentang Kami</a>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Informasi
                    </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#Forumpage">Forum & Diskusi</a>
                            <a class="dropdown-item" href="#Articlepage">Artikel</a>
                        </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kontak
                </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#Bussines-Analysis-Page">Bussines Analysis</a>
                        <a class="dropdown-item" href="#Ui/Ux-Design-Page">Ui/Ux Design</a>
                        <a class="dropdown-item" href="#IT-Development-Page">IT Development</a>
                    </div>
                </li>
                @guest
                
                <a class="btn btn-primary tombol"
                 href="{{url('login')}}">Sign In</a>
                
                @endguest
                
            
            </div>
            @auth
                <form action="{{url('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-outline-primary  tombol " type="submit">
                        
                        Logout
                    </button>
                </form>
                @endauth
        </div>
    </div>
</nav>