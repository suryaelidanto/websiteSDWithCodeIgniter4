<!-- BAGIAN HEAD -->
<div class="parallax" style="background-image:url('<?= base_url("assets/headerwebsd3.png") ?>'); width: auto; height: 400px;">
    <center>
        <div style="display: table; height: 400px; overflow: hidden;">
            <div style="display: table-cell; vertical-align: middle;">
                <div>
                    <center>
                        <h1 style="color:white;    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  "> BERITA TERBARU </h1>
                        <hr>
                        <h3 style="color:white;    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  ">KUMPULAN BERITA, INFO, DAN AGENDA SD AL-IRSYAD 02 CILACAP </h3>
                    </center>
                </div>
            </div>
        </div>
    </center>
</div>

<div style="background-color:white; width: auto; padding:100px;" class="row">
    <div class="col-lg-8 row" style="margin-right:100px;">
        <!-- PER ARTIKEL -->
        <?php foreach ($berita as $b) : ?>
            <div class="col-lg-12 row">
                <div class="col-lg-4">
                    <img src="<?= $b["gambar"]; ?>" alt="" style="max-width: 200px; margin-top: 20px;">
                </div>
                <div class="col-lg-8 row">
                    <div class="col-lg-12">
                        <h3> <a href=""><?= $b["judul"]; ?></a></h3>
                    </div>
                    <div class="col-lg-12" style="margin-top:10px;">
                        <div class="col-lg-3" style="background-color: #FFD500;max-width: 110px;">
                            <center><?= $b["label"]; ?></center>
                        </div>
                        <div class="col-lg-3" style="background-color: #DFE1E1;max-width: 110px;">
                            <center><?= date("d M Y", $b["tanggal"]); ?></center>
                        </div>
                    </div>
                    <div class="col-lg-12" style="margin-top:20px;">
                        <p> <?= substr($b["isi"], 0, 200); ?>...</p>
                    </div>

                </div>
                <hr class="col-lg-12">
            </div>
        <?php endforeach; ?>
        <!-- AKHIR PER ARTIKEL -->
    </div>

    <div style="background-color: #FFD500; width: 275px; height: 200px;" class="col-lg-4">
        <form action="" style="padding:20px;">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Pencarian..." style="width:auto">
            </div>
        </form>
    </div>


</div>

<!-- AKHIR BAGIAN HEAD -->