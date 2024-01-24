    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ url('style.css') }}">
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('fontawesome-free-5.15.4-web/css/all.css') }}">
        <title>Document</title>
    </head>
    <body>
      <div class="container-fluid"  style="padding-left: 0px;">
          <div class="barre_gauche ">
            <ul class="menu">
              <li> <img src="{{ url('img/h.jpg') }}" alt="" class="rounded-circle" height="75px" width="75px" > <h2 style="color:grey;">Hi,Jenna</h2> <p style="font-weight: lighter;">Searching  <i class="fas fa-play-circle"></i></p></li>
              <li><i class="fas fa-home" style="margin-top: 20px;"><a href="{{ url ('index.php') }}"> Acceuil</a></i></li> 
              <li><i class="fas fa-film"><a href=""> Movie</a></i></li>
              <li><i class="fas fa-tv"><a href=""> Show</a></i></li>
              <li><i class="fas fa-star"><a href=""> Rated</a></i></li>
              <li><i class="fas fa-compact-disc"><a href=""> Genre</a></i></li>
              <li><i class="fas fa-play-circle" style="margin-bottom: 25px;"><a href=""> Playlist</a></i></li>
              <li><i class="fas fa-thumbs-up"><a href=""> Like</a></i></li>
              <li><i class="fas fa-heart"><a href=""> Favorite</a></i></li>
              <li><i class="fas fa-tv" style="margin-bottom: 25px;"><a href=""> For you</a></i></li>
              <li><i class="fas fa-cogs"><a href=""> Setting</a></i></li>
              <li><i class="fas fa-user-circle"><a href="{{ route('login') }}"> Membership</a></i></li>
              <li><i class="fas fa-sign-out-alt" style="margin-bottom: 40px;"><a href="{{ route('register') }}"> Sign Out</a></i></li>
            </ul>
          </div>
     <div class="stream">
            <h1 style="border-right: 2px solid white ">Searching</h1>
            <p>Where is margot ?</p>
            <button class="btn btn-outline-dark" style="color: white;">Stream <i class="fas fa-play"></i></button>
          </div>

          <div class="top_barre row"><p class="offset-md-1  col-md-6"  style="margin-top:20px; font-weight:bold; color: gray;">Featured</p> <div class="icone col-md-3" style="  padding-left: 75px;  "> <i class="fas fa-search"></i>  <i class="fas fa-bookmark"></i>  <i class="fas fa-bell"></i></div>
          
          <div class="bloc_carousel row col-md-11 " style="margin-left: 50px;">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ url('img/a.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ url('img/b.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ url('img/c.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>

        <div class="barre_affiche row"><p class="col-md-6"  style=" font-weight:bold; color: gray;  margin-left: 130px;  ">Just Added</p> <div class="arrow col-md-3 "> <i class="fas fa-chevron-left " style="margin-right:20px; font-weight:bold;"></i>        <i class="fas fa-chevron-right" style="margin-left:20px; font-weight:bold;"></i> </div></div> 

  <div class="group_affiche"> 
    <div class="affiche  ">
      <img src="{{ url('img/d.jpg') }}" class="rounded" alt="" height="175px" width="180px">
      <h5 class="text-left">Titre</h5>
      <h6 class="text-left" style="color: gray;">Genre</h6>
    </div>

      <div class="affiche  ">
        <img src="{{ url('img/b.jpg') }}" class="rounded" alt="" height="175px" width="180px">
        <h5 class="text-left">Titre</h5>
        <h6 class="text-left " style="color: gray;">Genre</h6>
      </div>

      <div class="affiche    ">
        <img src="{{ url('img/e.jpeg') }}" class="rounded" alt="" height="175px" width="180px">
        <h5 class="text-left">Titre</h5>
        <h6 class="text-left" style="color: gray;">Genre</h6>
      </div>

      <div class="affiche  ">
        <img src="{{ url('img/f.jpeg') }}" class="rounded" alt="" height="175px" width="180px">
        <h5 class="text-left">Titre</h5>
        <h6 class="text-left" style="color: gray;">Genre</h6>
      </div>

      <div class="affiche   ">
        <img src="{{ url('img/g.jpg') }}"  class="rounded" alt="" height="175px" width="180px">
        <h5 class="text-left">Titre</h5>
        <h6 class="text-left" style="color: gray;">Genre</h6>
      </div>
    </div>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
    </body>
    </html>