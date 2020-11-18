<!-- BAGIAN HEAD -->
<div class="parallax" style="background-image:url('<?= base_url("assets/headerwebsd3.png") ?>'); width:100%; height: 400px;">
    <center>
        <div style="display: table; height: 400px; overflow: hidden;">
            <div style="display: table-cell; vertical-align: middle;">
                <div>
                    <center>
                        <h1 style="color:white;    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  "> GALERI FOTO </h1>
                        <hr>
                        <h3 style="color:white;    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  ">DOKUMENTASI BEBERAPA AKTIVITAS SD AL-IRSYAD 02</h3>
                    </center>
                </div>
            </div>
        </div>
    </center>
</div>

<div style="background-color:white; width: auto; padding:100px;" class="row">
    <center>
        <div class="row">
            <!-- PER ARTIKEL -->
            <?php foreach ($galerifoto as $gf) : ?>
                <div class="col-lg-3" style="margin-top:50px;">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="img-responsive img-thumbnail" src="<?= $gf["gambar"]; ?>" alt="Dokumentasi Gambar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h1><?= $gf["nama_acara"]; ?></h1>
                                <p><?= date("d M Y", $gf["tanggal_acara"]); ?></p>
                                <p><?= $gf["deskripsi_acara"]; ?></p>
                                <p style="position:absolute; left:10;bottom:0"> Tanggal upload : <?= date("d M Y", $gf["tanggal_upload"]); ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- AKHIR PER ARTIKEL -->
        </div>
    </center>

</div>

<!-- AKHIR BAGIAN HEAD -->