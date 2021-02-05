-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 03:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vikalonl_askbuz`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_packages`
--

CREATE TABLE `aboutus_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageAboutus1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraphAboutus1` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraphAboutus2` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus_packages`
--

INSERT INTO `aboutus_packages` (`id`, `title`, `imageAboutus1`, `paragraphAboutus1`, `paragraphAboutus2`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Tentang ASKBUZ dan TEAM', '1604678329.svg', 'Di era digital seperti sekarang ini, sangat mudah sekali untuk menemukan teknologi terkini setiap hari. Mulai dari bidang pendidikan, sosial dan ekonomi. Hampir setiap orang yang kita temui sehari-hari menggunakan teknologi sebagai kebutuhan yang tak tergantikan. Alih-alih kebutuhan sekunder, perangkat digital dan internet justru menjadi kebutuhan primer masyarakat modern saat ini. Belakangan ini, banyak juga wirausahawan muda yang kisah suksesnya telah \"meracuni\" sebagian besar anak muda, terutama sesama mahasiswa. Dari sekian banyak jenis bisnis, tentunya kita tidak asing lagi dengan istilah start up yang popularitasnya meningkat pesat belakangan ini.', 'AskBuz adalah platform berbasis web yang bertujuan untuk memberikan informasi dan konsultasi kepada mahasiswa yang ingin mengikuti acara PMW. Oleh karena itu, kami menyiapkan konsultan yang kompeten di bidangnya masing-masing, antara lain: (1) analisis bisnis yang mengidentifikasi model bisnis yang ingin dijalankan dengan pendekatan IT; (2) tampilan dalam menganalisis faktor internal dan eksternal yang mempengaruhi kenyamanan bisnis klien; (3) Pengembang dapat membantu merencanakan pengembangan model website baru sebagai upaya di masa depan. Selain jasa konsultasi, AskBuz juga memiliki layanan informasi terkini tentang PMW yang akan berlangsung karena bekerjasama dengan alumni yang lolos pendanaan PMW tahun sebelumnya', NULL, '2020-11-06 08:58:49', '2020-12-20 12:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `about_packages`
--

CREATE TABLE `about_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titleabout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraphabout` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageabout` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_packages`
--

INSERT INTO `about_packages` (`id`, `titleabout`, `paragraphabout`, `imageabout`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tentang Askbuz', 'Dunia terus bergerak menuju digitalisasi global, meninggalkan era konvensional yang terkikis oleh modernisasi massal. Kami percaya bahwa perubahan iklim dalam bisnis membawa perubahan besar dalam perubahan jalur ekonomi. Setiap orang memiliki banyak ide bisnis, tetapi hanya sedikit dari impian itu yang menjadi kenyataan. Askbuz Hadir untuk Menjadi Solusi Dan Mitra Bisnis Anda. Kami memberikan berbagai informasi dan berbagai jenis konsultasi bisnis sesuai dengan kondisi saat ini.', '1602975605.svg', NULL, '2020-10-17 16:00:05', '2020-12-20 08:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `article_packages`
--

CREATE TABLE `article_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titlearticle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragrapharticle` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagearticle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_packages`
--

INSERT INTO `article_packages` (`id`, `titlearticle`, `paragrapharticle`, `imagearticle`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Apasih yang kamu ketahui tentang PMW?', 'Program Mahasiswa Wirausaha (PMW) merupakan salah satu program Direktorat Jenderal Pendidikan Tinggi ( DIKTI) yang ditujukan kepada seluruh perguruan tinggi negeri dan beberapa perguruan tinggi swasta yang terseleksi .Suatu program khusus bagi para mahasiswa, yaitu Program Mahasiswa Wirausaha (PMW) telah diluncurkan oleh Pemerintah melalui Kementerian Pendidikan Nasional pada tahun 2009. Kebijakan ini dimaksudkan untuk memfasilitasi para mahasiswa yang mempunyai minat dan bakat kewirausahaan untuk memulai berwirausaha dengan basis ilmu pengetahuan, teknologi dan seni yang sedang dipelajarinya. Keberadaan program ini didukung oleh kenyataan bahwa sebagian besar lulusan Perguruan Tinggi adalah lebih sebagai pencari kerja daripada pencipta lapangan pekerjaan. Program ini memberikan bantuan bagi mahasiswa yang layak dalam bentuk dana yang dapat digunakan secara perorangan dan kelompok. Tulisan ini merupakan kajian terhadap kebijakan PMW ditinjau dari persepsi mahasiswa terhadap pentingnya PMW dan keberhasilan usaha wirausaha mahasiswa. Responden kajian ini adalah para mahasiswa penerima PMW di beberapa perguruan tinggi negeri dan swasta. Temuan kajian adalah bahwa program ini memiliki dampak penting, yaitu membuka wawasan, kemampuan dan sikap mahasiswa dalam bewirausaha,serta membuka lapangan kerja bagi masyarakat. Evaluasi lebih lanjut terhadap besarnya hibah bagi masingmasing mahasiswa dan alokasi dana bagi perguruan tinggi perlu dikaji dengan memperhitungkan jumlah total mahasiswa dan keberhasilan mahasiswa PMW pada tahun sebelumnya di masing-masing perguruan tinggi.', '1602982039.svg', NULL, '2020-10-17 17:47:19', '2020-10-17 19:01:31'),
(2, 'Kapan Pelaksanaan PMW?', 'Pada tahun 2016 ini PMW mulai diselenggarakan sedikit berbeda dengan tahun-tahun sebelumnya. Kalau pada tahun sebelumnya pelaksanaan PMW murni mengacu panduan yang dikeluarkan oleh DIKTI, maka pada tahun ini pelaksanaan PMW merupakan integrasi dari berbagai kegiatan kewirausahaan yang diselenggarakan oleh Direktorat Kemahasiswaan. Setelah peserta/kelompok usaha mengikuti berbagai kegiatan dan yang dinilai memenuhi syarat maka diberikan hibah modal usaha sesuai dengan jumlah proposal yang diajukan.', '1602982163.svg', NULL, '2020-10-17 17:49:23', '2020-10-17 17:49:23'),
(3, '5 langkah jadi finalis dalam PMW', '1) kelompok tertentu\r\ndalam masyarakat khususnya generasi muda pada\r\numumnya anak sekolah/mahasiswa, anak putus\r\nsekolah, dan calon wirausahawan; 2) kelompok\r\npengusaha yakni para pelaku ekonomi yang terdiri\r\ndari pengusaha mikro, kecil, menengah, dan koperasi;\r\ndan 3) kelompok Pembina, yang terdiri dari instansi\r\npemerintah terkait, organisasi sosial dan nonpemerintah, lembaga pendidikan, organisasi\r\npengusaha dan organisasi profesi. Adapun programprogram yang diusulkan untuk dilakukan pada saat\r\nitu meliputi antara lain pelatihan kewira-usahaan dan\r\nmanajemen usaha kecil, bimbingan dan konsultasi\r\nbisnis, magang dan studi banding, bantuan pemasaran dan promosi, pengembangan teknologi tepat guna,\r\nbantuan permodalan, dan pengembangan kerjasama\r\ndan kemitraan.', '1602982406.svg', NULL, '2020-10-17 17:53:26', '2020-10-17 17:53:26'),
(4, 'motivasi masyarakat untuk jadi pengusaha', 'Mayoritas responden menjawab lebih suka menjadi orang upahan alias pekerja daripada membuka usaha sendiri. Jajak pendapat tersebut sejalan dengan hasil Survei Tenaga Kerja Nasional 2001 hingga 2006, yang menyatakan bahwa profil tenaga kerja Indonesia memang dikuasai pekerja. Dari total pekerja 25 juta orang, jumlah yang menjadi pengusaha kurang dari seperlimanya. Terhadap pertanyaan dalam survey yang sama yaitu “mayoritas orang Indonesia ingin menjadi apa?” maka lebih dari 70% ingin menjadi pegawai negeri sipil (PNS). Yang menjawab ingin menjadi pengusaha hanya 20% saja. Angka ini jelas mencerminkan kondisi riil yang selama ini dirasakan.', '1602985667.jpg', NULL, '2020-10-17 18:00:53', '2020-10-17 18:59:21'),
(5, 'Kewirausahaan menurut Suryana', 'Kewirausahaan menurut Suryana\r\n(2006) merupakan suatu disiplin ilmu yang\r\nmemperlajari tentang nilai, kemampuan,dan perilaku\r\nseseorang dalam menghadapi tantangan hidup untuk\r\nmemperoleh peluang dengan berbagai resiko yang\r\nmungkin dihadapinya. Dalam kewirausahaan terdapat\r\nkompetensi inti yaitu kreativitas dan inovasi dalam\r\nrangka menciptakan nilai tambah untuk meraih\r\nkeunggulan denga berfokus pada pengembangan\r\npengetahuan dan keunikan. Keterampilan, pengetahuan, dan kemampuan merupakan kompetensi inti\r\nwirausaha untuk menciptakan daya saing khusus\r\nagar memiliki posisi tawar menawar yang kuat dalam\r\npersaingan. Jiwa kewirausahaan dapat dibentuk\r\nmelalui proses pembudayaan yang diintegrasikan\r\ndalam pembelajaran. Terdapat berbagai pandangan\r\ntentang karakteristik dan watak kewirausahaan.', '1602987704.jpg', NULL, '2020-10-17 19:21:44', '2020-10-17 19:22:16'),
(6, 'Kualitas PT dalam melahirkan sarjana', 'Lulusannya dianggap\r\ntidak mampu menjawab kebutuhan pasar karena\r\nbelum mampu berkreasi di dalam keterbatasan dan\r\nkurang berdaya juang di dalam tekanan. Mentalitas\r\nalumni perguruan tinggi lebih banyak yang pasif dan\r\nbertipe kuli yaitu hanya mengerjakan apa yang\r\ndiperintahkan atasan, minim kreativitas, dan mandul\r\ninisiatif. Lapangan kerja rata-rata hanya menyerap\r\n37% lulusan perguruan tinggi.\r\nDalam acara Rembuk Nasional Pendidikan 2008,\r\nDirjen Pendidikan Tinggi Departemen Pendidikan\r\nNasional mengangkat isu pengangguran yang terjadi\r\ntersebut. Diduga bahwa tingginya angka pengangguran disebabkan oleh berbagai faktor, di antaranya\r\nkompetensi keahlian tidak sesuai dengan kebutuhan\r\npasar tenaga kerja, lulusan program studi sudah\r\njenuh di masyarakat, atau tidak memiliki keahlian\r\napapun untuk bersaing di dunia kerja. Terungkap\r\nbahwa lulusan yang kurang bisa bersaing di dunia kerja\r\numumnya lulusan program studi ilmu-ilmu sosial.\r\n636\r\nJurnal Pendidikan dan Kebudayaan, Vol. 17, Nomor 6, Nopember 2011\r\nSementara itu, lulusan fakultas teknik banyak\r\ndibutuhkan, tetapi kompentensi keahlian lulusannya\r\nmasih kurang (Direktorat Jenderal Pendidikan Tinggi,\r\n2009a).', '1602987914.jpg', NULL, '2020-10-17 19:25:14', '2020-10-17 19:25:14'),
(7, 'Setidaknya ada 6 tujuan PMW', 'Setidaknya ada enam\r\ntujuan utama PMW. Pertama menumbuhkan motivasi\r\nberwirausaha di kalangan mahasiswa. Kedua,\r\nmembangun sikap mental wirausaha yakni percaya\r\ndiri, sadar akan jati dirinya, bermotivasi untuk meraih\r\nsuatu cita-cita, pantang menyerah, mampu bekerja\r\nkeras, kreatif, inovatif, berani mengambil risiko\r\ndengan perhitungan, berperilaku pemimpin dan\r\nmemiliki visi ke depan, tanggap terhadap saran dan\r\nkritik, memiliki kemampuan empati dan keterampilan\r\nsosial. Ketiga, meningkatkan kecakapan dan\r\nketerampilan para mahasiswa khususnya sense of\r\nbusiness. Keempat, menumbuhkembangkan\r\nwirausahawirausaha baru yang berpendidikan tinggi.\r\nKelima, menciptakan unit bisnis baru yang berbasis\r\nilmu pengetahuan, teknologi dan seni. Keenam,\r\nmembangun jejaring bisnis antarpelaku bisnis,\r\nkhususnya antara wirausaha pemula dan pengu-saha\r\nyang sudah mapan. Alokasi dana PMW tidak\r\nseluruhnya untuk modal mahasiswa (Direktorat\r\nJenderal Pendidikan Tinggi, 2009b).', '1602987995.svg', NULL, '2020-10-17 19:26:35', '2020-10-17 19:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `bussines_analysis`
--

CREATE TABLE `bussines_analysis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titleba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraphba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageba` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebookba` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailba` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsappba` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bussines_analysis`
--

INSERT INTO `bussines_analysis` (`id`, `titleba`, `paragraphba`, `imageba`, `facebookba`, `emailba`, `whatsappba`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Fihud Amien W.', 'Flat Design', '1603479900.jpeg', 'fihut.amien/', 'Fihudamien70@gmail.com', '+6285334204576', NULL, '2020-10-23 11:02:40', '2020-11-06 08:29:57'),
(2, 'Dhimas A. Minan', 'Illustrator', '1603479972.jpeg', 'dhimas.minan', 'dhimas.18004@mhs.unesa.ac.id', '+6288217318303', NULL, '2020-10-23 11:43:25', '2020-10-23 12:14:15'),
(3, 'Muhammad Iqbal F.', 'Logo Design', '1603479786.jpeg', 'Muhammad Iqbal', 'muhammadiqbal.18006@mhs.unesa.ac.id', '+628553284328', NULL, '2020-10-23 12:03:06', '2020-11-06 08:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `contactit_packages`
--

CREATE TABLE `contactit_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_contactit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph_contactit` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_contactit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactit_packages`
--

INSERT INTO `contactit_packages` (`id`, `title_contactit`, `paragraph_contactit`, `image_contactit`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'IT Development', 'Penerapan prinsip Good IT Development menjadi landasan pembentukan sistem, struktur dan budaya perusahaan yang fleksibel dan adaptif untuk mengubah lingkungan bisnis yang kompetitif serta mampu membangun sistem pengendalian internal dan manajemen risiko yang andal sehingga bisnis Anda berjalan dengan baik. Terorganisir dengan rapi Divisi ini merupakan bagian dari tata kelola dalam menjalankan aktivitasnya website agar pengelolaan bisnis dapat lebih terkelola dalam pelaksanaannya', '1603042057.svg', NULL, '2020-10-18 10:27:37', '2020-12-20 08:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `contactui_packages`
--

CREATE TABLE `contactui_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_contactui` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph_contactui` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_contactui` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactui_packages`
--

INSERT INTO `contactui_packages` (`id`, `title_contactui`, `paragraph_contactui`, `image_contactui`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ui/Ux Design', 'Memiliki bisnis yang memiliki level desain digital yang lemah merupakan hal yang berisiko di era digitalisasi saat ini. Divisi ini akan memastikan hirarki sistem dan melindungi bisnis Anda dari ancaman yang dapat mempengaruhi kemajuan bisnis Anda sehingga akan tercipta desain sistem komputer dan aktivitas online, melindungi bisnis, melindungi aset, melindungi reputasi dan privasi pelanggan, melindungi hubungan pelanggan serta menyamankan user', '1603027104.svg', NULL, '2020-10-18 06:18:24', '2020-12-20 08:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `contact_packages`
--

CREATE TABLE `contact_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph_contact` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_packages`
--

INSERT INTO `contact_packages` (`id`, `title_contact`, `paragraph_contact`, `image_contact`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bussines Analysis', 'Bisnis merupakan sesuatu yang membutuhkan analisis lingkungan, peluang dan berbagai aspek lainnya. Analisis bisnis memiliki tanggung jawab untuk memahami struktur, kebijakan, dan proses produksi perusahaan atau organisasi dan merekomendasikan solusi. Divisi ini hadir untuk membantu klien untuk menganalisis lebih dalam terkait bisnis yang dijalankan klien agar dapat tumbuh dan berkembang baik dari segi teknologi maupun ekonomi.', '1602975711.svg', NULL, '2020-10-17 16:01:51', '2020-12-20 08:44:01'),
(2, 'Ui/Ux Design', 'saxcacasca', '1603026667.png', '2020-10-18 06:11:13', '2020-10-18 06:11:07', '2020-10-18 06:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_packages`
--

CREATE TABLE `home_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_packages`
--

INSERT INTO `home_packages` (`id`, `title`, `paragraph`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mari berkonsultasi dengan kami dan memulai bisnis Anda', 'Jika Anda ingin memulai bisnis dan tidak tahu harus mulai dari mana, Anda tepat sekali berada di sini dan ikuti forum untuk mengobrol dengan sesama pengusaha dari berbagai negara atau kota.', '1608478877.png', NULL, '2020-10-17 15:57:52', '2020-12-20 08:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `it_development`
--

CREATE TABLE `it_development` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titleit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraphit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebookit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsappit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `it_development`
--

INSERT INTO `it_development` (`id`, `titleit`, `paragraphit`, `imageit`, `facebookit`, `emailit`, `whatsappit`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Fihud Amien W.', 'Web Development', '1604676406.jpeg', 'fihut.amien', 'Fihudamien70@gmail.com', '085334204576', NULL, '2020-11-06 08:26:46', '2020-11-06 08:32:10'),
(2, 'Muhammad Iqbal F.', 'Web Development', '1604676783.jpeg', 'muhammad.iqbal', 'muhammadiqbal.18006@mhs.unesa.ac.id', '+628553284328', NULL, '2020-11-06 08:33:03', '2020-11-06 08:33:03'),
(3, 'Dhimas A. Minan', 'Web Development', '1604676856.PNG', 'dhimas.minan', 'dhimas.18004@mhs.unesa.ac.id', '+6288217318303', NULL, '2020-11-06 08:34:16', '2020-11-06 08:34:16');

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
(15, '2020_10_03_070618_create_about_packages_table', 3),
(16, '2020_10_16_131016_create_aboutus_packages_table', 3),
(20, '2014_10_12_000000_create_users_table', 4),
(21, '2014_10_12_100000_create_password_resets_table', 4),
(22, '2019_08_19_000000_create_failed_jobs_table', 4),
(23, '2020_10_02_005650_create_home_packages_table', 4),
(24, '2020_10_02_012219_create_contact_packages_table', 4),
(25, '2020_10_02_020644_add_roles_field_to_users_table', 4),
(26, '2020_10_02_080134_add_username_field_to_users_table', 4),
(27, '2020_10_16_134532_create_about_us_packages_table', 4),
(28, '2020_10_16_134847_create_about_packages_table', 4),
(29, '2020_10_17_164340_create_contactone_packages_table', 4),
(30, '2020_10_17_232526_create_contact_one_packages_table', 5),
(31, '2020_10_18_001024_create_article_packages_table', 6),
(32, '2020_10_18_123943_create_contactui_packages_table', 7),
(33, '2020_10_18_171337_create_contactit_packages_table', 8),
(34, '2020_10_19_025124_create_aboutus_packages_table', 9),
(36, '2020_10_23_160623_create_bussinesanalysis_table', 10),
(37, '2020_10_25_070722_create_uiuxdesign_table', 11),
(38, '2020_11_06_144131_create_itdevelopment_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Fihud@gmail.com', '$2y$10$nvNGrKj1L5P6QAMj8L2arep3Iic1lLXRq9VUZnWemW7QpS0Y4GWuq', '2020-11-23 01:48:14'),
('Fihud@gmail.com', '$2y$10$nvNGrKj1L5P6QAMj8L2arep3Iic1lLXRq9VUZnWemW7QpS0Y4GWuq', '2020-11-23 01:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `uiux_design`
--

CREATE TABLE `uiux_design` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titleuiux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraphuiux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageuiux` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebookuiux` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailuiux` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsappuiux` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uiux_design`
--

INSERT INTO `uiux_design` (`id`, `titleuiux`, `paragraphuiux`, `imageuiux`, `facebookuiux`, `emailuiux`, `whatsappuiux`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Fihud Amien', 'Design Web', '1604671230.jpeg', 'fihut.amien', 'Fihudamien70@gmail.com', '085334204576', '2020-11-06 08:24:43', '2020-11-06 07:00:30', '2020-11-06 08:24:43'),
(2, 'Muhammad Iqbal F.', 'Web Design', '1604676147.jpeg', 'Muhammad.Iqbal', 'muhammadiqbal.18006@mhs.unesa.ac.id', '+628553284328', NULL, '2020-11-06 08:22:27', '2020-11-06 08:31:49'),
(3, 'Dhimas A. Minan', 'Web Design', '1604676505.PNG', 'dhimas.minan', 'dhimas.18004@mhs.unesa.ac.id', '+6288217318303', NULL, '2020-11-06 08:28:26', '2020-11-06 08:31:35'),
(4, 'Fihud Amien W.', 'Web Design', '1604676677.jpeg', 'fihut.amien', 'Fihudamien70@gmail.com', '085334204576', NULL, '2020-11-06 08:31:17', '2020-11-06 08:31:17');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'AdminASKBUZ', 'Adminask@support.com', NULL, '$2y$10$QJdzwBlUjD./cPFOuEGra.2W9R9gI8wCWrrXLq5iArpmpPhD9XSuq', NULL, '2020-10-18 05:33:03', '2020-10-18 05:33:03', 'ADMIN', 'Adminask'),
(4, 'Fihud', 'Fihud@gmail.com', NULL, '$2y$10$WBZbPRKFAw1BeYkLFue3jOo3NRCjQrsfGlkJUc70ckjLC/J0oyyOO', NULL, '2020-10-18 05:35:12', '2020-10-18 05:35:12', 'USER', 'Fihud'),
(5, 'Anda', 'nyobalawa@gmail.com', NULL, '$2y$10$tqjPsb2UKoj1Rv/burzoje8acIzYkYmgCniLUh2O7C1gN.aNDsUf.', NULL, '2020-11-08 07:43:02', '2020-11-08 07:43:02', 'USER', 'nyoba1'),
(7, 'acc12345', 'acc12345@gmail.com', NULL, '$2y$10$Nfr2ysaoEfeCdAADe4ABEudntK4CvxKLWWJXEzf/rkFgb2wuTC22S', NULL, '2020-12-20 08:49:52', '2020-12-20 08:49:52', 'USER', 'acc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_packages`
--
ALTER TABLE `aboutus_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_packages`
--
ALTER TABLE `about_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_packages`
--
ALTER TABLE `article_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussines_analysis`
--
ALTER TABLE `bussines_analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactit_packages`
--
ALTER TABLE `contactit_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactui_packages`
--
ALTER TABLE `contactui_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_packages`
--
ALTER TABLE `contact_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_packages`
--
ALTER TABLE `home_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_development`
--
ALTER TABLE `it_development`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `uiux_design`
--
ALTER TABLE `uiux_design`
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
-- AUTO_INCREMENT for table `aboutus_packages`
--
ALTER TABLE `aboutus_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_packages`
--
ALTER TABLE `about_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article_packages`
--
ALTER TABLE `article_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bussines_analysis`
--
ALTER TABLE `bussines_analysis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactit_packages`
--
ALTER TABLE `contactit_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactui_packages`
--
ALTER TABLE `contactui_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_packages`
--
ALTER TABLE `contact_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_packages`
--
ALTER TABLE `home_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `it_development`
--
ALTER TABLE `it_development`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `uiux_design`
--
ALTER TABLE `uiux_design`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
