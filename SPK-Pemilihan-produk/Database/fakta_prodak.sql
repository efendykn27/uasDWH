-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2022 pada 17.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwh_a`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakta_prodak`
--

CREATE TABLE `fakta_prodak` (
  `id` int(11) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `vendorProduk` varchar(40) NOT NULL,
  `jenisProduk` varchar(30) NOT NULL,
  `skalaProduk` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `vendorProduk_angka` int(11) NOT NULL,
  `jenisProduk_angka` int(11) NOT NULL,
  `skalaProduk_angka` int(11) NOT NULL,
  `harga_angka` int(11) NOT NULL,
  `kuantitas_angka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fakta_prodak`
--

INSERT INTO `fakta_prodak` (`id`, `namaProduk`, `vendorProduk`, `jenisProduk`, `skalaProduk`, `harga`, `kuantitas`, `vendorProduk_angka`, `jenisProduk_angka`, `skalaProduk_angka`, `harga_angka`, `kuantitas_angka`) VALUES
(1, '1969 Harley Davidson Ultimate Chopper', 'Min Lin Diecast', 'Motorcycles', '1:10', 96, 7933, 1, 4, 1, 4, 4),
(2, '1952 Alpine Renault 1300', 'Classic Metal Creations', 'Classic Cars', '1:10', 214, 7305, 5, 5, 1, 1, 4),
(3, '1996 Moto Guzzi 1100i', 'Highway 66 Mini Classics', 'Motorcycles', '1:10', 119, 6625, 3, 4, 1, 3, 4),
(4, '2003 Harley-Davidson Eagle Drag Bike', 'Red Start Diecast', 'Motorcycles', '1:10', 194, 5582, 1, 4, 1, 1, 3),
(5, '1972 Alfa Romeo GTA', 'Motor City Art Classics', 'Classic Cars', '1:10', 136, 3252, 1, 5, 1, 2, 2),
(6, '1962 LanciaA Delta 16V', 'Second Gear Diecast', 'Classic Cars', '1:10', 148, 6791, 1, 5, 1, 2, 4),
(7, '1968 Ford Mustang', 'Autoart Studio Design', 'Classic Cars', '1:12', 195, 68, 1, 5, 3, 1, 1),
(8, '2001 Ferrari Enzo', 'Second Gear Diecast', 'Classic Cars', '1:12', 208, 3619, 1, 5, 3, 1, 2),
(9, '1958 Setra Bus', 'Welly Diecast Productions', 'Trucks and Buses', '1:12', 137, 1579, 3, 2, 3, 2, 1),
(10, '2002 Suzuki XREO', 'Unimax Art Galleries', 'Motorcycles', '1:12', 151, 9997, 1, 4, 3, 2, 5),
(11, '1969 Corvair Monza', 'Welly Diecast Productions', 'Classic Cars', '1:18', 151, 6906, 3, 5, 3, 2, 4),
(12, '1968 Dodge Charger', 'Welly Diecast Productions', 'Classic Cars', '1:12', 117, 9123, 3, 5, 3, 3, 5),
(13, '1969 Ford Falcon', 'Second Gear Diecast', 'Classic Cars', '1:12', 173, 1049, 1, 5, 3, 1, 1),
(14, '1970 Plymouth Hemi Cuda', 'Studio M Art Models', 'Classic Cars', '1:12', 80, 5663, 3, 5, 3, 4, 3),
(15, '1957 Chevy Pickup', 'Exoto Designs', 'Trucks and Buses', '1:12', 119, 6125, 3, 2, 3, 3, 4),
(16, '1969 Dodge Charger', 'Welly Diecast Productions', 'Classic Cars', '1:12', 115, 7323, 3, 5, 3, 3, 4),
(17, '1940 Ford Pickup Truck', 'Studio M Art Models', 'Trucks and Buses', '1:18', 117, 2613, 3, 2, 3, 3, 2),
(18, '1993 Mazda RX-7', 'Highway 66 Mini Classics', 'Classic Cars', '1:18', 142, 3975, 3, 5, 3, 2, 2),
(19, '1937 Lincoln Berline', 'Motor City Art Classics', 'Vintage Cars', '1:18', 103, 8693, 1, 3, 3, 3, 5),
(20, '1936 Mercedes-Benz 500K Special Roadster', 'Studio M Art Models', 'Vintage Cars', '1:18', 54, 8635, 3, 3, 3, 5, 5),
(21, '1965 Aston Martin DB5', 'Classic Metal Creations', 'Classic Cars', '1:18', 124, 9042, 5, 5, 3, 3, 5),
(22, '1980s Black Hawk Helicopter', 'Red Start Diecast', 'Planes', '1:18', 158, 5330, 1, 2, 3, 2, 3),
(23, '1917 Grand Touring Sedan', 'Welly Diecast Productions', 'Vintage Cars', '1:18', 170, 2724, 3, 3, 3, 1, 2),
(24, '1948 Porsche 356-A Roadster', 'Gearbox Collectibles', 'Classic Cars', '1:18', 77, 8826, 2, 5, 3, 4, 5),
(25, '1995 Honda Civic', 'Min Lin Diecast', 'Classic Cars', '1:18', 142, 9772, 1, 5, 3, 2, 5),
(26, '1998 Chrysler Plymouth Prowler', 'Gearbox Collectibles', 'Classic Cars', '1:18', 164, 4724, 2, 5, 3, 2, 3),
(27, '1911 Ford Town Car', 'Motor City Art Classics', 'Vintage Cars', '1:18', 61, 540, 1, 3, 3, 5, 1),
(28, '1964 Mercedes Tour Bus', 'Unimax Art Galleries', 'Trucks and Buses', '1:18', 123, 8258, 1, 2, 3, 3, 5),
(29, '1932 Model A Ford J-Coupe', 'Autoart Studio Design', 'Vintage Cars', '1:18', 127, 9354, 1, 3, 3, 3, 5),
(30, '1926 Ford Fire Engine', 'Carousel DieCast Legends', 'Trucks and Buses', '1:18', 61, 2018, 4, 2, 3, 5, 2),
(31, 'P-51-D Mustang', 'Gearbox Collectibles', 'Planes', '1:72', 84, 992, 2, 2, 2, 4, 1),
(32, '1936 Harley Davidson El Knucklehead', 'Welly Diecast Productions', 'Motorcycles', '1:18', 61, 4357, 3, 4, 3, 5, 3),
(33, '1928 Mercedes-Benz SSK', 'Gearbox Collectibles', 'Vintage Cars', '1:18', 169, 548, 2, 3, 3, 1, 1),
(34, '1999 Indy 500 Monte Carlo SS', 'Red Start Diecast', 'Classic Cars', '1:18', 132, 8164, 1, 5, 3, 3, 5),
(35, '1913 Ford Model T Speedster', 'Carousel DieCast Legends', 'Vintage Cars', '1:18', 101, 4189, 4, 3, 3, 4, 3),
(36, '1934 Ford V8 Coupe', 'Min Lin Diecast', 'Vintage Cars', '1:18', 62, 5649, 1, 3, 3, 5, 3),
(37, '1999 Yamaha Speed Boat', 'Min Lin Diecast', 'Ships', '1:18', 86, 4259, 1, 2, 3, 4, 3),
(38, '18th Century Vintage Horse Carriage', 'Red Start Diecast', 'Vintage Cars', '1:18', 105, 5992, 1, 3, 3, 3, 3),
(39, '1903 Ford Model A', 'Unimax Art Galleries', 'Vintage Cars', '1:18', 137, 3913, 1, 3, 3, 2, 2),
(40, '1992 Ferrari 360 Spider red', 'Unimax Art Galleries', 'Classic Cars', '1:18', 169, 8347, 1, 5, 3, 1, 5),
(41, '1985 Toyota Supra', 'Highway 66 Mini Classics', 'Classic Cars', '1:18', 108, 7733, 3, 5, 3, 3, 4),
(42, 'Collectable Wooden Train', 'Carousel DieCast Legends', 'Trains', '1:18', 101, 6450, 4, 1, 3, 4, 4),
(43, '1969 Dodge Super Bee', 'Min Lin Diecast', 'Classic Cars', '1:18', 80, 1917, 1, 5, 3, 4, 1),
(44, '1917 Maxwell Touring Car', 'Exoto Designs', 'Vintage Cars', '1:18', 99, 7913, 3, 3, 3, 4, 4),
(45, '1976 Ford Gran Torino', 'Gearbox Collectibles', 'Classic Cars', '1:18', 147, 9127, 2, 5, 3, 2, 5),
(46, '1948 Porsche Type 356 Roadster', 'Gearbox Collectibles', 'Classic Cars', '1:18', 141, 8990, 2, 5, 3, 2, 5),
(47, '1957 Vespa GS150', 'Studio M Art Models', 'Motorcycles', '1:18', 62, 7689, 3, 4, 3, 5, 4),
(48, '1941 Chevrolet Special Deluxe Cabriolet', 'Exoto Designs', 'Vintage Cars', '1:18', 106, 2378, 3, 3, 3, 3, 2),
(49, '1970 Triumph Spitfire', 'Min Lin Diecast', 'Classic Cars', '1:18', 144, 5545, 1, 5, 3, 2, 3),
(50, '1932 Alfa Romeo 8C2300 Spider Sport', 'Exoto Designs', 'Vintage Cars', '1:18', 92, 6553, 3, 3, 3, 4, 4),
(51, '1904 Buick Runabout', 'Exoto Designs', 'Vintage Cars', '1:18', 88, 8290, 3, 3, 3, 4, 5),
(52, '1940s Ford truck', 'Motor City Art Classics', 'Trucks and Buses', '1:18', 121, 3128, 1, 2, 3, 3, 2),
(53, '1939 Cadillac Limousine', 'Studio M Art Models', 'Vintage Cars', '1:18', 50, 6645, 3, 3, 3, 5, 4),
(54, '1957 Corvette Convertible', 'Classic Metal Creations', 'Classic Cars', '1:18', 149, 1249, 5, 5, 3, 2, 1),
(55, '1957 Ford Thunderbird', 'Studio M Art Models', 'Classic Cars', '1:18', 71, 3209, 3, 5, 3, 4, 2),
(56, '1970 Chevy Chevelle SS 454', 'Unimax Art Galleries', 'Classic Cars', '1:24', 73, 1005, 1, 5, 4, 4, 1),
(57, '1970 Dodge Coronet', 'Highway 66 Mini Classics', 'Classic Cars', '1:24', 58, 4074, 3, 5, 4, 5, 3),
(58, '1997 BMW R 1100 S', 'Autoart Studio Design', 'Motorcycles', '1:24', 113, 7003, 1, 4, 4, 3, 4),
(59, '1966 Shelby Cobra 427 S/C', 'Carousel DieCast Legends', 'Classic Cars', '1:24', 50, 8197, 4, 5, 4, 5, 5),
(60, '1928 British Royal Navy Airplane', 'Classic Metal Creations', 'Planes', '1:24', 109, 3627, 5, 2, 4, 3, 2),
(61, '1939 Chevrolet Deluxe Coupe', 'Motor City Art Classics', 'Vintage Cars', '1:24', 33, 7332, 1, 3, 4, 5, 4),
(62, '1960 BSA Gold Star DBD34', 'Highway 66 Mini Classics', 'Motorcycles', '1:24', 76, 15, 3, 4, 4, 4, 1),
(63, '18th century schooner', 'Carousel DieCast Legends', 'Ships', '1:24', 123, 1898, 4, 2, 4, 3, 1),
(64, '1938 Cadillac V-16 Presidential Limousine', 'Classic Metal Creations', 'Vintage Cars', '1:24', 45, 2847, 5, 3, 4, 5, 2),
(65, '1962 Volkswagen Microbus', 'Autoart Studio Design', 'Trucks and Buses', '1:24', 128, 2327, 1, 2, 4, 3, 2),
(66, '1982 Ducati 900 Monster', 'Highway 66 Mini Classics', 'Motorcycles', '1:24', 69, 6840, 3, 4, 4, 5, 4),
(67, '1949 Jaguar XK 120', 'Classic Metal Creations', 'Classic Cars', '1:24', 91, 2350, 5, 5, 4, 4, 2),
(68, '1958 Chevy Corvette Limited Edition', 'Carousel DieCast Legends', 'Classic Cars', '1:24', 35, 2542, 4, 5, 4, 5, 2),
(69, '1900s Vintage Bi-Plane', 'Autoart Studio Design', 'Planes', '1:24', 69, 5942, 1, 2, 4, 5, 3),
(70, '1952 Citroen-15CV', 'Exoto Designs', 'Classic Cars', '1:24', 117, 1452, 3, 5, 4, 3, 1),
(71, '1982 Lamborghini Diablo', 'Second Gear Diecast', 'Classic Cars', '1:24', 38, 7723, 1, 5, 4, 5, 4),
(72, '1912 Ford Model T Delivery Wagon', 'Min Lin Diecast', 'Vintage Cars', '1:24', 89, 9173, 1, 3, 4, 4, 5),
(73, '1969 Chevrolet Camaro Z28', 'Exoto Designs', 'Classic Cars', '1:24', 86, 4695, 3, 5, 4, 4, 3),
(74, '1971 Alpine Renault 1600s', 'Welly Diecast Productions', 'Classic Cars', '1:24', 61, 7995, 3, 5, 4, 5, 4),
(75, '1937 Horch 930V Limousine', 'Autoart Studio Design', 'Vintage Cars', '1:24', 66, 2902, 1, 3, 4, 5, 2),
(76, '2002 Chevy Corvette', 'Gearbox Collectibles', 'Classic Cars', '1:24', 107, 9446, 2, 5, 4, 3, 5),
(77, '1940 Ford Delivery Sedan', 'Carousel DieCast Legends', 'Vintage Cars', '1:24', 84, 6621, 4, 3, 4, 4, 4),
(78, '1956 Porsche 356A Coupe', 'Classic Metal Creations', 'Classic Cars', '1:18', 140, 6600, 5, 5, 3, 2, 4),
(79, 'Corsair F4U ( Bird Cage)', 'Second Gear Diecast', 'Planes', '1:24', 68, 6812, 1, 2, 4, 5, 4),
(80, '1936 Mercedes Benz 500k Roadster', 'Red Start Diecast', 'Vintage Cars', '1:24', 41, 2081, 1, 3, 4, 5, 2),
(81, '1992 Porsche Cayenne Turbo Silver', 'Exoto Designs', 'Classic Cars', '1:24', 118, 6582, 3, 5, 4, 3, 4),
(82, '1936 Chrysler Airflow', 'Second Gear Diecast', 'Vintage Cars', '1:24', 97, 4710, 1, 3, 4, 4, 3),
(83, '1900s Vintage Tri-Plane', 'Unimax Art Galleries', 'Planes', '1:24', 72, 2756, 1, 2, 4, 4, 2),
(84, '1961 Chevrolet Impala', 'Classic Metal Creations', 'Classic Cars', '1:18', 81, 7869, 5, 5, 3, 4, 4),
(85, '1980’s GM Manhattan Express', 'Motor City Art Classics', 'Trucks and Buses', '1:32', 96, 5099, 1, 2, 5, 4, 3),
(86, '1997 BMW F650 ST', 'Exoto Designs', 'Motorcycles', '1:32', 100, 178, 3, 4, 5, 4, 1),
(87, '1982 Ducati 996 R', 'Gearbox Collectibles', 'Motorcycles', '1:32', 40, 9241, 2, 4, 5, 5, 5),
(88, '1954 Greyhound Scenicruiser', 'Classic Metal Creations', 'Trucks and Buses', '1:32', 54, 2874, 5, 2, 5, 5, 2),
(89, '1950\'s Chicago Surface Lines Streetcar', 'Gearbox Collectibles', 'Trains', '1:32', 62, 8601, 2, 1, 5, 5, 5),
(90, '1996 Peterbilt 379 Stake Bed with Outrigger', 'Red Start Diecast', 'Trucks and Buses', '1:32', 65, 814, 1, 2, 5, 5, 1),
(91, '1928 Ford Phaeton Deluxe', 'Highway 66 Mini Classics', 'Vintage Cars', '1:32', 69, 136, 3, 3, 5, 5, 1),
(92, '1974 Ducati 350 Mk3 Desmo', 'Second Gear Diecast', 'Motorcycles', '1:32', 102, 3341, 1, 4, 5, 4, 2),
(93, '1930 Buick Marquette Phaeton', 'Studio M Art Models', 'Vintage Cars', '1:50', 44, 7062, 3, 3, 2, 5, 4),
(94, 'Diamond T620 Semi-Skirted Tanker', 'Highway 66 Mini Classics', 'Trucks and Buses', '1:50', 116, 1016, 3, 2, 2, 3, 1),
(95, '1962 City of Detroit Streetcar', 'Classic Metal Creations', 'Trains', '1:50', 59, 1645, 5, 1, 2, 5, 1),
(96, '2002 Yamaha YZR M1', 'Autoart Studio Design', 'Motorcycles', '1:50', 81, 600, 1, 4, 2, 4, 1),
(97, 'The Schooner Bluenose', 'Autoart Studio Design', 'Ships', '1:700', 67, 1897, 1, 2, 2, 5, 1),
(98, 'American Airlines: B767-300', 'Min Lin Diecast', 'Planes', '1:700', 91, 5841, 1, 2, 2, 4, 3),
(99, 'The Mayflower', 'Studio M Art Models', 'Ships', '1:700', 87, 737, 3, 2, 2, 4, 1),
(100, 'HMS Bounty', 'Unimax Art Galleries', 'Ships', '1:700', 91, 3501, 1, 2, 2, 4, 2),
(101, 'America West Airlines B757-200', 'Motor City Art Classics', 'Planes', '1:700', 100, 9653, 1, 2, 2, 4, 5),
(102, 'The USS Constitution Ship', 'Red Start Diecast', 'Ships', '1:700', 72, 7083, 1, 2, 2, 4, 4),
(103, '1982 Camaro Z28', 'Carousel DieCast Legends', 'Classic Cars', '1:18', 101, 6934, 4, 5, 3, 4, 4),
(104, 'ATA: B757-300', 'Highway 66 Mini Classics', 'Planes', '1:700', 119, 7106, 3, 2, 2, 3, 4),
(105, 'F/A 18 Hornet 1/72', 'Motor City Art Classics', 'Planes', '1:72', 80, 551, 1, 2, 2, 4, 1),
(106, 'The Titanic', 'Carousel DieCast Legends', 'Ships', '1:700', 100, 1956, 4, 2, 2, 4, 1),
(107, 'The Queen Mary', 'Welly Diecast Productions', 'Ships', '1:700', 99, 5088, 3, 2, 2, 4, 3),
(108, 'American Airlines: MD-11S', 'Second Gear Diecast', 'Planes', '1:700', 74, 8820, 1, 2, 2, 4, 5),
(109, 'Boeing X-32A JSF', 'Motor City Art Classics', 'Planes', '1:72', 50, 4857, 1, 2, 2, 5, 3),
(110, 'Pont Yacht', 'Unimax Art Galleries', 'Ships', '1:72', 55, 414, 1, 2, 2, 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fakta_prodak`
--
ALTER TABLE `fakta_prodak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fakta_prodak`
--
ALTER TABLE `fakta_prodak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
