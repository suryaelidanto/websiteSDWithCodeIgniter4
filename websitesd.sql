-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2020 at 02:24 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitesd`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` int(20) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `gambar`, `isi`, `tanggal`, `label`) VALUES
(1, 'Sejarah Sekolah Baru Kita!', 'data:image/jpeg;base64,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', 'Covid-19 atau yang kita kenal sebagai virus korona merupakan penyakit menular yang disebabkan oleh jenis virus korona yang baru ditemukan. Covid-19 secara resmi dinyatakan sebagai pandemi pada Rabu, 11 Maret 2020 oleh Organisasi Kesehatan Dunia (WHO) karena penyakit ini telah melanda 114 negara di dunia dan memakan korban lebih dari 4.000 jiwa. Pandemi Covid-19 saat ini tengah menjadi ancaman di seluruh dunia termasuk di Indonesia.\r\n\r\nDilansir dari situs WHO, Presiden Indonesia Joko Widodo mengumumkan kasus pertama pandemi Covid-19 di Indonesia pada 2 Maret 2019. Pandemi yang berawal dari sebuah pasar di Wuhan, China ini dengan cepat menyebar ke seluruh penjuru nusantara dan mengancam banyak sektor mulai dari sektor kesehatan, ekonomi, hingga pendidikan.\r\n\r\nSelanjutnya, pemerintah mengambil kebijakan guna menghambat pertumbuhan pandemi ini di Indonesia, yaitu dengan karantina wilayah, di mana masyarakat di wilayah tertentu tidak diperkenankan untuk keluar rumah bila bukan merupakan hal yang penting. Untuk mendukung kebijakan ini para pekerja disarankan untuk bekerja dari rumah atau yang sering kita dengar sebagai work from home (WFH).\r\n\r\nTidak hanya itu, kebijakan tersebut juga memberikan dampak yang besar terhadap berbagai bidang lainnya, salah satunya di bidang pendidikan. Nadiem Anwar Makarim selaku Menteri Pendidikan dan Kebudayaan, merespon kebijakan tersebut dengan memberikan himbauan kepada seluruh institusi pendidikan di Indonesia untuk mendukung upaya pemerintah dalam mencegah pernyebaran virus korona di Indonesia. \r\n\r\nKementrian Pendidikan dan Kebudayaan telah  mengeluarkan dua surat edaran terkait dengan virus korona. Pertama, Surat No. 2 Tahun 2020 mengenai Pencegahan dan Penanganan Covid-19 di Lingkungan Kemendikbud, dan surat kedua yaitu, Surat Edaran No. 3 Tahun 2020 mengenai Pencegahan Covid-19 pada Satuan Pendidikan.\r\n\r\nTerhitung tanggal 16 Maret 2020 pemerintah meliburkan kegiatan belajar mengajar dan mewajibkan seluruh pelajar di Indonesia untuk belajar daring dari rumah. Sistem pembelajaran daring merupakan sistem pembelajaran dimana pengajar dan peserta didik bertatap maya secara online dalam waktu yang bersamaan, sistem pembelajaran daring mengunakan perangkat keras seperti personal computer (PC), gawai, dan laptop yang terhubung dengan koneksi internet untuk dapat mengaksesnya.\r\n\r\nHal ini membuat pelajar dipaksa beradaptasi secara cepat untuk dapat menggunakan aplikasi-aplikasi pendukung pembelajaran daring seperti E-learning, Google Clasroom, Zoom, Google Meet, Telegram, WhatsApp, dll.\r\n\r\nTransformasi sistem pendidikan di indonesia yang semula tatap muka secara langsung berubah secara mendadak menjadi pembelajaran jarak jauh secara daring, hal ini membuat banyak pihak sekolah menjadi kewalahan karena belum siap berpindah ke sistem pembelajaran daring dan belum memiliki situs sekolah seperti e-learning.\r\n\r\nPendidik juga berperan penting dalam pembelajaran jarak jauh untuk bisa memanfaatkan teknologi yang ada dan dapat membuat konten pembelajaran semenarik dan sekreatif mungkin agar mudah diterima oleh peserta didik. Peserta didik juga perlu dibimbing untuk berpindah ke sistem pembelajaran jarak jauh dan diperlukan adanya sosialisasi mengenai tata cara pembelajaran daring.\r\n\r\nSistem pendidikan Indonesia yang seolah belum siap untuk berevolusi ke arah teknologi menciptakan banyak kendala baik untuk peserta didik maupun untuk tenaga pengajar. Kendala tersebut mulai dari ketidaksediaannya perangkat keras, kesalahan pada koneksi jaringan internet, hingga mahalnya kuota internet.\r\n\r\nContohnya, banyak pelajar di desa yang tidak memiliki perangkat keras untuk mengikuti pembelajaran secara daring hingga akhirnya pelajar tersebut harus datang langsung ke guru atau datang ke rumah temannya dan ikut belajar bersama.', 1605617387, 'Berita'),
(2, 'Menjadi Pembelajar yang Benar!', 'https://asset.kompas.com/crops/hgD2BBII_wf8Fmpz13cCx4bFnVA=/0x0:0x0/750x500/data/photo/2020/07/11/5f09357c25327.jpg', 'Pidato Jack Ma disebut penyebab utama dibatalkannya penjualan saham perdana atau IPO perusahaan fintech-nya, Ant Financial, yang diprediksi memecahkan rekor. Kritik kerasnya pada sistem finansial di China bikin pemerintah China marah, bahkan menurut sumber, presiden Xi Jinping sendiri yang memerintahkan IPO Ant Financial dihentikan.\r\n\r\nJack Ma berpidato di Bund Summit, sebuah event di Shanghai yang dihadiri ratusan bankir dan perwakilan pemerintah China. Pada intinya, ia mengatakan bahwa regulasi keuangan yang ada sekarang dan sistem perbankan di China sudah ketinggalan zaman.\r\n\r\nMenurut Ma, sistem aturan perbankan yang disebut Basel Accords, yang dipakai sebagai regulasi di dunia dan di China, dibuat oleh sekelompok orang-orang tua. Ia mempertanyakan apakah China masih membutuhkannya di tengah perkembangan pesat pada saat ini.\r\n\r\nJack Ma menyebut masalah terbesar China adalah sistem finansial yang kurang baik, bahkan membandingkannya dengan pemberian obat yang salah. \"Gejala alzheimer dan polio mungkin mirip, tapi keduanya benar-benar penyakit berbeda. Jika seorang anak diberi obat Alzheimer untuk menyembuhkan polio, akan ada banyak masalah,\" ucapnya.\r\n\r\n\"Basel Accords bertujuan untuk merawat penyakit sistem perbankan tua, obat untuk orang-orang tua, tapi sistem keuangan di China masih muda,\" tambahnya, dikutip detikINET dari SCMP.\r\n\r\nMa menambahkan, sistem finansial China masih didominasi bank pemerintah yang besar dan sebenarnya membutuhkan teknologi lain. \"Bank besar seperti sungai besar, kita perlu kolam, anak sungai dan sistem kanal kecil. Tanpa itu di ekosistem, banjir dan kekeringan akan selalu terjadi,\" katanya mengibaratkan.\r\n\r\nBahkan ia menyebut bisnis bank di China dijalankan seperti rumah gadai, di mana bank selalu meminta jaminan cukup untuk pinjaman. Akibatnya, banyak bisnis kecil kesulitan mendapatkan pinjaman. Di masa depan, keputusan memberi pinjaman menurutnya harus diputuskan oleh big data dan rekam jejak kredit.\r\n\r\nIa melanjutkan, sistem perbankan secara umum dirancang untuk zaman perkembangan industri masa lalu, tapi di masa mendatang perlu memakai teknologi baru termasuk big data, cloud dan blockchain.\r\n\r\n\"Inovasi selalu datang bersama risiko, tidak ada inovasi tanpa risiko. Tapi risiko terbesar adalah jika mencoba meminimalisir risiko sampai nol,\" lanjut Jack Ma.', 1607617387, 'Agenda'),
(3, 'Aku Tidak Mengerti Lagi', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/03/16/1704802237.jpg', 'Internet Society (ISOC) organisasi nirlaba global menyerahkan kepada pakar teknologi asal Indonesia Onno W Purbo penghargaan bergengsi Jonathan B Postel Service Award. Penghargaan ini diserahkan para Rabu (18/11/2020).\r\n\r\nJonathan B Postel merupakan suatu penghormatan kepada para mereka yang berjasa di bidang internet dan biasanya adalah orang-orang punya semangat \'gila\' melakukan terobosan.\r\n\r\nKepada detikINET, Onno sapaannya menyampaikan cerita awal ia mendapatkan penghargaan tersebut. Semua dimulai dari dorongan rekannya yang juga ilmuwan komputer Prof Kilnam Chon asal Korea Selatan.\r\n\r\n\"Dia bilang \'No, coba kamu masukin ke Jonathan B Postel Award. Dua kali dimarahin, dua kasih submit nggak diterima,\" kenangnya.\r\n\r\nKetiga kali saat dia ingin mengajukan kembali, ternyata ia dikejar deadline. Prof Kilnam Chon juga sampai ragu bahwa Onno bisa mengajukan bukti baktinya di dunia internet kepada Internet Society secara tepat waktu.\r\nBaca juga:\r\nDomain .id Dinilai Layak Go International\r\n\r\nTernyata, setelah tiga kali mengajukan dan bersaing dengan banyaknya ilmuwan hebat lainnya di seluruh dunia, Onno dinyatakan sebagai penerima Jonathan B. Postel Service Award tahun ini. Saat menerima penghargaan Onno mengatakan bahwa ia percaya akses informasi bisa didapatkan dengan alat sederhana.\r\n\r\n\"Poinnya kita bisa pakai alat sederhana untuk memenuhi hak akses informasi soal pengetahuan, ini merupakan fondasi utama supaya suatu negara bisa maju ke depan. Pekerjaan ini belum selesai,\" ucapnya.\r\n\r\nSebagai informasi tambahan, dalam penghargaan tersebut, Onno terpilih karena julukannya sebagai \'Pembebasan Internet Indonesia\'. Onno diketahui sebagai perintis koneksi Internet pertama di Institut Teknologi Bandung (ITB) dan menggunakannya untuk membangun jaringan ', 1608617387, 'Tips'),
(4, 'I Know I Can!', 'https://cdn2.tstatic.net/jakarta/foto/bank/images/ruang-kelas-di-smpn-2-kota-bekasi-masih-kosong.jpg', 'Naruto adalah sebuah serial manga karya Masashi Kishimoto yang diadaptasi menjadi serial anime. Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, pemimpin dan ninja terkuat di desanya. Serial ini didasarkan pada komik one-shot oleh Kishimoto yang diterbitkan dalam edisi Akamaru Jump pada Agustus 1997.[1]\r\n\r\nManga Naruto pertama kali diterbitkan di Jepang oleh Shueisha pada tahun 1999 dalam edisi ke-43 majalah Shonen Jump. Di Indonesia, manga ini diterbitkan oleh Elex Media Komputindo. Popularitas dan panjang seri Naruto sendiri (terutama di Jepang) menyaingi Dragon Ball karya Akira Toriyama, sedangkan serial anime Naruto, diproduksi oleh Studio Pierrot dan Aniplex, disiarkan secara perdana di Jepang oleh jaringan TV Tokyo dan juga oleh jaringan televisi satelit khusus anime, seperti Animax dan stasiun televisi lainnya, pada 3 Oktober 2002 sampai sekarang. Seri pertama terdiri atas 9 musim dan berlangsung 220 episode. Musim pertama dari seri kedua mulai ditayangkan pada tanggal 15 Februari 2007. Di Indonesia sendiri, anime Naruto pernah ditayangkan oleh stasiun televisi Trans TV, yang kemudian ditayangkan lebih lanjut oleh GTV dan sempat ditayangkan di Indosiar untuk musim keempat dan kelima sampai Naruto Shippuden musim kelima. Selain serial anime, Studio Pierrot telah mengembangkan delapan film untuk seri dan beberapa original video animation (OVA). Jenis barang dagangan termasuk novel ringan, permainan video dan koleksi kartu yang dikembangkan oleh beberapa perusahaan.\r\n\r\nViz Media memiliki lisensi manga dan anime produksi Amerika Utara. Viz telah menerbitkan seri ini ke dalam majalah mereka, yaitu Shonen Jump, serta beberapa volume. Seri anime ini mulai ditayangkan di Amerika Serikat dan Kanada pada tahun 2005, dan kemudian di Inggris dan Australia pada tahun 2006 dan 2007. Film, serta sebagian OVA dari seri ini juga telah dirilis oleh Viz, dengan tayang perdana di bioskop. Volume DVD pertama Naruto: Shippuden dirilis oleh Viz di Amerika Utara pada 29 September 2009, dan mulai disiarkan di Disney XD pada bulan Oktober pada tahun yang sama. Naruto Shippuden ditayangkan di Adult Swim, Toonami pada Januari 2014. Viz Media mulai streaming kedua seri pada layanan streaming Neon Alley mereka pada Desember 2012. ', 1609617387, 'Info');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama_acara` varchar(100) NOT NULL,
  `deskripsi_acara` text NOT NULL,
  `tanggal_acara` int(20) NOT NULL,
  `tanggal_upload` int(20) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama_acara`, `deskripsi_acara`, `tanggal_acara`, `tanggal_upload`, `gambar`) VALUES
(1, 'Pengajaran Intensif di Kelas', 'Potret yang diambil dalam situasi yang intensif saat pembelajaran. Siswa terlihat sangat antusias dalam mengikuti pembelajaran.', 1605706815, 1605716815, 'https://static.republika.co.id/uploads/images/inpicture_slide/sejumlah-sekolah-di-kota-bekasi-melakukan-simulasi-belajar-tatap_200803175705-543.jpg'),
(2, 'Alhamdulillah Bidadari Kelas', 'Potret ini diambil ketika siswi sedang melamun. Dan Alhamdulillah terfoto. Syukur deh.', 1605816815, 1605926815, 'https://cdn.medcom.id/dynamic/photos/2020/11/17/47062/sekolah-di-pariaman-mulai-pembelajaran-tatap-muka-02.jpg?w=720'),
(3, 'Wah Ada Layangan', 'Terlihat bocah sedang melihat keluar jendela dan ingin mengambil layangan. Sayangnya, dia sedang dalam jam pelajaran, sehingga ia harus menyerah untuk mengambilnya.', 1606026815, 1606136815, 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/07/06/2574731654.png'),
(4, 'Momen Lagi Ulangan', 'Yups, anda tidak salah melihat, kita sedang ulangan nih, doain ya.', 1606236815, 1606346815, 'https://awsimages.detik.net.id/visual/2020/05/21/1ffcdfcb-121f-46a3-bfb6-82b75e6e963a_169.jpeg?w=650');

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `tanggal_input` int(11) NOT NULL,
  `link_download` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `nama`, `jenis`, `tanggal_input`, `link_download`) VALUES
(1, 'Give and Take: WHY HELPING OTHERS DRIVES OUR SUCCESS', 'Buku', 1606007130, 'https://sambazmusic.files.wordpress.com/2017/08/give-and-take.pdf'),
(2, 'Mindset: The New Psychology of Success', 'Buku', 1606007397, 'https://www.pdfdrive.com/download.pdf?id=60365105&h=0f2b23ade7721f946e0002a6382265ac&u=cache&ext=pdf'),
(3, 'Rudy: Kisah Masa Muda Sang Visioner', 'Buku', 1606007528, 'https://drive.google.com/file/d/1_RU3DE1twcY9ufWRazzs_85bEoMHz4fP/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama_karyawan`, `nik`, `jabatan`, `gambar`) VALUES
(1, 'Mrs. Devil', '332321323123', 'Penguasa Kerajaan Darkness', '1.jpg'),
(2, 'Mr. Rubick', '3238828312834', 'Ilmuwan Sekolah', '2.jpg'),
(3, 'Tuan Venomancer', '332381483483', 'Ilmuwan Ahli Racun', '3.jpg'),
(4, 'Shadow Fiend', '32321421312344', 'Ketua Pengawas Sekolah', '4.jpg'),
(5, 'Ember Spirit', '423214123124213', 'Guru Olahraga', '5.jpg'),
(6, 'Windranger', '323245551232', 'Guru Panah', '6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
