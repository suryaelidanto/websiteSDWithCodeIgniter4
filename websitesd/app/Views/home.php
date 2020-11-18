<!-- CAROUSEL -->

<center class="parallax">
  <div id="tes-carousel" class="carousel slide" data-ride="carousel" style="width:1024px;">
    <!-- indikator -->
    <ol class="carousel-indicators">
      <li data-target="#tes-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#tes-carousel" data-slide-to="1"></li>
      <li data-target="#tes-carousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-caption">
        <h1> SELAMAT DATANG DI WEBSITE SD AL-IRSYAD 02 CILACAP </h1>
      </div>
      <!-- slide 1 -->
      <div class="item active">
        <img src="https://cdn.hswstatic.com/gif/10-breathtaking-views-1-orig.jpg" alt="Demo 1" style="max-width: 1020px; max-height: 640px;" />
        <!-- caption -->
      </div>

      <!-- slide 2 -->
      <div class="item">
        <img src="https://miro.medium.com/max/10790/1*svDSkSCaSXqBXPnM3cy63A.png" alt="Demo 2" style="max-width: 1020px; max-height: 640px;" />
        <!-- caption -->
      </div>

      <!-- slide 3 -->
      <div class="item">
        <img src="https://i.pinimg.com/originals/e4/81/cb/e481cbc93bb6e063fe3029186383c855.jpg" alt="Demo 3" style="max-width: 1020px; max-height: 640px;" />
        <!-- caption -->
      </div>

    </div>

    <!-- kontrol-->
    <a class="carousel-control left" href="#tes-carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control right" href="#tes-carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</center>

<body>


  <!-- BERITA TERBARU -->
  <div style="background-color: #fff; padding: 50px;">

  </div>

  <!-- Perjudulan -->
  <div style="background-color: #FFD500; width:300px; height: 50px; color: white; margin-left: 50px;">
    <center>
      <h1 style="line-height: 50px;"> Berita Terbaru </h1>
    </center>
  </div>
  <!-- Akhir -->

  <div style="background-color: #FFD500; overflow:hidden; padding-bottom:70px;">

    <div style="padding:80px;">
      <!-- artikel -->
      <?php foreach ($berita as $b) : ?>

        <div class="col-lg-6 row" style="margin-top: 30px;">

          <div class="col-lg-2 text-center" style="background-color: #fff; width: 50px; height: 50px; margin-right:20px;">
            <b> <?= date("d M", $b["tanggal"]); ?> </b>
          </div>


          <div class="col-lg-10 row">

            <div class="col-lg-12 panel panel-default">
              <h3><a href=""> <?= $b["judul"]; ?></a> </h3>
              <div class="panel-body">
                <?= substr($b["isi"], 0, 200); ?>...
              </div>
            </div>

            <div class="col-lg-12 row text-center">
              <div class="col-lg-6" style="background-color: #fff; width: 100px; height: 25px;float:left; display: inline-block;">
                <p style="line-height: 25px;"> <?= $b["label"]; ?></p>
              </div>

              <div class="col-lg-6" style="background-color: #fff; width: 120px; height: 25px;float:right; display: inline-block;">
                <a style="line-height: 25px;" href="#"> Selengkapnya... </a>
              </div>

            </div>



          </div>




        </div>
      <?php endforeach; ?>





      <!-- akhir artikel -->

    </div>

    <!-- Akhir berita terbaru -->



    <!-- Galeri Foto  -->
  </div>

  <div style="background-color: #F4F5F5; padding: 70px 70px 300px 70px;">

    <h1 class="text-center"> Galeri Foto </h1>
    <hr>
    <center style="margin-top: 50px;">

      <div class="container row">
        <div class="col-lg-4">
          <img src="https://cdn.hswstatic.com/gif/10-breathtaking-views-1-orig.jpg" alt="..." class="zoom img-thumbnail img-responsive" style="max-width: 300px; margin-top: 50px;">
        </div>

        <div class="col-lg-4">
          <img src="https://cdn.hswstatic.com/gif/10-breathtaking-views-1-orig.jpg" alt="..." class="zoom img-thumbnail img-responsive" style="max-width: 300px; margin-top: 50px;">
        </div>

        <div class="col-lg-4">
          <img src="https://cdn.hswstatic.com/gif/10-breathtaking-views-1-orig.jpg" alt="..." class="zoom img-thumbnail img-responsive" style="max-width: 300px; margin-top: 50px;">
        </div>

      </div>

    </center>
  </div>

  <!-- Akhir Galeri Foto -->

  <!-- Galeri Video -->


  <div style="background-color: #FFD500; padding: 70px 70px 100px 70px; color: white;">

    <h1 class="text-center"> Galeri Video </h1>
    <hr>
    <center style="margin-top: 75px;">

      <div class="container row">
        <?php for ($i = 0; $i <  count($youtube); $i++) : ?>
          <div class="col-lg-4" style="margin-top:30px;">
            <iframe width="330px" height="230px" src="https://www.youtube.com/embed/<?= $youtube[$i]["id"]["videoId"]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div style="width: 330px; height:30px; background-color:white; color:black;">
              <h4 style="line-height: 30px;"><?= date("D, d m Y", strtotime(substr($youtube[$i]["snippet"]["publishTime"], 0, 10))); ?></h4>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <div style="margin-top: 100px;">
        <a href="https://www.youtube.com/channel/UCeJfiHw5K5kq3zDLJ-NR0jA" target="_blank">
          <button type="button" class="btn btn-primary hvr-grow" style="background-color: #FFD500; width:300px; height:100px; border:black 3px solid;">
            <h3> LIHAT LEBIH BANYAK</h3>
          </button>
        </a>
      </div>
    </center>
  </div>


  <!-- Akhir Galeri Video -->

  <!-- Sambutan Kepala Sekolah -->

  <div style=" background-color: #fff; padding: 70px; margin-top: 100px;" class="animate__animated animate__fadeInLeft test">

    <h1 class="text-center"> Sambutan Kepala Sekolah </h1>
    <hr>
    <center style="margin-top: 50px;">
      <div class="row">
        <div class="col-lg-4">
          <img src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/117084160_2897783696993810_8065972388808510081_n.jpg?_nc_cat=111&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeFwAJZUlnggoi-zgzS6D9Ijv6P7P-CoALa_o_s_4KgAtnCeGgr7ilmKLHvB1abMk6zvEgHtx2pWUB6ofSKctJom&_nc_ohc=03-yenrPMV0AX9qEbYV&_nc_ht=scontent-sin6-1.xx&oh=7365c81400ff7c464d799ebddb682e10&oe=5FD7BC84" alt="">
          <div class="col-lg-12">
            <p style="font-size: 17px; color: #B1B4B6"> Cintara Surya Elidanto, S.Kom </p>
          </div>
        </div>



        <div class="col-lg-8">
          <p style="text-align:justify; font-size: 17px;">

            What is Lorem Ipsum?

            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Why do we use it?

            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            Where does it come from?

            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

          </p>
        </div>

      </div>


    </center>
  </div>



  <!-- Akhir Sambutan Kepala Sekolah -->