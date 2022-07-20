<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Awal</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great Vibes&family=Merriweather&family=Questrial&family=Raleway&family=Playfair+Display&family=Archivo:wght@100" rel="stylesheet">
</head>

<body>
    <header>
        <div class="floating_button">
            <img src="https://smallimg.pngkey.com/png/small/124-1243758_gift-box-with-lace-free-vectors-logos.png" alt="">
            <button class="btn">Kirim Hadiah</button>
        </div>
        <div id="navbar_master">
            <nav class="navbar navbar-expand-lg fixed-bottom navbar-light" id="bot-menu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home"> <span class="material-symbols-outlined">home</span>
                            <div class="dtext">Home</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#story"><span class="material-symbols-outlined">favorite</span>
                            <div class="dtext">Our Story</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery"><span class="material-symbols-outlined">perm_media</span>
                            <div class="dtext">Gallery</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#guestbook"><span class="material-symbols-outlined">menu_book</span>
                            <div class="dtext">Guest Book</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="section-home" id="home">
            <div class="container">
                <img style="position: absolute; width:20%; left:10px; bottom:10px; transform:scaleX(-1);" src="{{asset('icons/golden_flower2.png')}}" alt="">
                <img style="position: absolute; width:20%; right:10px; bottom:10px;" src="{{asset('icons/golden_flower2.png')}}" alt="">
                <img style="position: absolute; width:20%; left:10px; top:10px; transform: scaleY(-1) scaleX(-1);" src="{{asset('icons/golden_flower2.png')}}" alt="">
                <img style="position: absolute; width:20%; right:10px; top:10px; transform: scaleY(-1);" src="{{asset('icons/golden_flower2.png')}}" alt="">
                <div style="text-align: center">
                    <img class="imgLove" src="{{asset('icons/golden_love_flower.png')}}" alt="">
                    {{-- <img id="love" class="imgLove" src="{{asset('icons/golden_love_flower.png')}}" alt=""> --}}
                    {{-- <img id="love" class="imgLove" src="https://datengdong.cothemes/dancingpiano/images/flower.png" alt=""> --}}
                </div>
                <div class="word mt-2">
                    <h3>The Wedding Of</h3>
                    <h1>Ari Yustia</h1>
                    <h2>SAPUTRA</h2>
                    <h4>And</h4>
                    <h1>FEBYOLA</h1>
                    <h2>AGATHA</h2>
                    <h4>26 AUG 2022 | ON EARTH NOT MARS</h4>
                </div>
            </div>
        </section>
        <section class="section-story" id="story">
            <div class="container">
                <div class="story-header">
                    <img src="{{asset('icons/black_flower.png')}}" alt="">
                    <h1>Our Story</h1>
                </div>
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Pertemuan</h5>
                      <h6 class="card-subtitle mb-2">2011</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Pertemanan</h5>
                      <h6 class="card-subtitle mb-2">2012</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Persahabatan</h5>
                      <h6 class="card-subtitle mb-2">2014</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Percintaan</h5>
                      <h6 class="card-subtitle mb-2">2022</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Pernikahan</h5>
                      <h6 class="card-subtitle mb-2">2022</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Permulaan Perjalanan Bersama</h5>
                      <h6 class="card-subtitle mb-2">2022</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gallery" id="gallery">
            <div class="container">
                <div class="gallery-header">
                    <img src="{{asset('icons/golden_flower3.png')}}" alt="">
                    <h1>Gallery</h1>
                </div>
                <div class="row">
                  <div class="col">
                    <img src="{{asset('img/us.png')}}" alt="">
                  </div>
                  <div class="col">
                    <img src="{{asset('img/us.png')}}" alt="">
                  </div>
                  <div class="col">
                    <img src="{{asset('img/us.png')}}" alt="">
                  </div>
                </div>
              </div>
        </section>
        <section class="section-guestbook" id="guestbook">
            <div class="container">
                <div class="guestbook_header">
                    <h1>Guest Book</h1>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Name</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                        <h5 class="card-title">Message</h5>
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ujang</h5>
                        <p class="card-text">Selamattt .....</p>
                        <p href="#" class="card-link">20-08-2020</p>
                        <hr style="color: white">

                        <h5 class="card-title">Ujang</h5>
                        <p class="card-text">Selamattt .....</p>
                        <p href="#" class="card-link">20-08-2020</p>
                        <hr style="color: white">

                        <h5 class="card-title">Ujang</h5>
                        <p class="card-text">Selamattt .....</p>
                        <p href="#" class="card-link">20-08-2020</p>
                        <hr style="color: white">
                    </div>
                  </div>
            </div>
        </section>
    </main>

    <footer>

    </footer>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>

    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("navbar_master");
        var btns = header.getElementsByClassName("nav-link");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }
        </script>
</body>

</html>
