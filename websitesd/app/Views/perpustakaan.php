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
    1px 1px 0 #000;  "> PERPUSTAKAAN </h1>
                        <hr>
                        <h3 style="color:white;    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  "> TEMPAT DOWNLOAD BUKU ONLINE DAN REFERENSI SEKOLAH </h3>
                    </center>
                </div>
            </div>
        </div>
    </center>
</div>

<div style="background-color:white; width: auto; padding:100px;" class="container">

    <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th> No. </th>
                <th>Judul</th>
                <th>Jenis</th>
                <th>Tanggal Input</th>
                <th>Telah Didownload</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perpustakaan as $p) : ?>
                <?php $no = 1; ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $p["nama"]; ?></td>
                    <td><?= $p["jenis"]; ?></td>
                    <td><?= date("d M Y", $p["tanggal_input"]); ?></td>
                    <td><?= $p["telah_download"]; ?></td>
                    <td><a href="<?= $p["link_download"]; ?>" class="btn btn-primary" download> Download </a></td>
                </tr>
                <?php $no++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<!-- AKHIR BAGIAN HEAD -->