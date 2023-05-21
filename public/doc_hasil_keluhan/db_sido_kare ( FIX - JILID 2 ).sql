-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 03:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sido_kare3`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `otp` varchar(10) DEFAULT NULL,
  `status_verif` int(1) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `nomor_telepon` varchar(13) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `profile_img` varchar(200) NOT NULL DEFAULT 'kosong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `password`, `nik`, `otp`, `status_verif`, `role`, `nomor_telepon`, `nama`, `profile_img`) VALUES
(53, 'kitanav29@gmail.com', 'Kusmay0gi.', '351717280323003', '70782', 1, 'User', '085730040398', 'RiyanKts Riyana Trilaksono', 'bruh.png'),
(54, 'akbarjoe81@gmail.com', 'Daffa123', '351717280323004', '88337', 1, 'User', '087123456783', 'Della', 'image_cropper_1684303536044.jpg'),
(55, 'kitanav31@gmail.com', '123', NULL, '36807', NULL, 'User', '123131', 'dasdsadsa', 'bruh.png'),
(56, 'bebek@gmail.com', '123', NULL, '53640', NULL, 'User', '123', 'bebek', '');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `id_akun` int(10) DEFAULT NULL,
  `tanggal_publikasi` datetime DEFAULT NULL,
  `id_kategori` varchar(30) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `unggah_file_lain` varchar(100) DEFAULT NULL,
  `judul_berita` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `id_akun`, `tanggal_publikasi`, `id_kategori`, `isi_berita`, `foto`, `unggah_file_lain`, `judul_berita`, `created_at`, `updated_at`) VALUES
(11, 54, '2023-05-13 08:22:48', 'ktg_berita01', 'Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Nganjuk melaksanakan kegiatan Pembinaan Kelompok Informasi Masyarakat (KIM) secara virtual, Kamis (01/9/2022) pagi.\r\n\r\nTidak mengurangi rasa kebersamaan, kali ini pembinaan KIM melalui zoom meeting dikomandoi Kepala Diskominfo Slamet Basuki, A.P bersama Kepala Bidang Statistik dan Pengelolaan Informasi Kamunikasi Publik Hari Purwanto, ST yang membidangi KIM.\r\n\r\nKIM SMART yang dimiliki Desa Sidokare dalam Zoom kali ini langsung di ikuti oleh Sdr. Supriono, S.Kom selaku Ketua KIM.\r\n\r\nDi tengah gempuran berita hoaks inilah menjadi peran penting KIM di tengah-tengah masyarakat yang merupakan jurnalisme warga. “Tugas kami adalah berbagi informasi. Mari kita bersama-sama sebagai pejuang-pejuang informasi karena itu merupakan amalan (informasi) baik dan benar, selama itu bermanfaat kita terus berkolaborasi, berinteraksi, berkomuniaksi dan bersilaturahmi dalam menyebarkan informasi,” lanjut Supriono Ketua KIM SMART.\r\n\r\nLebih jauh Supriono menyebutkan informasi dapat berupa fotografi, video konten, berita, infografi. “Konten-konten yang kami sebutkan merupakan isian dari media sosial yang bapak ibu punya. Kami akan mensuport ketika bapak ibu memiliki semangat.', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/ce27881deb1bbca8f906eb353c2c10d9.JPG', 'gambar.jpg', 'Maksimalkan Peran Kim, Diskominfo Kab. Nganjuk Gelar Pembinaan Secara Virtual', NULL, NULL),
(12, 55, '2023-05-13 08:22:48', 'ktg_berita01', 'Dalam upaya menyukseskan pelaksanaan kegiatan Bulan Imunisasi Anak Nasional (BIAN) diperlukan  keterlibatan semua pihak, tidak terkecuali  peran dan kontribusi  dari Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga (TP PKK) tingkat desa melalui kader-kadernya.\r\n\r\n“TP PKK Desa Sidokare siap bekerjasama, siap untuk menyukseskan program BIAN di Desa Sidokare khususnya dan di Kab. Nganjuk pada umumnya, dengan melakukan koordinasi TP PKK Bidan Desa dan kader Posyandu Balita. Kader-kader kita siap berkontribusi menyukseskannya,” tegas Wakil Ketua TP PKK Desa Sidokare Hj. Siti Romelah saat menghadiri rapat koordinasi dengan kader posyandu balita (05-08-2022).\r\n\r\nUntuk menyukseskan kegiatan BIAN di Desa Sidokare, lanjut Hj. Siti Romelah, TP PKK Desa Sidokare beserta Kades Posyandu Balita mendukung dan berpartisipasi dalam menykseskan BIAN di Pos pelayanan terpadu (Posyandu) termasuk mengajak ibu-ibu yang ada di lingkungan masing-masing untuk ikut serta terlibat langsung dalam kegiatan ini. \r\n\r\n“Dalam mensukseskan BIAN, tentu para kader Posyandu Balita dan TP harus bekerjasama dan berkoordinasi dengan dinas kesehatan maupun dinas dan badan terkait lainnya, termasuk mengajak para ibu-ibu untuk berkontribusi dalam kegiatan BIAN,” tandasnya.    ', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/d8c2466c984cdecceb46de282c992aac.jpg', 'gambar.jpg', 'TP PKK Desa Sidokare Bersama Kadernya Siap Sukseskan BIAN 2022', NULL, NULL),
(13, 55, '2023-05-13 08:22:48', 'ktg_berita01', 'Sebanyak 23 mahasiswa/mahasiswi dari berbagai jurusan Universitas Islam Negeri Sunan Ampel Surabaya (UINSA) tiba di Desa Sidokare Kec. Rejoso Kab. Nganjuk. Kehadiran 23 mahasiswa/mahasiswi ini dalam rangka kegiatan Kuliah Kerja Nyata (KKN) yang akan berlangsung selama 40 hari yaitu dari tanggal 18 Juli 2022 sampai 28 Agustus 2022.\r\n\r\nPenyambutan Mahasiswa Kuliah Kerja Nyata (KKN) Universitas Islam Negeri Sunan Ampel Surabaya (UINSA) dilaksanakan pada hari Selasa, 19 Juli 2022 bertempat di Pendopo Sasono Hamong Projo Desa Sidokare Kec. Rejoso Kab. Nganjuk dan di pimpin oleh Plh. Kepala Desa Sidokare, Sumarno.\r\n\r\nDalam sambutan pengantarnya, Mirza Ghulam Ahmad selaku Koordinator KKN mengatakan bahwa kehadiran mahasiswa dalam kegiatan Kuliah Kerja Nyata (KKN) ini diharapkan dapat meningkatkan dan menggali potensi Desa Sidokare dalam berbagai aspek dengan menyesuaikan program yang telah dijalankan oleh Pemerintah Desa Sidokare. Lebih jauh, Koordinator Desa (kordes) menjelaskan seluruh peserta KKN berasal dari beberapa jurusan yang siap mengabdikan ilmunya untuk masyarakat Desa Sidokare.\r\n\r\nSementara itu, Plh. Kepala Desa Sidokare dalam sambutan penerimaan mengucapkan selamat datang dan selamat bergabung di Desa Sidokare. “KKN merupakan bentuk pengabdian kepada Masyarakat, berikan sumbangsih sesuai kapasitas keilmuan anda sebagai intelektual muda, berikan masukan dan saran serta terobosan baru dalam meajukan Lokasi kegiatan anda. Dalam 40 hari kedepan anda akan menjadi warga Desa Sidokare. InsyaAllah masayarakat dan pemerintah Desa Sidokare siap memberikan bantuan dan Pendampingan”. Tutup Sumarno selaku Plh. Kepala Desa.', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/273bc9d921df9397750bea51ef404860.jpg', 'gambar.jpg', 'Pemdes Sidokare Sambut dan Terima Mahasiswa Kuliah Kerja Nyata (KKN) UINSA Surabaya', NULL, NULL),
(14, 55, '2021-12-31 11:08:06', 'ktg_berita01', 'Vaksin kepada masyarakat Sidokare', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/a5105a8683c42b9d7801501765d047af.jpg', 'https://youtu.be/HayzCL7VFig', 'Vaksin Door To Door', NULL, NULL),
(15, 54, '2021-11-15 00:00:00', 'ktg_berita01', 'Bertempat di Balai Desa Sidokare, Dinas Perdagangan dan Perindustrian Kabupaten Nganjuk melakukan Pelayanan Tera Ulang Ukuran, Takaran, Timbangan, dan Perlengkapannya (UTTP), Rabu (04/11/21). Hadir dalam pelayanan tera ulang ini adalah Tim Disdagprin Kabupaten Nganjuk.\r\n\r\nBeradasarkan data yang diperoleh dari Tim Pelayanan UPPT, sebanyak 27 warga Desa Sidokare yang mentera ulang timbangannya. Ada empat (4) jenis timbangan yang ditera ulang, yaitu anak timbangan, timbangan sentisimal, timbangan meja, dan dacin logam.\r\n\r\nProgram pelayanan UTTP ini bertujuan mewujudkan Daerah Tertib Ukur di Kabupaten Nganjuk dan memberikan perlindungan terhadap konsumen atas jaminan kebenaran hasil pengukuran, ketertiban, dan kepastian hukum dalam pemakaian satuan UTTP sebagaimana diamanatkan dalam Undang-Undang No. 2 Tahun 1981 tentang Metrologi Legal dan Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintah Daerah.\r\n\r\nImam Masyhuri, Kepala Desa, menyatakan bahwa tera ulang ini agar timbangan warga atau pedagang di Desa Sidokare sesuai dengan standar sehingga baik penjual maupun pembeli tidak ada yang dirugikan. Sementara itu, warga berharap tera ulang bisa rutin dilakukan. “Program ini bagus sehingga dacin menjadi baik. Saya harap rutin dilakukan,” kata Syafi’i salah satu pedagang bawang merah di sidokare, setelah melakukan tera ulang Timbangan duduknya.\r\n\r\nSebenarnya pelayanan Tera Ulang ini tidak hanya untuk dacin logam saja, tetapi juga timbangan elektronik. “Timbangan elektronik juga harus ditera ulang. Saya harapkan pada program pelayanan ke depan semua warga bisa mentera ulang segala jenis timbangan miliknya,” ungkap Imam Masyhuri.', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/51135e0eeb1c0418d196cf01271f2c84.jpg', 'https://imagizer.imageshack.com/img924/9163/aHDUUd.jpg', 'Pelayanan Tera Ulang Desa Sidokare\r\n', NULL, NULL),
(21, 54, '2022-02-28 08:34:26', 'ktg_berita02', 'Untuk mewujudkan pelayanan prima kepada seluruh warga masyarakat, Pemerintah Desa Sidokare Kecamayan Rejoso Kabupaten Nganjuk berupaya untuk mewujudkannya melalui peningkatan atau rehab Ruang Informasi dan Pelayanan Publik Desa Sidokare. Hal ini tak lain adalah untuk merefleksikan visi dan misi pemerintah desa untuk bagaimana melayani masyarakat dengan sepenuh hati.\r\n\r\n\"Kita ini adalah abdi masyarakat, dengan demikian berarti kenyamanan dan kepuasan masyarakat itu adalah pokoknya,\" kata Kepala Desa Sidokare, Imam Masyhuri.\r\n\r\nRenovasi Ruang Pelayanan dengan volume 4 x 4 meter tersebut, dibiayai dari Dana Bai Hasil dan Retribusi Daerah (BHPRD) Tahun anggaran 2021 sebesar Rp. 26.417.270, dengan pelaksanaan pembangunannya dilakukan secara swakelola.\r\n\r\n\r\n\"Renovasi ini dilakukan semata-mata untuk memberikan rasa nyaman, baik kepada perangkat desa yang akan memberikan pelayanan kepada masyarakat, maupun kepada masyarakat sendiri yang datang meminta pelayanan kami,\" tutur Kepala Desa Sidokare, Imam Masyhuri, Jum\'at (28/2/2022)\r\n\r\nSelanjutnya Imam mengatakan, renovasi Ruang Pelayanan Desa tersebut memang sudah menjadi rencana dan masuk dalam RKPDes, karena melihat kondisi Ruang Pelayanan yang perlu perhatian lebih dan kurang sedap dipandang mata.\r\n\r\n\"Alhamdulillah, renovasi sudah selesai dan berjalan lancar. Bagian-bagian bangunan yang kurang sedap kita perbaiki, biar para perangkat desa bekerjanya jadi betah dan nyaman, sehingga pelayan yang diperoleh masyarakatpun maksimal,\" tandasnya.\r\n\r\nDengan selesai di renovasinya Ruang Pelayanan ini, Imam berharap, kinerja jajarannya dapat lebih meningkat dalam memberikan pelayanan kepada masyarakat. Imam juga mengajak kepada seluruh perangkat dan masyarakat, untuk menjaga dan merawat berbagai sarana prasarana yang telah dibangun termasuk kantor desa, supaya berbagai fasilitas yang ada dapat dimanfaatkan dalam jangka waktu yang lama.', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/605ed22b9bd050d7d23603ab2a78acb6.jpg', 'https://i.ibb.co/SJwgm4R/Backd.jpg', 'Wujudkan Pelayanan Prima, Pemdes Sidokare Rehab Ruang Pelayanan Administrasi Terpadu', NULL, NULL),
(22, 55, '2021-08-04 00:00:00', 'ktg_berita02', 'Sidokare Mandiri Sidokare Berdikari\r\nDisini Kami dilahirkan, Segenap Jiwa Raga Kami Bhaktikan\r\nDisini di Bumi Petiwi Nan Gemah Ripah Loh Jinawi\r\nMencari Penghidupan Untuk Sang Buah Hati\r\nHasil Bumi Bawang Merah Sidokare\r\nPenyangga Ekonomi Warga Untuk Bangsa Dan Negara\r\n\r\nPeluhku untuk negeri memberi warna untuk Bumi Pertiwi\r\nPenyangga ketahanan pangan Negara\r\nBukti nyata karya anak bangsa\r\nMenuju Sidokare Sembada...', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/b3f34aefe80f823a4f64d2ccb9a7c478.JPG', 'https://youtu.be/VJSWlXFDXLg', 'Lestari Alamku Lesatri Desaku,.. Sidokare', NULL, NULL),
(23, 53, '2020-07-27 11:16:12', 'ktg_berita02', 'Para petani yang memiliki lahan di sawah lor omah Desa Sidokare Kecamatan Rejoso mengapresiasi atas pembangunan pengurugan atau pengerasan jalan yang dilakukan Pemdes setempat.\r\n\r\nSelama ini jalan usaha tani (JUT) yang menjadi akses para petani kondisinya kurang baik, sehingga sangat menyulitkan para petani saat musim panen tiba.\r\n\r\nNamun sekarang jalan usaha tani yang membentang sepanjang kurang lebih 700 meter tersebut telah di urug. Bahkan separuh dari panjang JUT tesebut sisi kanan dan kirinya sudah dibuatkan Tanggul Penahan Tanah (TPT).\r\n\r\n“Alhamdulillah, saat ini petani merasa cukup lega setelahnya jalan usaha tani di benahi oleh Pemdes Sidokare. Sehingga sekarang kendaraanpun baik roda dua maupun roda tiga bisa masuk,” ujar Parmun, salah satu petani, Sabtu(25/7).\r\n\r\nSebelum jalan ini dikeraskan seperti sekarang, kata Parmun, kondisi jalan memang kurang baik banyak lubang-lubang yang cukup dalam, sehingga bisa menimbulkan kerugian bagi pengendara apalagi saat ini mendekati musim panen raya. “Tapi dengan dibenahinya jalan usaha tani ini, sekarang jalan sudah lumayan baik dan tidak terlalu banyak lubang bekas roda Tossa., ”ujar Parmun.\r\n\r\nTerpisah, Kasun Sidokare H. Imam Mashudi selaku Koordinator Program PKT didampingi PK Pembangunan Agung Priyanto, S.Kom mengatakan, “program urug JUT ini kita ambilkan dari Dana Desa pada kegiatan PKT (Padat karya Tunai).”\r\n\r\nLebih jauh Abah, sebutan akrab Kepala Dusun mengatakan, dengan adanya pengerasan akses jalan usaha tani, diharapkan agar kehidupan petani lebih meningkat.\r\n\r\nDi sisi lain, PK Pembangunan berharap, akses jalan yang sudah di bangun ini agar dirawat bersama sama, sehingga jalan tersebut tidak cepat rusak. Semisal jangan membuang rumput atau kotoran sawah ke tengah jalan.\r\n\r\n“Mari kita jaga dan rawat bersama sama, agar akses jalan ini bisa berfunsi sebagaimana mestinya,” ujar Agung Priyanto, S.kom.', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/56782423c861a747cc94c12e0d14198c.jpg', 'gambar.jpg', 'Para Petani Apresiasi Pengerasan Jalan Sawah Yang dilakukan Pemdes Sidokare\r\n', NULL, NULL),
(24, 54, '2020-05-06 00:00:00', 'ktg_berita02', 'Pemdes Sidoakre Tetap melakukan pengetatan penyebaran Covid 19, namun ditengah-tengah pancemik Covid-19 tersebut Pemdes Sidokare juga melakukan peningkatan kesejahteraan masyarakat dengan melakukan pembangunan infrastruktur pendukung yang memadai.\r\n\r\nImam Masyhuri, S.Pd, Kades Sidokare mengatakan bahwa, dengan menggunakan anggaran Dana Desa (DD) tahun 2020, pihak pemdes tetap mengutamakan prasarana jalan yang layak, salah satunya dengan pavingisasi.\r\n\r\n“Maski dengan adanya wabah Corona ini untuk skala prioritas adalah penanganan pencegahan dan panggulangan Covid 19, namun sesuai prosedur kita juga mulai melaksanakan pembangunan fisik,” ungkap dia.\r\n\r\nDiakuinya, berbagai kendala tentu saja muncul akibat wabah corona ini, namun yang jelas untuk pavingisasi di Desa Sidokare serta pembangunan TPT dan juga PJU akan tetap dilaksanakan.\r\n\r\n“Diharapkan wabah pandemi Corona segera berakhir, sehingga pelaksanaan pengadaan infrastruktur bisa segera terselesaikan tepat waktu, mengingat masih ada sektor-sektor lain yang harus juga diselesaikan,” Pungkasnya.\r\n', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/9b202249fd2e371f4fb2f229dc3bcc54.jpg', 'http://i.ibb.co/4pp0tqm/1.jpg', 'Pembangunan Dana Desa Tahap 1 Mulai Dikerjakan ditengah Wabah Corona', NULL, NULL),
(25, 53, '2020-04-23 00:00:00', 'ktg_berita02', 'Masyarakat Desa Sidokare, Kecamatan Rejoso, Nganjuk kini sudah dapat menikmati jalan yang terang benderang karena Jalan Desa yang dulu cukup gelap kini telah dipasangi lampu Penerangan Jalan Umum (PJU).\r\n\r\n\"Alhamdulillah, inilah suasana malam hari jam 00.00 hari Selasa, tanggal 21 April 2020  di Jalan Desa Sidokare, Kecamatan Rejoso. Sekarang jalan ini sudah terang benderang,\" kata Kepala Desa Sidokare, Imam Masyhuri, S.Pd.\r\n\r\nMenurut Kades, sebelumnya Jalan Sitara jika malam hari cukup gelap dibeberapa titik karena belum ada lampu PJU yang terpasang. Kondisi jalan yang gelap tentu sangat rawan dan membahayakan para pengguna jalan ketika mereka lewat jalan itu pada malam hari. Terutama kerawanan dari segi keamanan. Mengingat suasana jalan yang gelap dan sepi pada malam hari.\r\n\r\n\"Tapi sekarang Jalan desa sudah terang benderang. Sebanyak 37 lampu PJU yang telah terpasang sudah menyala,\" kata Kades.\r\n\r\nAtas pembangunan lampu PJU tersebut, pihaknya selaku Kepala Desa Sidokare dan atas nama masyarakat Desa Sidokare merasa senang karena PJU yang tahun ini masuk RKP sudah bisa terealisasi. \"Saya juga mengucapkan terima kasih kepada warga masyarakat Desa Sidoakre yang telah mendukung pembangunan lampu penerangan jalan desa\" pungkas kades berkumis itu.', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/c84a2a0baca0e48e5060e0588d188cec.jpg', 'gambar.jpg', 'PJU Menyala, Jalan Desa Sidokare Terang Benerang Bagaikan Kota', NULL, NULL),
(31, 54, '2022-04-02 08:36:20', 'ktg_berita03', 'Menyambut datangnya bulan suci Ramadhan 1443 Hijriyah, TPA dan RA yang tergabung dalam Yayasan Sabilul Huda Desa Sidokare Kec. Rejoso Kab. Nganjuk menggelar Pawai Akbar dengan Parade Drumband.\r\n\r\nPeserta pawai yang di dominasi anak-anak ini terlihat antusias mengikuti pawai. Mereka membawa sejumlah poster dan umbul-umbul yang bertuliskan Selamat Datang Ramadhan.\r\n\r\nMereka berjalan kaki menempuh jarak kurang lebih 3 kilometer dimulai dari TPA Sabilul Huda dan Finish di GOR DJOYO SUMARTO Desa Sidokare.\r\n\r\n“Pagi ini kita menyelenggarakan Marhaban Ya Ramadhan 1443 H, Kami mengajak anak-anak bagaimana mengintepretasikan diri kita untuk menyambut Ramadhan, masing-masing anak-anak membawa kreativitas dan poster dengan penuh suka cita, gembira melaksanakan kewajiban seorang muslim tanpa paksaan, diikuti kurang lebih sebanyak 100 siswa,” ujar Ketua Yayasan Sabilul Huda, H. Imron Rosyadi, S.Ag. (Jum’at, 01/04/2022).\r\n\r\nMenurut dia, bulan puasa harus disambut dengan bahagia. “Kegiatan ini untuk menyambut datangnya Ramadan, aku kuat puasa, pahala puasa luar biasa, Ramadhan bulan berkah, ramadhan tiba, puasa yuk !! seperti yang tertulis dalam poster,” katanya.\r\n\r\nDia berharap, dengan adanya kegiatan ini rasa bahagia dan semangat anak-anak pada pawai ini bisa menjadi energi positif pada saat mereka menjalankan ibadah puasa.\r\n\r\n”Alhamdulillah, berkat kerjasama yang apik antara panitia, dan warga sekolah, akhirnya seluruh rangkaian pawai akbar dapat terselesaikan dengan sukses, kegiatan ini juga ditujukan untuk mengingatkan masyarakat bahwa besok, Insya Allah Minggu, 03 April 2022 adalah hari pertama Ramadhan dan Anak-anak bisa berinteraksi langsung dengan warga untuk mengajak berpuasa,” terang H. Imron Rosyadi, S.Ag.\r\n\r\nSaat bulan puasa itu ramai orang menjual makanan. Fahat sangat bersemangat. Karena tahun ini merupakan tahun pertama dirinya ikut berpuasa.\r\n\r\n“Aku sudah besar jadi harus puasa, tahun kemarin belum puasa karena masih kecil. Saya suka bulan puasa karena ramai, saya puasa setengah hari karena baru pertama kali,” kata salah satu santri siswa, Fahat, Jum’at 01 April 2022.\r\n\r\n \r\n', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/abef1fe717a2565829cc660e8f8da080.jpg', 'https://i.ibb.co/cbMzg9S/a6fcf5b10cb944f9b87b18ee64538202.jpg', 'Sambut Bulan Suci Ramadhan, Ratusan Santri TPA & RA Sabilul Huda Gelar Pawai Drumband Keliling Desa', NULL, NULL),
(32, 56, '2022-03-28 00:00:00', 'ktg_berita03', 'Lembaga Amil Zakat, Infak, dan Sedekah Nahdlatul Ulama (LAZISNU) Ranting Desa Sidokare, Kecamatan Rejoso, menggelar bakti sosial NU Peduli dengan memberikan santunan berupa paket sembako kepada dhuafa se wilayah Desa Sidokare, Ahad (27/03/2022).\r\n\r\nMenariknya, baksos tersebut di berikan langsung, secara door to door, guna lebih mendekatkan NU Care LAZISNU kepada masyarakat, dan juga sebagai upaya tidak menimbulkan kerumunan di tengah pandemi. “Santunan door to door menghindari kerumunan, tanpa mengurangi rasa khidmat,” kata Rodiyah, Ketua Ranting LAZISNU Desa Sidokare.\r\n\r\nSantunan yang dilakukan LAZISNU diharapkan bisa membantu pemenuhan kebutuhan dhuafa, sekaligus sebagai upaya LazisNU agar tetap menjadi wadah yang dipercayai masyarakat dalam menyisihkan rezekinya. “LAZISNU terus berupaya menjadi lembaga yang akuntabel, kridibelitas dan transparan, agar tetap dipercaya masyarakat,” tambahnya.\r\n\r\nDitahun 2022 ini Sebanyak 120 paket sembako diserahkan kepada Dhuafa, kegiatan ini bersumber dari Kas yang terkumpul dari uang koin yang selama ini kita kelola dari masyarakat.\r\n“Alhamdulilah agenda tahunan ini dilaksanakan sebagai bentuk tanggung jawab LAZISNU kepada para muzakki, selain santunan kaum dhuafa kita juga ada kegiatan santunan anak yatim piatu yang kita laksanakan di bulan Muharram” kata Rodiyah, Ketua Lazisnu Ranting Desa Sidokare.\r\n\r\nMenurut  Diah, LAZISNU terus bertekad memaksimalkan kerja lembaga agar bermanfaat untuk masyarakat luas, dan selalu transparan dalam mengelola dana zakat, infak, dan sedekah. Sebab, transparansi adalah sumber kepercayaan masyarakat.\r\n\r\n“Mari kita bersama-sama memberikan manfaat untuk masyarakat yang membutuhkan melalui LAZISNU, untuk terus memberikan kebahagiaan kepada saudara kita yang membutuhkan,” pungkasnya.', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/55304fd766eacf94bcf01abaed4b19f0.jpg', 'https://i.ibb.co/cD8NQWp/4c84d589-cad4-4d40-bd2a-0b9964dc4d9c.jpg', 'LAZISNU Ranting Sidokare Santuni Dhuafa Secara Door To Door Di Masa Pandemi', NULL, NULL),
(33, 56, '2022-01-28 00:00:00', NULL, 'Kapasitas relawan memang luar biasa, tidak diragukan lagi kesigapan dan kekompakannya seperti relawan LINMAS yang dipunyai Desa Sidokare.\r\n\r\nLinmas merupakan singkatan dari Perlindungan Masyarakat. Pada awal pembentukan linmas  lebih dikenal di Masyarakat dengan sebutan Pertahanan Sipil atau Hansip. Pekerjaan Linmas adalah voulenteer ataupun relawan.\r\n\r\nTugas-tugasnya tidak jauh dari kegiatan sosial kemasyarakatan, membantu masyarakat ketika ada kegiatan sosial seperti kematian, hajatan, upacara keagamaan, pembentukan dapur umum di desa ketika ada bencana dan penjagaan ketika ada ivent-ivent penting , selalu nampak beberapa personil relawan seperti di tlusupan Sindon yang berada di pertigaan dan jalan raya ini, keberadaan mereka sangat membantu pengguna jalan yang mau melewati dan mau menyeberang jalan.\r\n\r\nSeperti hari itu ,Sabtu (27/01/2022) koordinator Linmas Agung Priyanto, Kom selaku Jogoboyo Desa Sidokare menurunkan 2 personil Linmas untuk ikut mengamankan hajatan Sdr. Sunarto salah satu warga yang ada di lingkungan RW. 01 Desa Sidokare. \r\n\r\nDiantara 2 personil itu adalah Ndan Sunawan dan Nadan Imam Syafi’f merupakan warga yang telah belasan tahun menjadi anggota Linmas. Mereka  sering mengikuti kegiatan sosial kemasyarakatan dengan melakukan PAM baik ditempat orang hajatan ataupun kegiatan sosial lainnya.', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/7851da64c40716780fe00b177b527690.JPG', 'https://i.ibb.co/CmkgTxV/88946291-e0a1-47de-ac2a-d9ba373c492b.jpg', 'Pengabdian Linmas Dan Relawan Desa Sidokare', NULL, NULL),
(34, 56, '2021-06-30 00:00:00', 'ktg_berita03', 'Hidup di lingkungan pedesaan mengajarkan kita untuk dekat dengan alam dan sesama manusia. Banyak pelajaran yang bisa dipetik dari interaksi sosial sehari-hari di masyarakat.\r\n\r\nTradisi “sambatan” salah satunya. Tradisi yang satu ini menunjukkan rasa empati dan kepedulian sosial masyarakat di lingkungan pedesaan masih tinggi. Sambatan adalah istilah yang biasa digunakan masyarakat desa untuk mendirikan atau memperbaiki rumah warga secara gotong-royong.\r\n\r\nSemangat gotong royong ini terus dilestarikan oleh warga Desa Sidokare Kec. Rejoso - Nganjuk. Masyarakat Desa Sidokare mengedepankan semangat gotong royong untuk menciptakan masyarakat yang guyub dan rukun. ', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/f3983b128186471767687f686310bb64.jpg', 'gambar.jpg', 'Tradisi Sambatan, Wujud Kearifan Lokal Gotong-royong Warga Desa Sidokare', NULL, NULL),
(35, 56, '2021-06-30 00:00:00', 'ktg_berita03', 'Hidup di lingkungan pedesaan mengajarkan kita untuk dekat dengan alam dan sesama manusia. Banyak pelajaran yang bisa dipetik dari interaksi sosial sehari-hari di masyarakat.\r\n\r\nTradisi “sambatan” salah satunya. Tradisi yang satu ini menunjukkan rasa empati dan kepedulian sosial masyarakat di lingkungan pedesaan masih tinggi. Sambatan adalah istilah yang biasa digunakan masyarakat desa untuk mendirikan atau memperbaiki rumah warga secara gotong-royong.\r\n\r\nSemangat gotong royong ini terus dilestarikan oleh warga Desa Sidokare Kec. Rejoso - Nganjuk. Masyarakat Desa Sidokare mengedepankan semangat gotong royong untuk menciptakan masyarakat yang guyub dan rukun. \r\n\r\nWarga Desa Sidokare melaksanakan budaya \"sambatan\". Budaya gotong royong adat jawa dalam membangun rumah tanpa dihitung upah.  \r\n\r\nAdalah kediaman Bapak Jono, yang dikerjakan secara sambatan oleh warga. Sekitar 10-an warga bergerak melakukan \"Sambatan\". Sambatan itu sendiri sudah dilakukan sekitar dua harian. \r\n\r\n\"Kalau di sini warganya kompak, Kalau punya kegiatan kita bergotong-royong, termasuk sambatan ini. Siapa saja yang punya hajat kita kompak,\" kata Jono. \r\n\r\nBudaya sambatan sendiri merupakan adat istiadat jawa, yang mengikuti sambatan tidak dihitung upah seperti pekerja pada umumnya, hanya diberi makan siang dan sarapan. \r\n\r\nJono menjelaskan, biasanya sambatan diikuti puluhan orang dan tidak diberi imbalan. Dia menjelaskan warga yang melakukan sambatan tidak mengharapkan imbalan sama sekali. ', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/f3983b128186471767687f686310bb64.jpg', 'https://i.ibb.co/c8TS5TZ/IMG20210528143947-BURST013.jpg', 'Tradisi Sambatan, Wujud Kearifan Lokal Gotong-royong Warga Desa Sidokare', NULL, NULL),
(41, 54, '2021-10-12 08:38:18', 'ktg_berita04', 'Kurang lebih 650 orang warga masyarakat Desa Sidokare Kec. Rejoso Kab. Nganjuk melaksanakan Vaksin di Balai Desa hari ini Selasa (12/10/2021).\r\n\r\nMereka datang guna mendapatkan suntikan vaksinasi agar membentuk kekebalan diri dan kekebalan kelompok.\r\n\r\nKepala Desa Sidokare Imam Masyhuri mengaku lega pencapaian cakupan vaksinasi hari ini lebih baik dari jumlah sebelumnya.\r\n\r\n\"Alhamdulillah warga semakin sadar, dan mau meluangkan waktunya untuk melaksanakan Vaksin\", ujarnya.\r\n\r\nMereka yang telah Vaksin, katanya, akan mendapatkan setifikat vaksinasi yang bisa diunduh di aplikasi pedulilindungi.\r\n\r\nSehingga kalau bepergian keluar daerah tidak ketar ketir dengan penyekatan dan razia di sejumlah kabupaten.\r\n\r\n\"Satgas Covid-19 ada yang menggelar razia kartu atau sertifikat vaksinasi Covid-19. Sasarannya pengendara kendaraan bermotor. Kalau punya sertifikat, aman kan\", ujarnya.\r\n\r\nMeskipun demikian, beliau ungkapkan bahwa keberadaan vaksinasi sejatinya bukan diniati untuk tujuan aman dari razia, melainkan untuk melindungi diri dan menyumbang kekebalan kelompok sosial di sebuah desa.\r\n\r\n\"Kalau dalam keluarga atau desa mayoritas bervaksin, maka aman untuk keluarga maupun warga desa lainnya, terutama yang rentan. Syukur kalau semua warga sadar bervaksin.\"\r\n\r\n', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/1a70b0e326a77037572b80a1ff60a1ef.jpg', 'https://imagizer.imageshack.com/img923/1050/geDzNf.jpg', 'Pelaksanaan Vaksinasi Atrazeneca Dosis 2 Desa Sidokare', NULL, NULL),
(42, 56, '2021-02-06 00:00:00', 'ktg_berita04', 'Anggaran operasional pelayanan informasi bersumber dari APBDes Desa Sidokare tertuang pada Bidang Perhubungan, Komunikasi dan Informasi dengan kegiatan Penyelenggaraan Informasi Publik Desa.\r\n\r\n', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/ad4f4989dfd64fd0deaf5cb6850195f2.jpg', 'gambar.jpg', 'Penganggaran Pengelolaan Layanan Infromasi Publik', NULL, NULL),
(43, 56, '2021-01-22 00:00:00', 'ktg_berita04', 'Untuk mewujudkan pemerintahan yang baik dan untuk membangun kepercayaan masyarakat terhadap pelayanan publik yang dilakukan Pemerintah Desa Sidokare, perlu dilakukan penataan pelayanan di antaranya membangun fasilitas kepada masyarakat yang bisa melaporkan langsung akan semua tindakan pejabat publik dalam menjalankan tugas dan fungsinya di Pemerintah Desa Sidokare jika terjadi dugaan pelanggaran.\r\n\r\nPemerintah Desa Sidokare dalam hal memberikan pelayanan menjadi tolok ukur yang dipergunakan sebagai pedoman penyelenggaraan pelayanan dan acuan penilaian kualitas pelayanan sebagai kewajiban dan janji Penyelenggara kepada masyarakat dalam rangka pelayanan yang berkualitas, cepat, mudah, terjangkau, dan terukur.\r\n\r\nInformasi tentang tata cara pengaduan penyalahgunaan wewenang atau pelanggaran yang dilakukan oleh pejabat badan publik maupun pihak yang mendapatkan izin atau perjanjian kerja dari badan publik yang bersangkutan  dapat dilakukan sebagai berikut :\r\n\r\nMasyarakat dapat melakukan pengaduan melalui media online/social seperti Facebook, Twitter, Instagram, WhatsApp dan email Tim Pengelola Informasi Publik.\r\nMasyarakat dapat melakukan pengaduan melalui SMS atau WA di nomor 058331154 atau langsung ke nomor Hp perangkat desa yang tertera di menu Profile Desa pada Website.\r\nMasyarakat dapat melakukan pengaduan melalui email PPID Kota Magelang Desa Sidokare, sidokare331154@gmail.com.\r\nAtau bisa langsung dating ke Kantor Desa Sidokare / Sekretariat PPID.', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/a11a094ee8b14767618c140859826d94.jpg', 'gambar.jpg', 'Tata Cara Pengaduan Penyalahgunaan Wewenang Pejabat Badan Publik', NULL, NULL),
(44, 56, '2021-01-04 00:00:00', 'ktg_berita04', 'Mengantisipasi pengaruh paham radikalisme Babinkamtibmas desa Sidokare Polsek Rejoso  melaksanakan giat dialogis dengan warga.\r\n\r\nHal ini terlihat saat  Babinkamtibmas giat sambang kunjung di desa binaan dan bertemu dengan warga di warung kopi milik Saudara PARMIN di pertigaan jalan Sidokare kecamatan Rejoso , sambil minum kopi Babinkamtibmas AIPTU GATHOT SUPRIYANTO menyampaikan bahwa meningkatkan rasa persatuan dan kesatuan bangsa merupakan dasar awal kita agar tidak mudah terprovokasi oleh faham radikalisme.\r\n\r\nDalam kesempatan itu pula Babinkamtibmas juga memberikan himbauan kepada Masyarakat agar tidak ikut – ikutan atau terjebak dalam paham-paham yang di sampaikan oleh orang atau kelompok- kelompok radikal. Karena tujuan mereka adalah untuk memecah persatuan dan kesatuan bangsa.\r\n\r\nDi tempat lain Imam Masyhuri, S.Pd selaku kepala desa mengatakan \"Saya harap kepada warga masyarakat sidokare untuk tidak mudah terprovokasi terhadap paham radikalisme dan berita – berita Hoax” Ujarnya.', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/2f335b01152bc227055b503980eb19ec.jpg', 'gambar.jpg', 'Cegah Faham Radikalisme Babinkamtibmas Dialogis dengan Warga\r\n', NULL, NULL),
(45, 56, '2020-09-11 00:00:00', 'ktg_berita04', 'Salah satu kegiatan posyandu adalah pemberian imunisasi guna meningkatkan kekebalan tubuh terhadap segala virus atau bakteri penyakit yang bisa menyerang daya tahan tubuh balita dan lansia, dan itu pulalah yang dilakukan oleh bidan dan perawat Desa Sidokare Kecamatan Rejoso Kabupaten Nganjuk Jawa Timur pada saat pelaksanaan kegiatan posyandu, kegiatan posyandu inipun rutin dilaksanakan tiap bulan dengan dibagi menjadi beberapa kelompok.\r\n\r\nKegiatan posyandu di Desa Sidokare melibatkan masyarakat dan kader-kader yang telah di bentuk karena posyandu adalah wadah pelayanan kesehatan yang di lakukan oleh, dari, dan untuk masyarakat dengan tujuan meningkatkan kesehatan ibu bayi, balita dan para lansia.\r\n\r\nErtantri Ika, A.Md.Keb, bidan Desa Sidokare di sela-sela kegiatan posyandu menjelaskan tentang pentingnya posyandu bagi masyarakat terutama bagi ibu hamil, balita, dan lansia berikut ini penjelasannya.\r\n\r\n\"Setidaknya ada lima manfaat posyandu bagi masyarakat yaitu : 1. Penimbangan berat badan secara rutin tiap bulan yang di catat dibuku Kartu Ibu dan Anak (KIA) atau Kartu Menuju Sehat (KMS), 2. Mendapatkan kapsul vitamin A secara gratis untuk ibu dan bayinya, serta tablet penambah zat besi untuk para ibu setelah melahirkan, 3. Tumbuh kembang anak terpantau dengan baik, 4. Interaksi langsung dengan kader kesehatan, di posyandu inipun disertai kegiatan penyuluhan kesehatan dari petugas puskesmas kepada masyarakat, 5. Bisa berbagi pengalaman dengan sesama anggota posyandu\", ujar bidan yang telah menetap puluhan tahun di desa ini.', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/4bbd18c52f746f4f0cfdeaa627be48b8.jpg', 'gambar.jpg', 'Antusias Masyarakat Sidokare Datang ke Posyandu', NULL, NULL),
(51, 53, '2020-03-22 08:39:26', 'ktg_berita05', 'Pemerintahan Desa Sidokare, Kec. Rejoso, Kab.  dibawah kendali Kades Imam  terus melakukan pembenahan diri untuk memacu kinerjanya demi peningkatan produktivitas.\r\n\r\nSalah satu alternatif untuk mengangkat citra desa maka Pemerintah Desa Sidokare  beserta jajarannya bekerja keras untuk menggali, mengangkat, mengelola dan mengembangkan semua potensi desa yang ada demi kemajuan desa dan kemakmuran masyarakat desa.\r\n\r\nPemerintah Desa Sidokare  sudah membangun komitmen untuk bekerja cerdas dan bekerja keras. Semua pihak yang berkompeten dibidangnya masing-masing dirangkul dan diajak untuk membangun demi kemajuan desa.\r\n\r\nKarena menurut Pemerintah Desa Sidokare, bahwa keberhasilan dan kemajuan desa itu terwujud karena semua elemen desa bersatu padu. Dan nilai-nilai luhur gotong-royong dan bermusyawarah untuk bermufakat selalu dijunjung tinggi di kehidupan sosial sehari-hari.\r\n\r\nSalah satu strategi untuk memajukan desanya, Pemerintah Desa Sidokare saat ini berusaha memprioritaskan pengelolaan dan pengembangan BUMDes lebih optimal lagi. Dan saat ini telah dibentuk pengurus unit usaha BUMDes.\r\n\r\nAdapun unit usaha yang telah terbentuk antara lain : Pembuatan Sabun Muka dan Sabun Cair (Cuci Piring) dan juga berangan-angan membuat e-warung serta cuci motro. Dan untuk tahun depan akan dikembangkan dengan unit usaha penyediaan alat-alat ATK Kantor seperti fotocopy dll.\r\n\r\nPemerintah Desa Sidokare menjelaskan kinerja unit usaha BUMDesnya yang antara lain kedpan bisa menyediakan kebutuhan masyarakat sekitarnya. Pemerintah Desa Sidokare  berharap kelak BUMDes bisa menjadi roda penggerak ekonomi yang ada di Desa Sidokare.', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/20e17118ecf404f7b8ad8b2e1376ad2a.jpg', 'gambar.jpg', 'Bumdes Sidokare Tingkatkan Kinerja Untuk Optimalkan Produktivitas', NULL, NULL),
(52, 53, '2020-03-15 00:00:00', 'ktg_berita05', 'Kata BUMDes tentunya sudah tak asing lagi dalam pemerintahan suatu desa. BUMDes merupakan singkatan dari Badan Usaha Milik Desa yang dikelola oleh pemerintah desa dan berbadan hukum. Pemerintah desa dapat mendirikan BUMDes sesuai dengan kebutuhan dan potensi desanya masing-masing.\r\n\r\nTak terkecuali adalah Desa Sidokare juga telah mendirikan BUMDes yang terus dikembangkan dan dijalankan sesuai peraturan desa. Guna tingkatkan manajemen dan kinerja pemerintah Desa Sidokare mendatangkan Universitas Negeri Surabaya dalam hal ini Tim Dosen untuk memberikan pelatihan wirausaha kepada masyarakat pada November 2019.\r\n\r\nPelatihan diadakan di Balai Desa Sidokare dihadiri langsung oleh Kades Sidokare Imam Masyhuri, S.Pd, tim Dosen Unesa dan para ibu-ibu kader desa.\r\n\r\nMateri pelatihan wirausaha tersebut adalah pembuatan sabun cuci piring, sabun wajah, dan pembuatan bawang goreng kriuk. Ibu-ibu kader desa begitu semangat dan antusias sepanjang proses pelatihan berjalan. Mereka memperhatikan arahab Dosen dan mempelajari kemudian mempraktekkan secara langsung. Dan alhasil mereka pun mampu menciptakan produk-produk yang tentunya sangat bermanfaat.\r\n\r\nDiharapkan dengan adanya pelatihan wirausaha tersebut dapat meningkatkan perekonomian serta kreativitas masyarakat Desa Sidokare melalui BUMDes yang semakin berkembang dan berinovasi.\r\n\r\n', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/e8308915606c3e12845b280da3835a08.jpg', 'gambar.jpg', 'Tingkatkan Kreativitas Dan Ekonomi Masyarakat Sidokare, UNESA Berikan Pelatihan Wirausaha\r\n', NULL, NULL),
(61, 53, '2020-10-07 08:40:21', 'ktg_berita06', 'Komitmen Kepala Desa Sidokare untuk menuntaskan stunting di desanya bukan isapan jempol. Ditenah pandemi Kader Posyandu turun ke Posyandu guna memberikan makanan tambahan bagi Balita. \r\n\r\nMereka turun ke Posyandu mulai tanggal 7, 8, 9, 10 disetiap bulannya. Disana puluhan anak Balita berkumpul menunggu mendapatkan PMT peningkatan gizi.\r\n\r\nKetua Tim Penggerak PKK Desa Sidokare mengaku senang dapat menjumpai puluhan Balita di seluruh desa binaannya. Balita itu menurutnya harus mendapatkan makanan bergizi untuk tumbuh kembang fisik dan mentalnya.\r\n\r\n\"Anak Balita Sidokare harus sehat dan bergizi dengan PMT. Karena di tangan mereka harapan masa depan desa\", ujarnya disambut semangat kader Posyandu yang hadir.\r\n\r\n\"Ini hanya contoh makanan bergizi untuk tuntaskan stunting. Tidak mungkin tiap hari makanan bergizi ini diberikan desa. Maka gunakan potensi bahan makanan bergizi sederhana yang ada di pekarangan keluarga untuk menyehatkan anak Balita kita\", tambahnya sambil menyerahkan makanan tambahan yang didanai oleh Dana Desa (DD) Desa Sidokare Tahun Anggaran 2020.\r\n\r\nIa juga menyampaikan terima kasih kepada Kader Posyandu yang terus mengawal Balita dan Ibu Hamil serta Lansia keluar dari derita hidupnya.\r\n\r\n\"Kita bersiap terus untuk mengenyahkan Stunting di tahun ini. Sehingga tahun depan kita memasuki tahapan baru yaitu PMT pemulihan\", pungkasnya diantara kerumunan ibu-ibu Lansia dan Kader Posyandu yang tampak sibuk melaksanakan tugasnya.', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/a549822677abb9eac0bae56602a5a6f3.jpg', 'gambar.jpg', 'Pemdes Sidokare Bersama Kader Posyandu Menuju Bebas Stunting\r\n', NULL, NULL),
(62, 55, '2020-05-21 00:00:00', 'ktg_berita06', 'Sejumlah kader Posyandu Desa Sidokare, Kecamatan Rejoso, berjibaku selama sekitar 2 jam secara “door to door” membagikan puluhan paket pemberian makanan tambahan (PMT) kepada warga lanjut usia (lansia).\r\n\r\nDi tengah pandemi virus Corona (Covid-19) saat ini, sebagai wujud kepedulian terhadap perkembangan kondisi kesehatan para lansia warga Desa Sidokare, bersama sejumlah kader lansia, Ketua PKK Desa Sidokare Ny Farida memimpin pelaksanaan pembagian PMT, yang kali ini dilakukan dengan mendatangi langsung satu persatu ke rumah para lansia dan balita tersebut.\r\n\r\n“Menindaklanjuti imbauan pemerintah sesuai protokol kesehatan untuk mencegah sekaligus memutus mata rantai penyebaran virus Corona, maka kami bersama sejumlah kader lansia dan kader balita berbagi tugas dan menyebar untuk membagikan paket PMT tersebut ke masing-masing rumah” ujar Farida, Kamis (21/5/2020).\r\n\r\nBeberapa hari sebelum pelaksanaan pembagian puluhan paket PMT ini, Farida menggelar rapat koordinasi (rakor) dengan sistem dalam jejaring (daring) melalui WhatsApp Group (WAG).\r\n\r\n“Dalam pelaksanaan pembagian PMT tersebut, kami instruksikan kepada seluruh kader untuk wajib mengenakan baju seragam kader, memakai masker, dan selalu menerapkan jaga jarak (physical distancing) saat menemui dan menyerahkan langsung PMT tersebut kepada para lansia” jelas Farida, seraya mengapresiasi kinerja para kader yang selalu kompak, guyub, dan solid.\r\n\r\n', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/e85a8e69603679c44a90bd2929431632.jpg', 'gambar.jpg', 'Kader Lansis Desa Sidokare Bagikan PMT Door To Door Ditengah Pandemi\r\n', NULL, NULL),
(63, 55, '2020-05-03 00:00:00', 'ktg_berita06', 'Di tengah pandemi Covid-19, sejumlah orangtua khawatir untuk melaksanakan imunisasi bagi anaknya. Jadwal pemberian imunisasi pun menjadi terganggu. Padahal, pemberian imunisasi harus tetap dilaksanakan untuk mencegah penularan berbagai penyakit.\r\n\r\nBidan Desa Sidokare Ny. Ertrantri Ika mengatakan, imunisasi harus tetap dilaksanakan sesuai jadwal yang telah ditentukan meski di masa pandemi saat ini. Jika tidak dilakukan, anak akan terancam tertular infeksi yang seharusya bisa dicegah dengan imunisasi.\r\n\r\n”Cakupan imunisasi yang rendah bisa menyebabkan terjadinya KLB (kejadian luar biasa) di satu wilayah. Dikhawatirkan, jika imunisasi tidak berjalan, bisa menjadi pandemi kedua setelah pandemi Covid-19. Indonesia masih punya beban penyakit yang cukup besar, misalnya campak, yang seharusnya bisa dicegah dengan vaksinasi ini,” tuturnya.\r\n\r\nMeski jadwal imunisasi harus tetap dijalankan, Tantri mengatakan, orangtua dan petugas kesehatan harus tetap memperhatikan protokol kesehatan untuk mencegah risiko penularan Covid-19.\r\n\r\nSelain itu, pastikan fasilitas kesehatan yang melayani imunisasi dipisahkan dari layanan kesehatan lain. Pendamping anak yang diimunisasi pun cukup satu orang saja sehingga tidak banyak orang yang berkerumun. Prinsip hidup bersih dan sehat juga harus dipraktikkan baik oleh petugas kesehatan maupun pengunjung.\r\n\r\n”Pelayanan imunisasi biasanya dilakukan di posyandu. Selama pandemi ini posyandu untuk sementara kita liburkan, dan pelaksanaan imunisasi kita buka di Balai Desa Sidokare tentunya dengan mematuhi aturan yang dianjurkan oleh pemerintah,” pungkas Tantri.\r\n\r\n ', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/bc90e78cc26a957f051c10e455b10dc1.jpg', 'gambar.jpg', 'Imunisasi ditengah Pandemi.\r\n', NULL, NULL),
(71, 55, '2020-10-31 08:41:18', 'ktg_berita07', 'Bawang merah merupakan salah satu hasil komoditas pertanian yang bisa anda budidayakan pada segala musim, itu berarti bahwa anda bisa menanam tanaman bawang merah tanpa harus memperkirakan musim karena memang tanaman ini bisa tumbuh pada musim kemarau maupun juga musim penghujan.\r\n\r\nNamun, memang untuk menamam bawang merah pada setiap musimg merupakan tantangan tersendiri bagi para petani karena memang memiliki resiko yang berbeda jika dibandingkan dengan menanam tanaman jenis lainnya.\r\n\r\nMaka dari itu, anda sebagai petani seharusnya memang harus memiliki pengetahuan yang lebih tentang bagaimana cara menanam serta bagaimana cara merawat tanaman bawang merah di musim hujan maupun di musim kemarau sehingga anda bisa mendapatkan hasil dari tanaman umbi ini dengan kualitas terbaik sehingga harga yang anda dapatkan pun juga lumayan lebih tinggi.\r\n\r\nMenanam tanaman bawang merah pada musim hujan memiliki resiko yang lebih tinggi dibandingkan dengan menanam pada musim kemarau.\r\nJika anda menanam tanaman bawang merah pada musim penghujan tentunya akan lebih beresiko terserang hama maupun penyakit yang bisa membuat tanaman anda menjadi berkurang kualitasnya atau bahkan bisa menyebabkannya tidak tumbuh sama sekali alias mati.\r\n\r\nCara merawat tanaman bawang merah di musim hujan.\r\n\r\nHal pertama yang harus anda perhatikan adalah berkaitan dengan bedengan yang berfungsi untuk mengalirkan air. Kami menyarankan anda untuk mengusahakan bedengan yang digunakan untuk mengalirkan air tadi harus setengah dari tinggi bedengan anda dan jangan sampai jaraknya terlalu berlebih. Jika anda sudah bisa menerapkan cara ini maka selanjutnya anda bisa membenamkan 2 /3 bagiannya namun jangan sampai terlalu dalam karena jika anda menaruhnya terlalu dalam maka akan mengakibatkan bibit bawang merah tersebut akan tertimbun oleh tanah dan kemudian akan membusuk atau mungkin akan menghambat pertumbuhan bibit bawang merah yang anda tanam.\r\nHal yang kedua adalah anda harus memperhatikan jarak tanam bawang merah. Kami menyarankan untuk memberikan jarak kurang lebih 15 x 15 cm.\r\nHal yang ketiga adalah memperhatikan masalah penyemprotan. Tanaman bawang merah biasanya akan dilakukan penyemprotan dengan menggunakan herbisida sebelum dilakukan penanaman atau mungkin sehari sebelum dilakukan penanaman. Anda bisa menggunakan herbisida yang mengandung zat Oksifluerfen dengan dosis dengan dosis kurang lebih sebesar 25 sampai 30 cc untuk setiap 17 liternya.\r\nSelanjutnya yang harus anda lakukan adalah dengan melakukan pengecekan secara rutin pertumbuhan gulma yang selanjutnya anda harus melakukan pemupukan setelah penyiagaan.\r\nHal lain yang tidak kalah penting berkaitan dengan masalah pemupukan adalah anda harus memberikan pupuk pada lubang tanam, meskipun begitu jarak yang anda berikan jarak terlalu dekat dengan pangkal batang.\r\nAnda harus memberikan pupuk kepada tanaman bawang merah pada usia sekitar 7 hari atau memiliki tinggi daun 4 cm. Anda bisa menggunakan campuran NPK 210 kg /ha dan juga KCL 150 kg /ha serta menggunakan furadan 7 hingga 10 / ha.\r\nPupuk kedua anda berikan ketika tanaman bawang merah berusia sekitar 21 hari. Adapun pupuk yang digunakan adalah campuran dari NPK, KCL dan ZKplus dengan takaran sebanyak 175 kg/ha untuk NPK, sementara KCL 100 kg/ha dan ZKplus sebanyak adalah sebesar 210 kg /ha.\r\nPupuk yang ketiga dan yang terkahir adalah diberikan ketika tanaman berusia sekitar 28 hari dengan menggunakan campuran pupuk NPK 70 kg/ha dan juga sebanyak 240 kg/ha untuk ZKplus.', 'https://rejoso.nganjukkab.go.id/desa/upload_file/news_image/734911606af7e8f09812c52682537f81.jpg', 'gambar.jpg', '8 Cara Merawat Tanaman Bawang Merah di Musim Hujan', NULL, NULL),
(72, 53, '2020-08-14 00:00:00', 'ktg_berita07', 'Para petani bawang merah di Desa Sidokare mereguk keuntungan yang besar. Jika biasanya harga brambang selalu anjlok saat musim panen, hal itu tak terjadi Agustus ini. Harga jual komoditas andalan petani sidokare ini tetap tinggi akibat tingginya permintaan dari luar daerah.\r\n\r\nHarga brambang di tingkat petani sebesar Rp 20 ribu per kilogram. Sedangkan untuk bibit mencapai Rp 60 ribu per kilogramnya. “Alhamdulillah harganya masih lumayan (tinggi, Red),” ujar Daman, 65, petani yang sudah tidak muda lagi itu.\r\n\r\nPria yang kemarin memanen bawang merah di sawah lor omah Desa Sidokare, Rejoso itu menuturkan, bawang merah yang dipanen bukanlah jenis bawang super. Tetapi, dia mengaku senang karena harga jualnya tetap tinggi. \r\n\r\nPemilik tanaman bawang merah seluas 250 ru ini berharap harga akan tetap tinggi hingga akhir masa panen.\r\n\r\nTerpisah, Kepala Desa Sidokare Imam Masyhuri, S.Pd yang mengaku sedikit terkejut. Sebab, biasanya, harga brambang cenderung turun saat panen raya. Paling tinggi hanya sekitar Rp 12 ribu sampai Rp 13 ribu per kilogram. Adapun bawang dengan kua­li­tas super hanya sekitar Rp 17 ribu.\r\n\r\nTetapi, Agustus ini bu­kan bawang super saja yang ditawar Rp 20 ribu per kilo­gram. Melain­kan juga umbi dengan kualitas di bawahnya. “Harga itu tinggi. Mungkin ini re­zekinya petani,” terangnya.\r\n\r\nImam (kades) menyebut banyak peda­gang asal Brebes, Jawa Tengah hanya mencari barang ke Ngan­juk. Sebab, hingga minggu kedua Agustus salah satu sentra bawang merah di Jateng itu masih belum panen raya. \r\n\r\nKondisi tersebut menurut Imam (kades) jarang terjadi. Biasanya, musim panen petani di Brebes dan Nganjuk hampir bersamaan. Sebab, cuaca dua daerah ini tak jauh berbeda. “Biasanya harga bawang Nganjuk anjlok karena Brebes panen lebih dulu. Stok melimpah,” tegasnya. \r\n\r\nDengan masih sedikitnya daerah yang panen, Imam (kades) memprediksi harga tinggi bawang merah ini masih akan bertahan hingga beberapa hari ke depan. Sebab, permintaan, terutama dari luar daerah masih cenderung banyak. “Stok bawang merah untuk lokal Sidokare masih tetap terpenuhi,” imbuhnya. \r\n\r\n', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/a1c560066487a8d2fa2da61c72758991.jpg', 'gambar.jpg', 'Harga Brambang Tinggi, Petani Berseri', NULL, NULL),
(73, 55, '2020-08-14 00:00:00', 'ktg_berita07', 'Tradisi adat budaya luhur tetap dilakukan oleh masyarakat, seperti yang dilaksanakan di Desa Sidokare Kec. Rejoso - Nganjuk, wujud syukur bersih desa di tengah covid 19 tak melunturkan tradisi leluhur dan tetap dilakukan dengan standart protokol kesehatan Jum\'at (14/08/20).\r\n\r\nSeremonial tumpeng ini memang berbeda dengan tahun lalu, karena ini di massa pandemi semua harus patuh dengan protokol kesehatan, demikian di katakan Imam Masyhuri, S.Pd selaku kepala desa.\r\n\r\n\"Ini adalah adat budaya leluhur yang harus kita pertahankan, namun tetap mematuhi protokol kesehatan, kita generasi sekarang wajib hukum untuk melestarikannya,\" kata Kades.\r\n\r\nKegiatan dilaksanakan seperti bisanya, dimulai kirim do’a dan slametan dari makam dilanjut di punden, masjid dan yang terakhir di Balai Desa Sidokare, disamping itu kegiatan ini harus tetap mematuhi protokol kesehatan yang ada agar jangan sampai ritual bersih desa yang dimaknai sebagai ungkapan rasa syukur, dan berdoa memohon kepada yang Khaliq agar wabah corona segera hilang, justru menjadi kluster baru.\r\n\r\n\"Kami segenap masyarakat memohon kepada Tuhan Yang Maha Esa untuk keselamatan warga semuanya, supaya terlindung dari semua balak termasuk pandemi corona covid -19 segera sirna,\" ungkapnya.\r\n\r\nAcara selamatan bersih desa di pemerintahan Desa Sidokare Kec. Rejoso Kab. Nganjuk yang mengundang para tokoh masyarakat mulai RT dan RW tak ketinggalan Kepala Desa juga menyisipkan pesan sosialisasi ditengah pandemi covid 19, pesannya agar masyarakat tetap patuh dan disiplin menerapkan protokol kesehatan menuju normal baru atau tatanan kehidupan yang baru.\r\n\r\n\"Kami mengajarkan bagaimana menjalankan pola hidup bersih, pakai masker, cuci tangan pakai sabun di air yang mengalir, kami juga minta kepada masyarakat yang merasakan suhu tubuh melebihi ambang normal segera menginformasikan pada pihak desa,\" lanjutnya.', 'http://rejoso.nganjukkab.go.id/desa/upload_file/news_image/8066fcad072b16c9fa4689d1ecc22bd3.jpg', 'gambar.jpg', 'Melestarikan Adat Budaya Bersih Desa Sidokare Ditengah Pandemi Covid-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori` varchar(30) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `nama_kategori`) VALUES
('ktg_berita01', 'BUM Desa'),
('ktg_berita02', 'PKK'),
('ktg_berita03', 'Pemerintahan Desa'),
('ktg_berita04', 'Potensi Desa'),
('ktg_berita05', 'Pembangunan Desa'),
('ktg_berita06', 'Pemberdayaan Masyarakat'),
('ktg_berita07', 'Pembinaan Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `keberatan_aspirasi`
--

CREATE TABLE `keberatan_aspirasi` (
  `id_keberatan_aspirasi` int(100) NOT NULL,
  `id_akun` int(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `alasan` varchar(1000) NOT NULL,
  `catatan_tambahan` varchar(1000) NOT NULL,
  `id_aspirasi` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keberatan_keluhan`
--

CREATE TABLE `keberatan_keluhan` (
  `id_keberatan_keluhan` int(3) NOT NULL,
  `id_akun` int(3) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `alasan` varchar(1000) NOT NULL,
  `catatan_tambahan` varchar(1000) NOT NULL,
  `id_keluhan` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keberatan_keluhan`
--

INSERT INTO `keberatan_keluhan` (`id_keberatan_keluhan`, `id_akun`, `alamat`, `alasan`, `catatan_tambahan`, `id_keluhan`, `updated_at`, `created_at`) VALUES
(1, 54, 'Tubanaaaa', 'Cyna banget ga seh', 'kenapa kok gini dek', 'PK-000001', '2023-05-14 21:54:29', '2023-05-15 04:54:29'),
(2, 54, 'Tubanaaaa', 'Cyna banget ga seh', 'kenapa kok gini dek', 'PK-000001', '2023-05-14 21:55:28', '2023-05-15 04:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `keberatan_ppid`
--

CREATE TABLE `keberatan_ppid` (
  `id_keberatan_ppid` int(3) NOT NULL,
  `id_akun` int(3) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `alasan` varchar(1000) NOT NULL,
  `catatan_tambahan` varchar(1000) NOT NULL,
  `id` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keberatan_ppid`
--

INSERT INTO `keberatan_ppid` (`id_keberatan_ppid`, `id_akun`, `alamat`, `alasan`, `catatan_tambahan`, `id`, `updated_at`, `created_at`) VALUES
(9, 54, 'Jombangggg', 'Biaya yang dikenakan tidak wajar', 'kok mahal skli', '12', '2023-05-14 18:33:52', '2023-05-14 18:33:52'),
(10, 54, 'Dusun Kepatihan Desa bendungan', 'Permintaan informasi tidak ditanggapi', 'waduh', '12', '2023-05-18 18:46:06', '2023-05-18 18:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_berita`
--

CREATE TABLE `komentar_berita` (
  `id_komentar` varchar(100) NOT NULL,
  `id_akun` int(10) DEFAULT NULL,
  `id` int(10) DEFAULT NULL,
  `isi_komentar` varchar(100) DEFAULT NULL,
  `waktu_berkomentar` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar_berita`
--

INSERT INTO `komentar_berita` (`id_komentar`, `id_akun`, `id`, `isi_komentar`, `waktu_berkomentar`) VALUES
('', 53, 11, 'Ini adalah komentar', '2023-04-11 11:28:12'),
('KOM-00002', 53, 11, 'Ini adalah komentar pertama pada berita pertama', '2023-04-11 11:29:55'),
('KOM-00004', 54, 34, 'yahahaha', '2023-04-11 11:28:12'),
('KOM-00005', 54, 11, 'halo dek', '2023-04-11 11:28:12');

--
-- Triggers `komentar_berita`
--
DELIMITER $$
CREATE TRIGGER `auto_increment_id_komentar` BEFORE INSERT ON `komentar_berita` FOR EACH ROW BEGIN 
    DECLARE new_id_komentar VARCHAR(100); 
    SET new_id_komentar = CONCAT('KOM-', LPAD((SELECT COUNT(*)+1 FROM komentar_berita), 5, '0')); 
    SET NEW.id_komentar = new_id_komentar; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_06_125553_create_surats_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_aspirasi`
--

CREATE TABLE `pengajuan_aspirasi` (
  `id_pengajuan_aspirasi` varchar(100) NOT NULL,
  `id_akun` int(10) NOT NULL,
  `judul_aspirasi` varchar(1000) DEFAULT NULL,
  `isi_aspirasi` varchar(1000) DEFAULT NULL,
  `upload_file_pendukung` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `doc_hasil_ppid` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_aspirasi`
--

INSERT INTO `pengajuan_aspirasi` (`id_pengajuan_aspirasi`, `id_akun`, `judul_aspirasi`, `isi_aspirasi`, `upload_file_pendukung`, `status`, `doc_hasil_ppid`) VALUES
('A1', 53, 'Peningkatan Keamanan Lingkungan', 'Saya berharap pihak desa dapat meningkatkan keamanan lingkungan sekitar, terutama malam hari', 'file.pdf', NULL, ''),
('A10', 54, 'Jembatan Gantung', 'Sebaiknya membangun jembatan Gantung agar anak anak sekolak SD kalau ingin bersekolah tidak melalui sungai , itu sangat berbahaya jika banjir', 'sampah_masyaraykat.jpg', 'diajukan', NULL),
('A11', 54, 'Kamar Mandi / WC Umum', 'Banyak Di Desa Sidokare pengunjung dari berbagai wilayah , terkadang orang orang tersebut ingin ke kamar mandi namun , tidak tau , tpi selain dibuat harus dirawat agar tetap bersih dan nyaman', NULL, 'diajukan', NULL),
('A2', 53, 'Permintaan Pembangunan Jalan', 'Kami masyarakat setempat meminta pihak desa untuk membangun jalan agar mudah diakses', 'file.docx', NULL, ''),
('A3', 53, 'Permintaan Penerangan Jalan', 'Saya berharap pihak desa dapat memasang penerangan jalan agar tidak gelap saat malam hari', NULL, NULL, ''),
('A4', 53, 'Permintaan Pembangunan Taman', 'Kami masyarakat setempat meminta pihak desa untuk membangun taman agar tempat bermain anak menjadi l', 'file.jpg', NULL, ''),
('A5', 53, 'Permintaan Pemasangan Wifi Gratis', 'Kami masyarakat setempat berharap pihak desa dapat memasang wifi gratis agar dapat terkoneksi dengan', NULL, NULL, ''),
('A6', 53, 'Pengaduan Sampah Menumpuk', 'Saya ingin mengadukan bahwa sampah menumpuk di depan rumah saya dan berharap bisa segera ditangani', NULL, NULL, ''),
('A7', 53, 'Permintaan Pemasangan CCTV', 'Kami masyarakat setempat meminta pihak desa untuk memasang CCTV agar lebih aman dan terjaga keamanan', NULL, NULL, ''),
('A8', 53, 'Permintaan Rehabilitasi Jalan', 'Kami masyarakat setempat meminta pihak desa untuk merehabilitasi jalan agar lebih mudah dilalui', 'file.doc', NULL, ''),
('A9', 53, 'Peningkatan Keamanan Lingkungan', 'Saya berharap pihak desa dapat meningkatkan keamanan lingkungan sekitar, terutama malam hari', 'file.pdf', NULL, '');

--
-- Triggers `pengajuan_aspirasi`
--
DELIMITER $$
CREATE TRIGGER `auto_increment_id_pengajuan_aspirasi` BEFORE INSERT ON `pengajuan_aspirasi` FOR EACH ROW BEGIN
    DECLARE last_id INT;
    SET last_id = (SELECT CAST(SUBSTRING(id_pengajuan_aspirasi, 2) AS UNSIGNED) FROM pengajuan_aspirasi ORDER BY CAST(SUBSTRING(id_pengajuan_aspirasi, 2) AS UNSIGNED) DESC LIMIT 1);
    IF last_id IS NULL THEN
        SET NEW.id_pengajuan_aspirasi = 'A1';
    ELSE
        SET NEW.id_pengajuan_aspirasi = CONCAT('A', last_id+1);
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_keluhan`
--

CREATE TABLE `pengajuan_keluhan` (
  `id_pengajuan_keluhan` varchar(100) NOT NULL,
  `id_akun` int(10) NOT NULL,
  `judul_laporan` varchar(100) DEFAULT NULL,
  `isi_laporan` varchar(1000) DEFAULT NULL,
  `asal_pelapor` varchar(100) DEFAULT NULL,
  `lokasi_kejadian` varchar(100) DEFAULT NULL,
  `kategori_laporan` varchar(100) DEFAULT NULL,
  `tanggal_kejadian` varchar(100) DEFAULT NULL,
  `upload_file_pendukung` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `RT` varchar(3) NOT NULL,
  `RW` varchar(3) NOT NULL,
  `doc_hasil_keluhan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_keluhan`
--

INSERT INTO `pengajuan_keluhan` (`id_pengajuan_keluhan`, `id_akun`, `judul_laporan`, `isi_laporan`, `asal_pelapor`, `lokasi_kejadian`, `kategori_laporan`, `tanggal_kejadian`, `upload_file_pendukung`, `status`, `RT`, `RW`, `doc_hasil_keluhan`) VALUES
('PK-000001', 54, 'Jalan Rusak', 'Banyuasin - Menparekraf Sandiaga Uno mengunjungi Desa Wisata Sungsang IV di Banyuasin, Sumsel. Di sa', 'Desa Sidokare', 'Desa Sidokare', 'PPID', '2023-05-15', NULL, 'revisi', '002', '001', ''),
('PK-000002', 54, 'Jalan Rusak', 'Jalan Rusak\', \'Banyuasin - Menparekraf Sandiaga Uno mengunjungi Desa Wisata Sungsang IV di Banyuasin, Sumsel. Di sana dia menyindir soal jalan rusak dan minta agar jangan sampai viral.\\r\\nDalam kunjungan ke desa yang berbatasan dengan Pulau Bangka itu, Sandi menyinggung jalan yang rusak. Dia meminta kepada Bupati Banyuasin Askolani untuk segera mengajukan proposal ke PUPR sebelum jalan itu viral, karena ada inpres baru membangun jalan daerah Rp 32 triliun DAN ada kaitannya dengan ECO Tourism dengan ekonomi.\\r\\n\\r\\n\\\"Jadi saya minta dengan Pak Bas bisa dipercepat pembangunan jalan ini dikolaborasikan dengan pemerintah pusat, atau boleh ke saya dan akan saya ajukan, karena ini sudah terpilih menjadi desa terbaik dunia yang akan kita perlombakan event-event internasional,\\\" ujarnya', 'Tuban', 'Tuban', 'PPID', '2023-05-15', NULL, NULL, '001', '002', '');

--
-- Triggers `pengajuan_keluhan`
--
DELIMITER $$
CREATE TRIGGER `tr_pengajuan_keluhan_insert` BEFORE INSERT ON `pengajuan_keluhan` FOR EACH ROW BEGIN
    SET @id_pengajuan_keluhan = (SELECT CONCAT('PK-', LPAD(COALESCE(SUBSTR(MAX(id_pengajuan_keluhan), 4), 0) + 1, 6, '0')) FROM pengajuan_keluhan);
    SET NEW.id_pengajuan_keluhan = @id_pengajuan_keluhan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_ppids`
--

CREATE TABLE `pengajuan_ppids` (
  `id` varchar(100) NOT NULL,
  `id_akun` int(20) NOT NULL,
  `nama_pelapor` varchar(100) DEFAULT NULL,
  `no_telfon` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `judul_laporan` varchar(100) DEFAULT NULL,
  `isi_laporan` varchar(10000) DEFAULT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `Alamat` varchar(250) DEFAULT NULL,
  `kategori_ppid` varchar(100) DEFAULT NULL,
  `upload_file_pendukung` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `RT` varchar(3) NOT NULL,
  `RW` varchar(3) NOT NULL,
  `doc_hasil_ppid` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_ppids`
--

INSERT INTO `pengajuan_ppids` (`id`, `id_akun`, `nama_pelapor`, `no_telfon`, `email`, `judul_laporan`, `isi_laporan`, `tujuan`, `Alamat`, `kategori_ppid`, `upload_file_pendukung`, `status`, `updated_at`, `created_at`, `RT`, `RW`, `doc_hasil_ppid`) VALUES
('01', 54, 'Della', '087124586868', 'Dellabaru@gmail.com', 'Jumlah Biaya Pembangunan Jembatan Desa', 'Ingin mengetahui rincian dari pembangunan jembatan di Desa , karena jembatan yang dibaut terlalu bagus untuk diterapkan di desa', '', 'Sidokare', 'Perorangan', '8582-19117-1-SM.pdf', 'diajukan', NULL, NULL, '003', '004', NULL),
('12', 54, 'Della', '032166699991', 'Ud_Sumber_maju@gmail.com', 'Data Penduduk Pemilik Kayu Jati', 'Ingin mengetahui data data penduduk yang mempunyai kayu jati di kebunnya , karena saya ingin membelinya untuk dibuat usaha.', '', 'Sidokare', 'Badan Usaha', 'MUHAMMAD SIDIQ NURCAHYA_Ti21.pdf', 'revisi', NULL, NULL, '005', '004', 'ppid677.pdf'),
('13', 54, 'Della', '087278748787', 'udmkmur@gmail.com', 'harga padi', 'mengetahui harga', '', 'Sidokare', 'Badan Hukum', '7823-22082-1-PB.pdf', 'diajukan', NULL, NULL, '005', '004', NULL),
('14', 54, 'Della', '087123456874', 'riyahana@gmail.com', 'mengapa pak laporan saya kok berbeda dari yang lain', 'Keuhan tentang laporan saya berbeda dengan lainnya bagaimana ini semua bisa terjadi pada saya pak', 'pokok kenek ndisek lah masbro', 'Sidokare', 'Perorangan', 'Subscripe YT.jpg', 'diajukan', NULL, NULL, '004', '004', NULL);

--
-- Triggers `pengajuan_ppids`
--
DELIMITER $$
CREATE TRIGGER `ai_ppid` BEFORE INSERT ON `pengajuan_ppids` FOR EACH ROW BEGIN
    DECLARE last_id INT;
    DECLARE new_id VARCHAR(100);
    SET last_id = (SELECT CAST(SUBSTRING(id, 2) AS UNSIGNED) FROM pengajuan_ppids ORDER BY id DESC LIMIT 1);
    IF last_id IS NULL THEN
        SET new_id = '01';
    ELSE
        SET new_id = CONCAT('1', last_id+1);
    END IF;
    WHILE EXISTS(SELECT id FROM pengajuan_ppids WHERE id = new_id) DO
        SET last_id = last_id + 1;
        SET new_id = CONCAT('1', last_id+1);
    END WHILE;
    SET NEW.id = new_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIK` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kusmoooooo', 'syailendrakusmayogi@gmail.com', NULL, '$2y$10$H3FtmiYEJ9/bLeDup/FyLOHDSRqSJWZRElTNgpLbgFpDTqTH6sueC', 'ZUUQ6TN97DKKjM6z7jXLjAgCxlLGucaCGywEIndfpNHHKoW3yDmSYZXhjhUA', '2023-03-25 00:59:19', '2023-04-14 00:05:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keberatan_aspirasi`
--
ALTER TABLE `keberatan_aspirasi`
  ADD PRIMARY KEY (`id_keberatan_aspirasi`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_aspirasi` (`id_aspirasi`);

--
-- Indexes for table `keberatan_keluhan`
--
ALTER TABLE `keberatan_keluhan`
  ADD PRIMARY KEY (`id_keberatan_keluhan`),
  ADD KEY `id_keluhan` (`id_keluhan`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `keberatan_ppid`
--
ALTER TABLE `keberatan_ppid`
  ADD PRIMARY KEY (`id_keberatan_ppid`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_ppid` (`id`);

--
-- Indexes for table `komentar_berita`
--
ALTER TABLE `komentar_berita`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_berita` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengajuan_aspirasi`
--
ALTER TABLE `pengajuan_aspirasi`
  ADD PRIMARY KEY (`id_pengajuan_aspirasi`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `pengajuan_keluhan`
--
ALTER TABLE `pengajuan_keluhan`
  ADD PRIMARY KEY (`id_pengajuan_keluhan`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `pengajuan_ppids`
--
ALTER TABLE `pengajuan_ppids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keberatan_aspirasi`
--
ALTER TABLE `keberatan_aspirasi`
  MODIFY `id_keberatan_aspirasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keberatan_keluhan`
--
ALTER TABLE `keberatan_keluhan`
  MODIFY `id_keberatan_keluhan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keberatan_ppid`
--
ALTER TABLE `keberatan_ppid`
  MODIFY `id_keberatan_ppid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_berita` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keberatan_aspirasi`
--
ALTER TABLE `keberatan_aspirasi`
  ADD CONSTRAINT `keberatan_aspirasi_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `keberatan_aspirasi_ibfk_2` FOREIGN KEY (`id_aspirasi`) REFERENCES `pengajuan_aspirasi` (`id_pengajuan_aspirasi`);

--
-- Constraints for table `keberatan_keluhan`
--
ALTER TABLE `keberatan_keluhan`
  ADD CONSTRAINT `keberatan_keluhan_ibfk_1` FOREIGN KEY (`id_keluhan`) REFERENCES `pengajuan_keluhan` (`id_pengajuan_keluhan`),
  ADD CONSTRAINT `keberatan_keluhan_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `keberatan_ppid`
--
ALTER TABLE `keberatan_ppid`
  ADD CONSTRAINT `keberatan_ppid_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `keberatan_ppid_ibfk_2` FOREIGN KEY (`id`) REFERENCES `pengajuan_ppids` (`id`);

--
-- Constraints for table `komentar_berita`
--
ALTER TABLE `komentar_berita`
  ADD CONSTRAINT `komentar_berita_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `komentar_berita_ibfk_2` FOREIGN KEY (`id`) REFERENCES `berita` (`id`);

--
-- Constraints for table `pengajuan_aspirasi`
--
ALTER TABLE `pengajuan_aspirasi`
  ADD CONSTRAINT `pengajuan_aspirasi_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `pengajuan_keluhan`
--
ALTER TABLE `pengajuan_keluhan`
  ADD CONSTRAINT `pengajuan_keluhan_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `pengajuan_ppids`
--
ALTER TABLE `pengajuan_ppids`
  ADD CONSTRAINT `pengajuan_ppids_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
