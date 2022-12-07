-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 04:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uplant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$SvaesALWIXtSDHfnE7HZ6eA/.zpZzLLimnpMupXYdi/W/lqXylaiq'),
(2, 'root', 'root@gmail.com', '$2y$10$Ad.H/fypQcZRwgCVKrkDvea78hrHqd8cYRTHivNQNqFiudMa6SZC.'),
(3, 'upladmin', 'upladmin@gmail.com', '$2y$10$MxywkRWi5RubNk6VS6qB1.523OjirJI9DtrZCU3sCrrTUOnYISzES');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `nama_author` varchar(50) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `tanggal_publish` date NOT NULL,
  `ringkasan_isi` text NOT NULL,
  `linkart` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `nama_author`, `judul_artikel`, `tanggal_publish`, `ringkasan_isi`, `linkart`) VALUES
(1, 'Seru Ga Sih', '10 Tanaman Hias Tercantik Untuk Dijadikan Tanaman ', '2022-11-20', '10 Tanaman Hias Cantik Untuk Penghias Meja', 'https://www.youtube.com/watch?v=qugpzM7eBNQ'),
(7, 'Jejak Petani', 'Cara Perawatan Tanaman Cabe Masa Remaja Supaya Cep', '2020-08-29', 'Halo sahabat tani semuanya dalam merawat tanaman cabe ada beberapa hal yang perlu dilakukan agar pertumbuhan tanaman cabe lebih cepat salah satunya dengan melakukan perompelan daun cabe dibawah pangkal V.', 'https://www.youtube.com/watch?v=LTYiRE6gbDo'),
(8, 'Ega Plants', 'How to Plant Roses', '2022-08-01', 'Cara yang tepat untuk menanam bunga mawar.', 'https://www.youtube.com/watch?v=eZkeLLHe3vU&feature=youtu.be'),
(11, ' Kebun Indra Tarigan', 'Jenis Hama dan Cara Menanggulanginya', '2021-12-31', 'Jenis jenis hama tanaman, cara mengatasi hama tanaman, jenis jenis penyakit tanaman, cara mengatasi penyakit tanaman, cara agar tanaman sehat, cara agar tanaman subur.', 'https://www.youtube.com/watch?v=vME2jICBxCY');

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `komunitas`
--

CREATE TABLE `komunitas` (
  `id_komunitas` int(11) NOT NULL,
  `nama_komunitas` varchar(50) NOT NULL,
  `jumlah_anggota` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komunitas`
--

INSERT INTO `komunitas` (`id_komunitas`, `nama_komunitas`, `jumlah_anggota`) VALUES
(2, 'Hills Tree', 30),
(4, 'Penanam Gunung', 193),
(5, 'Asiaplant', 400);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-11-04-160917', 'App\\Database\\Migrations\\Tanaman', 'default', 'App', 1667579174, 1),
(2, '2022-11-22-035116', 'App\\Database\\Migrations\\User', 'default', 'App', 1669089902, 2),
(3, '2022-11-23-074327', 'App\\Database\\Migrations\\Admin', 'default', 'App', 1669189496, 3),
(4, '2022-11-23-081533', 'App\\Database\\Migrations\\Admin', 'default', 'App', 1669191347, 4);

-- --------------------------------------------------------

--
-- Table structure for table `uplant`
--

CREATE TABLE `uplant` (
  `id_tanaman` int(5) UNSIGNED NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama_ilmiah` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_tanaman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uplant`
--

INSERT INTO `uplant` (`id_tanaman`, `nama_tanaman`, `jenis`, `nama_ilmiah`, `deskripsi`, `gambar_tanaman`) VALUES
(226, 'Tanaman Keladi Wayang', 'Tanaman Hias', 'Caladium alocasia', 'Tanaman Keladi Wayang adalah salah satu jenis tanaman hias daun dari genus Caladium sp yang memiliki bentuk unik. Tanaman ini juga dikenal dengan nama keladi batik, pasalnya daunnya memiliki motif atau corak yang menyerupai bentuk batik. Terlihat manis dengan perpaduan warna pink dan hijau di setiap daunnya yang berbentuk hati serta didukung dengan batang berwarna kecoklatan semakin menambah daya tariknya. Sangat cocok dijadikan sebagai hiasan untuk ruangan Anda. Dapat tumbuh dengan baik di daerah dataran rendah hingga tinggi.', '1669984743_1b3d12d633cf99bcc201.jpg'),
(233, 'Tanaman Keladi Wayang', 'Tanaman Hias', 'Caladium alocasia', 'Tanaman Keladi Wayang adalah salah satu jenis tanaman hias daun dari genus Caladium sp yang memiliki bentuk unik. Tanaman ini juga dikenal dengan nama keladi batik, pasalnya daunnya memiliki motif atau corak yang menyerupai bentuk batik. Terlihat manis dengan perpaduan warna pink dan hijau di setiap daunnya yang berbentuk hati serta didukung dengan batang berwarna kecoklatan semakin menambah daya tariknya. Sangat cocok dijadikan sebagai hiasan untuk ruangan Anda. Dapat tumbuh dengan baik di daerah dataran rendah hingga tinggi.', '1669905519_dd28acfc80d3e5514e38.jpg'),
(234, 'Tanaman Keladi Wayang', 'Tanaman Hias', 'Caladium alocasia', 'Tanaman Keladi Wayang adalah salah satu jenis tanaman hias daun dari genus Caladium sp yang memiliki bentuk unik. Tanaman ini juga dikenal dengan nama keladi batik, pasalnya daunnya memiliki motif atau corak yang menyerupai bentuk batik. Terlihat manis dengan perpaduan warna pink dan hijau di setiap daunnya yang berbentuk hati serta didukung dengan batang berwarna kecoklatan semakin menambah daya tariknya. Sangat cocok dijadikan sebagai hiasan untuk ruangan Anda. Dapat tumbuh dengan baik di daerah dataran rendah hingga tinggi.', '1669905560_1c27af7cd16d4eedd57d.jpg'),
(235, 'Tanaman Kaktus Belimbing Own Root', 'Tanaman Hias', 'Noto cactus', 'Kaktus belimbing own root merupakan salah satu jenis kaktus berbatang tunggal dengan bentuk yang unik. Kepalanya bulat dan berukuran cukup besar yaitu sekitar kurang lebih 6 cm. Bentuknya sangat indah dan menyerupai buah belimbing. Tiap kepalanya memiliki 11 ruas rusuk yang dipenuhi dengan rambut-rambut halus berwarna putih. Sangat cocok dijadikan sebagai tambahan koleksi tanaman hias untuk ruangan Anda. Untuk perawatannya juga terbilang sangat mudah sama dengan jenis kaktus lainnya. Kaktus belimbing own root juga toleran terhadap panas dan kekeringan. Sangat menyukai matahari penuh atau setengah teduh. Kebutuhan airnya sedikit dan akan tumbuh dengan baik jika mendapatkan cahaya matahari yang cukup. Untuk itu, jika tanaman disimpan di dalam rumah (indoor), sebaiknya letakkan di dekat jendela atau pada posisi yang mudah terkena sinar matahari. Siram tanaman dua kali seminggu atau pada saat media benar-benar kering. Lakukan pemupukan tanaman setiap 4 minggu sekali.', '1669905616_11185012b480618650a1.jpg'),
(236, 'Tanaman Kaktus Belimbing Own Root', 'Tanaman Hias', 'Noto cactus', 'Kaktus belimbing own root merupakan salah satu jenis kaktus berbatang tunggal dengan bentuk yang unik. Kepalanya bulat dan berukuran cukup besar yaitu sekitar kurang lebih 6 cm. Bentuknya sangat indah dan menyerupai buah belimbing. Tiap kepalanya memiliki 11 ruas rusuk yang dipenuhi dengan rambut-rambut halus berwarna putih. Sangat cocok dijadikan sebagai tambahan koleksi tanaman hias untuk ruangan Anda. Untuk perawatannya juga terbilang sangat mudah sama dengan jenis kaktus lainnya. Kaktus belimbing own root juga toleran terhadap panas dan kekeringan. Sangat menyukai matahari penuh atau setengah teduh. Kebutuhan airnya sedikit dan akan tumbuh dengan baik jika mendapatkan cahaya matahari yang cukup. Untuk itu, jika tanaman disimpan di dalam rumah (indoor), sebaiknya letakkan di dekat jendela atau pada posisi yang mudah terkena sinar matahari. Siram tanaman dua kali seminggu atau pada saat media benar-benar kering. Lakukan pemupukan tanaman setiap 4 minggu sekali.', '1669905681_ed81d7ab99ffd5b2e1ba.jpg'),
(237, 'Tanaman Kaktus Belimbing Own Root', 'Tanaman Hias', 'Noto cactus', 'Kaktus belimbing own root merupakan salah satu jenis kaktus berbatang tunggal dengan bentuk yang unik. Kepalanya bulat dan berukuran cukup besar yaitu sekitar kurang lebih 6 cm. Bentuknya sangat indah dan menyerupai buah belimbing. Tiap kepalanya memiliki 11 ruas rusuk yang dipenuhi dengan rambut-rambut halus berwarna putih. Sangat cocok dijadikan sebagai tambahan koleksi tanaman hias untuk ruangan Anda. Untuk perawatannya juga terbilang sangat mudah sama dengan jenis kaktus lainnya. Kaktus belimbing own root juga toleran terhadap panas dan kekeringan. Sangat menyukai matahari penuh atau setengah teduh. Kebutuhan airnya sedikit dan akan tumbuh dengan baik jika mendapatkan cahaya matahari yang cukup. Untuk itu, jika tanaman disimpan di dalam rumah (indoor), sebaiknya letakkan di dekat jendela atau pada posisi yang mudah terkena sinar matahari. Siram tanaman dua kali seminggu atau pada saat media benar-benar kering. Lakukan pemupukan tanaman setiap 4 minggu sekali.', '1669905734_1dbf535df47c8b2b1773.jpg'),
(238, 'Tanaman Samber Lilin', 'Tanaman Obat', 'Strobilanthes dyerianus', 'Di Indonesia digunakan sebagai tanaman obat rematik & peluruh kencing, namun di luar negeri dikembangkan besar-besaran sebagai tanaman hias daun karena daunnya berwarna mengagumkan.  Mengatasi rematik, Menyembuhkan batuk, Menurunkan kadar kolesterol dalam darah, Menghilangkan jerawat, Meredakan sakit kepala, Membantu diet.', '1669928594_d12bb3031f4188f51041.jpeg'),
(239, 'Tanaman Samber Lilin', 'Tanaman Obat', 'Strobilanthes dyerianus', 'Di Indonesia digunakan sebagai tanaman obat rematik & peluruh kencing, namun di luar negeri dikembangkan besar-besaran sebagai tanaman hias daun karena daunnya berwarna mengagumkan. Mengatasi rematik, Menyembuhkan batuk, Menurunkan kadar kolesterol dalam darah, Menghilangkan jerawat, Meredakan sakit kepala, Membantu diet.', '1669928644_31755b9c55dd979ad022.jpeg'),
(240, 'Tanaman Samber Lilin', 'Tanaman Obat', 'Strobilanthes dyerianus', 'Di Indonesia digunakan sebagai tanaman obat rematik & peluruh kencing, namun di luar negeri dikembangkan besar-besaran sebagai tanaman hias daun karena daunnya berwarna mengagumkan. Mengatasi rematik, Menyembuhkan batuk, Menurunkan kadar kolesterol dalam darah, Menghilangkan jerawat, Meredakan sakit kepala, Membantu diet.', '1669928686_a8a4c3e9f322802c908c.jpeg'),
(241, 'Daun Mint', 'Tanaman Obat', 'Spearmint (Mentha spicata)', 'Merupakan tanaman dengan sejuta manfaat. Spearmint tergolong dalam keluarga Lamiaceae yang berasal dari Eropa dan Asia khususnya Timur Tengah. Tanaman tahunan ini mempunyai aroma sweetly dibandingkan dengan Peppermint. Daunnya berwarna hijau, runcing dengan gerigi pada tepian daun, sehingga tanaman ini kerap disebut tepi daun seratus. Sedangkan batangnya berbentuk persegi.  Daun spearmint dapat digunakan sebagai campuran dalam masakan, wewangian dan obat. Mengobati rasa sakit kepala, mengurangi rasa mual, mengurangi rasa sakit gigi serta membantu memenangkan otot perut. Selain itu, spearmint juga populer digunakan sebagai bahan komersial lainnya seperti pasta gigi, bahan kosmetik, penyegar mulut dan obat-obatan.', '1669928741_1add4e160350cf719bce.jpg'),
(242, 'Daun Mint', 'Tanaman Obat', 'Spearmint (Mentha spicata)', 'Merupakan tanaman dengan sejuta manfaat. Spearmint tergolong dalam keluarga Lamiaceae yang berasal dari Eropa dan Asia khususnya Timur Tengah. Tanaman tahunan ini mempunyai aroma sweetly dibandingkan dengan Peppermint. Daunnya berwarna hijau, runcing dengan gerigi pada tepian daun, sehingga tanaman ini kerap disebut tepi daun seratus. Sedangkan batangnya berbentuk persegi.  Daun spearmint dapat digunakan sebagai campuran dalam masakan, wewangian dan obat. Mengobati rasa sakit kepala, mengurangi rasa mual, mengurangi rasa sakit gigi serta membantu memenangkan otot perut. Selain itu, spearmint juga populer digunakan sebagai bahan komersial lainnya seperti pasta gigi, bahan kosmetik, penyegar mulut dan obat-obatan.', '1669928774_e4417c3e852f45c1930b.jpg'),
(243, 'Daun Mint', 'Tanaman Obat', 'Spearmint (Mentha spicata)', 'Merupakan tanaman dengan sejuta manfaat. Spearmint tergolong dalam keluarga Lamiaceae yang berasal dari Eropa dan Asia khususnya Timur Tengah. Tanaman tahunan ini mempunyai aroma sweetly dibandingkan dengan Peppermint. Daunnya berwarna hijau, runcing dengan gerigi pada tepian daun, sehingga tanaman ini kerap disebut tepi daun seratus. Sedangkan batangnya berbentuk persegi. Daun spearmint dapat digunakan sebagai campuran dalam masakan, wewangian dan obat. Mengobati rasa sakit kepala, mengurangi rasa mual, mengurangi rasa sakit gigi serta membantu memenangkan otot perut. Selain itu, spearmint juga populer digunakan sebagai bahan komersial lainnya seperti pasta gigi, bahan kosmetik, penyegar mulut dan obat-obatan.', '1669928812_bac7e35eeec83088b68c.jpg'),
(244, 'Selada', 'Tanaman Hidroponik', 'Lactuca sativa L.', 'Selada hidroponik adalah salah satu budidaya yang cukup menarik untuk dicoba. Pasalnya, menanam selada menggunakan metode hidroponik terbilang tidak sulit. Adapun selada termasuk sayuran yang mudah ditanam bagi para pemula.  Selada menjadi salah satu jenis sayuran hijau yang cukup digemari untuk hidangan makanan. Mulai dari makanan nusantara hingga makanan internasional. Seperti kebab, salad sayur, burger, lalapan bersama sambal, dan lain sebagainya.', '1669928926_6dc015df388b12e22335.jpg'),
(245, 'Selada', 'Tanaman Hidroponik', 'Lactuca sativa L.', 'Selada hidroponik adalah salah satu budidaya yang cukup menarik untuk dicoba. Pasalnya, menanam selada menggunakan metode hidroponik terbilang tidak sulit. Adapun selada termasuk sayuran yang mudah ditanam bagi para pemula. Selada menjadi salah satu jenis sayuran hijau yang cukup digemari untuk hidangan makanan. Mulai dari makanan nusantara hingga makanan internasional. Seperti kebab, salad sayur, burger, lalapan bersama sambal, dan lain sebagainya.', '1669929454_2def85abf6600abbb4a8.jpg'),
(246, 'Selada', 'Tanaman Hidroponik', 'Lactuca sativa L.', 'Selada hidroponik adalah salah satu budidaya yang cukup menarik untuk dicoba. Pasalnya, menanam selada menggunakan metode hidroponik terbilang tidak sulit. Adapun selada termasuk sayuran yang mudah ditanam bagi para pemula.  Selada menjadi salah satu jenis sayuran hijau yang cukup digemari untuk hidangan makanan. Mulai dari makanan nusantara hingga makanan internasional. Seperti kebab, salad sayur, burger, lalapan bersama sambal, dan lain sebagainya.', '1669929437_1360ccfd6de3dbadbc9c.jpg'),
(247, 'Pakcoy', 'Tanaman Hidroponik', 'Brassica rapa subsp. chinensis', 'Pakcoy (Brassica rapa L) merupakan sayuran yang tampilannya sangat mirip dengan sawi. Jika sawi batangnya lebih ramping dan memanjang, pakcoy memiliki batang yang lebih besar dan pendek, serta struktur daunnya lebar.  Tanaman pakchoy dapat tumbuh dengan baik jika menggunakan media tanam yang subur, gembur serta kaya akan unsur hara. Biasanya, tanaman dapat dipanen sekitar 37 hari setelah tanam. Sayuran berbatang putih ini cocok ditanam di daerah dataran rendah hingga tinggi.', '1669944425_69ec8ba11b14eb65440e.jpg'),
(248, 'Pakcoy', 'Tanaman Hidroponik', 'Brassica rapa subsp. chinensis', 'Pakcoy (Brassica rapa L) merupakan sayuran yang tampilannya sangat mirip dengan sawi. Jika sawi batangnya lebih ramping dan memanjang, pakcoy memiliki batang yang lebih besar dan pendek, serta struktur daunnya lebar.  Tanaman pakchoy dapat tumbuh dengan baik jika menggunakan media tanam yang subur, gembur serta kaya akan unsur hara. Biasanya, tanaman dapat dipanen sekitar 37 hari setelah tanam. Sayuran berbatang putih ini cocok ditanam di daerah dataran rendah hingga tinggi.', '1669944470_a151b6ed03b7ae079ad5.jpg'),
(249, 'Pakcoy', 'Tanaman Hidroponik', 'Brassica rapa subsp. chinensis', 'Pakcoy (Brassica rapa L) merupakan sayuran yang tampilannya sangat mirip dengan sawi. Jika sawi batangnya lebih ramping dan memanjang, pakcoy memiliki batang yang lebih besar dan pendek, serta struktur daunnya lebar. Tanaman pakchoy dapat tumbuh dengan baik jika menggunakan media tanam yang subur, gembur serta kaya akan unsur hara. Biasanya, tanaman dapat dipanen sekitar 37 hari setelah tanam. Sayuran berbatang putih ini cocok ditanam di daerah dataran rendah hingga tinggi.', '1669944509_194a2addf5a4fdd9f4c1.jpg'),
(250, 'Ceri', 'Tanaman Buah', 'Prunus subg. Cerasus', 'Manfaat buah ceri sangatlah erat dan berkaitan dengan kandungan nutrisi yang ada di dalamnya. Buah ini banyak mengandung nutrisi, seperti vitamin C, kalium, serat, vitamin B, vitamin K, dan magnesium. Selain itu, buah ceri juga kaya akan senyawa aktif yang bersifat antioksidan dan antiradang.  Untuk menanamnya, berikut syarat tumbuh yang perlu diperhatikan:  • Dataran tinggi dengan ketinggian minimal 700 mdpl  • Iklim sejuk, jangan pilih daerah yang suhunya bisa mencapai -1 derajat atau 30 derajat celcius  • Area dengan jenis tanah berpasir kering dengan sistem irigasi yang baik', '1669944587_7567ad217cc043c1a24e.jpeg'),
(251, 'Ceri', 'Tanaman Buah', 'Prunus subg. Cerasus', 'Manfaat buah ceri sangatlah erat dan berkaitan dengan kandungan nutrisi yang ada di dalamnya. Buah ini banyak mengandung nutrisi, seperti vitamin C, kalium, serat, vitamin B, vitamin K, dan magnesium. Selain itu, buah ceri juga kaya akan senyawa aktif yang bersifat antioksidan dan antiradang. Untuk menanamnya, berikut syarat tumbuh yang perlu diperhatikan: • Dataran tinggi dengan ketinggian minimal 700 mdpl • Iklim sejuk, jangan pilih daerah yang suhunya bisa mencapai -1 derajat atau 30 derajat celcius • Area dengan jenis tanah berpasir kering dengan sistem irigasi yang baik', '1669944650_0dca6dfc6f058440fe1f.jpeg'),
(252, 'Ceri', 'Tanaman Buah', 'Prunus subg. Cerasus', 'Manfaat buah ceri sangatlah erat dan berkaitan dengan kandungan nutrisi yang ada di dalamnya. Buah ini banyak mengandung nutrisi, seperti vitamin C, kalium, serat, vitamin B, vitamin K, dan magnesium. Selain itu, buah ceri juga kaya akan senyawa aktif yang bersifat antioksidan dan antiradang.  Untuk menanamnya, berikut syarat tumbuh yang perlu diperhatikan:  • Dataran tinggi dengan ketinggian minimal 700 mdpl  • Iklim sejuk, jangan pilih daerah yang suhunya bisa mencapai -1 derajat atau 30 derajat celcius  • Area dengan jenis tanah berpasir kering dengan sistem irigasi yang baik', '1669944677_e278e874663635780ce8.jpeg'),
(253, 'Rambutan', 'Tanaman Buah', 'Nephelium lappaceum', 'Rambutan adalah salah satu jenis buah yang berasal dari daerah tropis termasuk Indonesia. Ciri-ciri buah rambutan adalah berserabut mirip rambut, umumnya berwarna merah, berbiji, dan berdaging putih tebal di dalamnya. Manfaat buah rambutan di antaranya melancarkan pencernaan, menurunkan berat badan, hingga menurukan risiko diabetes.  Cara menanam rambutan: Buka polybag secara perlahan, jangan sampai merusak akar. Bersihkan sebagian tanah. Masukkan bibit pohon rambutan ke lubang media tanam. Timbun kembali dengan tanah subur. Siram dengan sedikit air dan jangan sampai tergenang.', '1669944727_58421a67329e867a6b59.jpg'),
(254, 'Rambutan', 'Tanaman Buah', 'Nephelium lappaceum', 'Rambutan adalah salah satu jenis buah yang berasal dari daerah tropis termasuk Indonesia. Ciri-ciri buah rambutan adalah berserabut mirip rambut, umumnya berwarna merah, berbiji, dan berdaging putih tebal di dalamnya. Manfaat buah rambutan di antaranya melancarkan pencernaan, menurunkan berat badan, hingga menurukan risiko diabetes. Cara menanam rambutan: Buka polybag secara perlahan, jangan sampai merusak akar. Bersihkan sebagian tanah. Masukkan bibit pohon rambutan ke lubang media tanam. Timbun kembali dengan tanah subur. Siram dengan sedikit air dan jangan sampai tergenang.', '1669944764_177f68140827b317dcf9.jpg'),
(255, 'Rambutan', 'Tanaman Buah', 'Nephelium lappaceum', 'Rambutan adalah salah satu jenis buah yang berasal dari daerah tropis termasuk Indonesia. Ciri-ciri buah rambutan adalah berserabut mirip rambut, umumnya berwarna merah, berbiji, dan berdaging putih tebal di dalamnya. Manfaat buah rambutan di antaranya melancarkan pencernaan, menurunkan berat badan, hingga menurukan risiko diabetes. Cara menanam rambutan: Buka polybag secara perlahan, jangan sampai merusak akar. Bersihkan sebagian tanah. Masukkan bibit pohon rambutan ke lubang media tanam. Timbun kembali dengan tanah subur. Siram dengan sedikit air dan jangan sampai tergenang.', '1669944812_005a855108650494b952.jpg'),
(256, 'Cabe Rawit', 'Tanaman Sayur', 'Capsicum frutescens \'Siling labuyo\'', 'Cabai rawit atau cabai kecil (Capsicum frutescens) merupakan tanaman berumur panjang (menahun), dapat hidup sampai 2-3 tahun apabila dipelihara dengan baik dan kebutuhan haranya tercukupi. Terdapat beberapa macam cabai rawit antara lain rawit kecil, sedang dan besar. Umumnya cabai rawit kecil rasanya sangat pedas. Cabai rawit digunakan untuk sayur, bumbu masak,asinan dan obat.  Budidaya cabai rawit secara umum tidak berbedanya tadengan budidaya cabai merah. Namun yang harus diperhatikan adalah jarak tanam dan pemupukannya. Karena umurnya yang panjang, pemupukannya lebih banyak. Umumnya tanaman cabai rawit lebih tahan terhadap penyakit dibanding cabai yang lainnya.', '1669944957_606988ac95aacb8f864a.jpg'),
(257, 'Cabe Rawit', 'Tanaman Sayur', 'Capsicum frutescens \'Siling labuyo\'', 'Cabai rawit atau cabai kecil (Capsicum frutescens) merupakan tanaman berumur panjang (menahun), dapat hidup sampai 2-3 tahun apabila dipelihara dengan baik dan kebutuhan haranya tercukupi. Terdapat beberapa macam cabai rawit antara lain rawit kecil, sedang dan besar. Umumnya cabai rawit kecil rasanya sangat pedas. Cabai rawit digunakan untuk sayur, bumbu masak,asinan dan obat.  Budidaya cabai rawit secara umum tidak berbedanya tadengan budidaya cabai merah. Namun yang harus diperhatikan adalah jarak tanam dan pemupukannya. Karena umurnya yang panjang, pemupukannya lebih banyak. Umumnya tanaman cabai rawit lebih tahan terhadap penyakit dibanding cabai yang lainnya.', '1669944984_79166976f288fe05fa8b.jpg'),
(258, 'Cabe Rawit', 'Tanaman Sayur', 'Capsicum frutescens \'Siling labuyo\'', 'Cabai rawit atau cabai kecil (Capsicum frutescens) merupakan tanaman berumur panjang (menahun), dapat hidup sampai 2-3 tahun apabila dipelihara dengan baik dan kebutuhan haranya tercukupi. Terdapat beberapa macam cabai rawit antara lain rawit kecil, sedang dan besar. Umumnya cabai rawit kecil rasanya sangat pedas. Cabai rawit digunakan untuk sayur, bumbu masak,asinan dan obat.  Budidaya cabai rawit secara umum tidak berbedanya tadengan budidaya cabai merah. Namun yang harus diperhatikan adalah jarak tanam dan pemupukannya. Karena umurnya yang panjang, pemupukannya lebih banyak. Umumnya tanaman cabai rawit lebih tahan terhadap penyakit dibanding cabai yang lainnya.', '1669945015_450ee45996681f635678.jpg'),
(259, 'Tomat', 'Tanaman Sayur', 'Solanum lycopersicum', 'Tomat merupakan tanaman yang bisa tumbuh di segala kondisi, mulai dari dataran tinggi, dataran menengah, serta dataran rendah. Tanaman tomat akan tumbuh maksimal apabila ditanam di tanah yang gembur dengan kadar keasaman pH berkisar 5-6. Selain itu, tanah untuk menanam tomat sebaiknya sedikit mengandung pasir, banyak humus, dan pengairannya cukup teratur.  Warna buah tomat biasanya cenderung kuning apabila berada di temperatur tinggi atau di atas 32 derajat celcius. Sementara, warna tomat akan tidak merata apabila berada di temperatur yang berubah-ubah atau tidak tetap. Perlu diketahui, temperature yang ideal serta berpengaruh baik terhadap warna buah tomat adalah 24-28 derajat celcius dan umumnya berwarna merah merata.', '1669945081_b0d3404f766d00b8f77e.jpeg'),
(260, 'Tomat', 'Tanaman Sayur', 'Solanum lycopersicum', 'Tomat merupakan tanaman yang bisa tumbuh di segala kondisi, mulai dari dataran tinggi, dataran menengah, serta dataran rendah. Tanaman tomat akan tumbuh maksimal apabila ditanam di tanah yang gembur dengan kadar keasaman pH berkisar 5-6. Selain itu, tanah untuk menanam tomat sebaiknya sedikit mengandung pasir, banyak humus, dan pengairannya cukup teratur.  Warna buah tomat biasanya cenderung kuning apabila berada di temperatur tinggi atau di atas 32 derajat celcius. Sementara, warna tomat akan tidak merata apabila berada di temperatur yang berubah-ubah atau tidak tetap. Perlu diketahui, temperature yang ideal serta berpengaruh baik terhadap warna buah tomat adalah 24-28 derajat celcius dan umumnya berwarna merah merata.', '1669945097_230fa81c122b6b24590c.jpeg'),
(261, 'Tomat', 'Tanaman Sayur', 'Solanum lycopersicum', 'Tomat merupakan tanaman yang bisa tumbuh di segala kondisi, mulai dari dataran tinggi, dataran menengah, serta dataran rendah. Tanaman tomat akan tumbuh maksimal apabila ditanam di tanah yang gembur dengan kadar keasaman pH berkisar 5-6. Selain itu, tanah untuk menanam tomat sebaiknya sedikit mengandung pasir, banyak humus, dan pengairannya cukup teratur.  Warna buah tomat biasanya cenderung kuning apabila berada di temperatur tinggi atau di atas 32 derajat celcius. Sementara, warna tomat akan tidak merata apabila berada di temperatur yang berubah-ubah atau tidak tetap. Perlu diketahui, temperature yang ideal serta berpengaruh baik terhadap warna buah tomat adalah 24-28 derajat celcius dan umumnya berwarna merah merata.', '1669945115_b8d2e18414075f365d7b.jpeg'),
(273, 'a', 'a', 'a', 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `created_at`) VALUES
(5, 'User2', 'user2@gmail.com', '$2y$10$0Mu3mwOV3Lvylab95MHdGe2BYwRRFKmdiUUkrB/t0gZF1kn4AFbOy', '2022-11-26 11:21:41'),
(8, 'rahmarania', 'rahfairuzran@gmail.com', '$2y$10$ISbUxNeCkTI9xNxNaE9.YudU2sZg2E1g8Puf8ULU4hiMcZUhhpKJ.', '2022-11-26 11:22:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `komunitas`
--
ALTER TABLE `komunitas`
  ADD PRIMARY KEY (`id_komunitas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uplant`
--
ALTER TABLE `uplant`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komunitas`
--
ALTER TABLE `komunitas`
  MODIFY `id_komunitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uplant`
--
ALTER TABLE `uplant`
  MODIFY `id_tanaman` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
