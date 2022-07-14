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
        <nav class="navbar navbar-expand-lg fixed-bottom navbar-light" id="bot-menu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#home"> <span class="material-symbols-outlined">home</span>
                        <div class="dtext">Home</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#story"><span class="material-symbols-outlined">favorite</span>
                        <div class="dtext">Story</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery"><span class="material-symbols-outlined">perm_media</span>
                        <div class="dtext">Gallery</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#guestBook"><span class="material-symbols-outlined">menu_book</span>
                        <div class="dtext">Guest Book</div>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="section-story">
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
                    <h1>ARI YUSTIA</h1>
                    <h2>SAPUTRA</h2>
                    <h4>And</h4>
                    <h1>FEBYOLA</h1>
                    <h2>AGATHA</h2>
                    <h4>26 AUG 2022 | ON EARTH NOT MARS</h4>
                </div>


            </div>
        </section>
        <section class="section-story-2">
            <div class="container">
                <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau
                    typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang
                    cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku
                    contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf
                    elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya
                    lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya
                    perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.Sudah
                    merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia
                    melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki
                    penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti "Bagian isi disini, bagian isi
                    disini", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing
                    dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian
                    terhadap kalimat "Lorem Ipsum" akan berujung pada banyak situs web yang masih dalam tahap
                    pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja,
                    kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</p>
            </div>
        </section>
    </main>

    <footer>

    </footer>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>

    <script>
        let love = document.getElementById('love');
        window.addEventListener('scroll', function () {
            let value = window.scrollY;
            console.log(value);
            love.style.top = value * 1.05 + 'px';
        })
    </script>
</body>

</html>
