<html>

<head>
    <meta charset="UTF-8">
    <title> <?= $judul; ?> </title>
    <meta name="description" content="Website SD Al-Irsyad 02">

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url("css/mycss.css"); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Buat animationnya -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?= base_url("css/hover-min.css"); ?>" />
    <!-- AOS atau Animate On Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' /> -->
    <!-- MENCOBA MENGGUNAKAN LESS -->
    <link href="<?= base_url("css/css.less"); ?>" rel="stylesheet">

</head>
<nav class="navbar navbar-default navbar-fixed-top sticky-top">
    <div class="container">
        <div class="navbar-center navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <!-- <div class="row">
                            <div class="col-sm-2">
                                <center>
                                    <img src="https://1.bp.blogspot.com/-CyKGWqnWG5M/WwJc-o-FySI/AAAAAAAAAUo/3D_wFHK2RZ0uKImKi-k-_zzRDEaFpJREwCLcBGAs/s1600/LOGO-AL-IRSYAD-AL-ISLAMIYYAH-COLOUR-1024x670.png" alt="Sorry, image cannot displayed" style="max-width: 70px; display:flex; justify-content:center; align-items:center;">
                                </center>
                            </div> -->
            <!-- <div class="col-sm-10"> -->
            <h3 class="brand brand-name text-center">SD AL-IRSYAD 02 CILACAP</h3>
            <!-- </div>
                        </div> -->
            <div class="collapse navbar-collapse mycollapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-center">
                    <li><a href="<?= base_url("");  ?>">HOME</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TENTANG KAMI <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url("visimisi"); ?>">VISI MISI</a></li>
                            <li><a href="<?= base_url("profilkaryawan"); ?>">PROFIL KARYAWAN</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url("berita"); ?>">BERITA</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GALERI <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url("galerifoto"); ?>">GALERI FOTO</a></li>
                            <li><a href="https://www.youtube.com/channel/UCeJfiHw5K5kq3zDLJ-NR0jA">GALERI VIDEO</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url("fasilitas"); ?>">FASILITAS</a></li>
                    <li><a href="#contact">PERPUSTAKAAN</a></li>
                </ul>
            </div>
        </div>
</nav>