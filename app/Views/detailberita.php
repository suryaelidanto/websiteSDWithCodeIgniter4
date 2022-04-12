<div style="padding:100px;">
    <center>
        <h2> <a href=""> <?= $berita[0]["judul"]; ?></a></h2>
        <img src="<?= $berita[0]["gambar"];  ?>" style="width: 400px; max-height:300px; margin-bottom:20px; margin-top:20px;">
    </center>
    <div class="col-lg-12">
        <div class="col-lg-3" style="background-color: #FFD500;max-width: 110px;">
            <center><?= $berita[0]["label"]; ?></center>
        </div>
        <div class="col-lg-3" style="background-color: #DFE1E1;max-width: 110px;">
            <center><?= date("d M Y", $berita[0]["tanggal"]); ?></center>
        </div>
    </div>
    <hr>
    <p style="margin-top:50px; font-size: 20px;"> <?= $berita[0]["isi"]; ?> </p>

</div>