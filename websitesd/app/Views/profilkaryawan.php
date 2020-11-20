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
    1px 1px 0 #000;  "> PROFIL KARYAWAN </h1>
                        <hr>
                        <h3 style="color:white;    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  ">PARA KARYAWAN DAN GURU SD AL-IRSYAD 02 CILACAP</h3>
                    </center>
                </div>
            </div>
        </div>
    </center>
</div>

<div style="background-color:white; width: auto; padding:100px;">
    <div style="display:table; margin: 0 auto;" class="row">
        <?php foreach ($profil as $p) : ?>
            <div class="col-lg-6 row profil" id="warnain" style="width:500px; height:400px; margin: 70px 50px 50px 50px; ">
                <div class="col-lg-12 profil-gray" id="iniwarnain">
                    <img src="<?= base_url("karyawan"); ?>/<?= $p["gambar"]; ?>" alt="Profil Karyawan" style="width:500px; height:400px;overflow:hidden;">
                </div>
                <div class="col-lg-12">
                    <button id="detailprofilbtn" class="btn btn-warning" style="width:500px;" data-nama="<?= $p["nama_karyawan"]; ?>" data-nik="<?= $p["nik"]; ?>" data-gambar="<?= $p["gambar"]; ?>" data-jabatan="<?= $p["jabatan"]; ?>" data-toggle="modal" data-target="#detailprofil">
                        <p style="font-size:15px;"> DETAIL </p>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- The modal -->
    <center>
        <div class="modal fade" id="detailprofil" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <center>
                            <h4 class="modal-title" id="modalLabelLarge">DETAIL KARYAWAN</h4>
                        </center>
                    </div>

                    <div class="modal-body">
                        <center>
                            <img id="gambarprofil" src="" alt="Profil Karyawan" style="width:200px; height:200px;overflow:hidden;" class="img-responsive img-thumbnail">
                        </center>
                        <div class="input-group" style="width:100%; margin-top:30px;">
                            <label for="nama"> NAMA : </label>
                            <input type="text" class="form-control" value="nama" id="namaprofil" name="namaprofil" readonly>
                        </div>
                        <div class="input-group" style="width:100%; margin-top:30px;">
                            <label for="jabatan"> JABATAN : </label>
                            <input type="text" class="form-control" value="jabatan" id="jabatanprofil" name="jabatanprofil" readonly>
                        </div>
                        <div class="input-group" style="width:100%; margin-top:30px;">
                            <label for="nik"> NIK : </label>
                            <input type="text" class="form-control" value="nik" id="nikprofil" name="nikprofil" readonly>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </center>
</div>

<!-- AKHIR BAGIAN HEAD -->