<?php

use Illuminate\Database\Seeder;

class SatkerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `satker` (`id`, `kdsatker`, `nmsatker`, `balai_id`, `wilayah_id`) VALUES
        (1, '06633713', 'Balai Wilayah Sungai Sumatera I', 1, 1),
        (2, '06498017', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera I Provinsi Aceh', 1, 1),
        (3, '06633722', 'Balai Wilayah Sungai Sumatera II', 2, 1),
        (4, '06498027', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera II Provinsi Sumatera Utara', 2, 1),
        (5, '06633738', 'Balai Wilayah Sungai Sumatera III', 3, 1),
        (6, '06498037', 'Satker  PJPA WS.Indragiri Akuaman,WS Kampar, WS Rokan,WS Siak  Provinsi  Riau', 3, 1),
        (7, '06633744', 'Balai Wilayah Sungai Sumatera IV', 4, 1),
        (8, '06498047', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera IV Provinsi Kepulauan Riau', 4, 1),
        (9, '06633750', 'Balai Wilayah Sungai Sumatera V', 5, 1),
        (10, '06498039', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Indragiri-Akuaman, WS. Kampar, WS. Rokan Provinsi Sumatera Barat', 5, 1),
        (11, '06498078', 'PJPA WS. Batanghari Provinsi Sumatera Barat', 5, 1),
        (12, '06633755', 'Balai Wilayah Sungai Sumatera VI', 6, 1),
        (13, '06498067', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Batanghari Provinsi Jambi', 6, 1),
        (14, '06633769', 'Balai Wilayah Sungai Sumatera VII', 7, 1),
        (15, '06498087', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera VII Provinsi Bengkulu', 7, 1),
        (16, '06633781', 'Balai Besar Wilayah Sungai Sumatera VIII', 8, 1),
        (17, '06498098', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera VIII Provinsi Bangka Belitung', 8, 1),
        (18, '06498097', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air  Sumatera VIII Provinsi Sumatera Selatan', 8, 1),
        (19, '06633790', 'Balai Besar Wilayah Sungai Mesuji Sekampung', 9, 1),
        (20, '06498107', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Mesuji-Sekampung', 9, 1),
        (21, '06633801', 'Balai Besar Wilayah Sungai Cidanau-Ciujung-Cidurian', 10, 1),
        (22, '06498022', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Cidanau_Ciujung_Cidurian', 10, 1),
        (23, '06633810', 'Balai Besar Wilayah Sungai Ciliwung-Cisadane', 11, 1),
        (24, '06498031', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Ciliwung-Cisadane', 11, 1),
        (25, '06633826', 'Balai Besar Wilayah Sungai Citarum', 12, 1),
        (26, '06498136', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Citarum', 12, 1),
        (27, '06633841', 'Balai Besar Wilayah Sungai Cimanuk-Cisanggarung', 13, 1),
        (28, '06498162', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Cimanuk-Cisanggarung', 13, 1),
        (29, '06633832', 'Balai Besar Wilayah Sungai Citanduy', 14, 1),
        (30, '06498145', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Citanduy', 14, 1),
        (31, '06633857', 'Balai Besar Wilayah Sungai Pemali-Juana', 15, 1),
        (32, '06498167', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Pemali Juana', 15, 1),
        (33, '06633863', 'Balai Besar Wilayah Sungai Serayu - Opak', 16, 1),
        (34, '06498177', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Serayu-Opak', 16, 1),
        (35, '06633872', 'Balai Besar Wilayah Sungai Bengawan Solo', 17, 1),
        (36, '06498187', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Bengawan Solo', 17, 1),
        (37, '06633888', 'Balai Besar Wilayah Sungai Brantas', 18, 1),
        (38, '06498197', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Brantas', 18, 1),
        (39, '06633920', 'Balai Wilayah Sungai Bali-Penida', 19, 2),
        (40, '06498248', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Bali-Penida', 19, 2),
        (41, '06633939', 'Balai Wilayah Sungai Nusa Tenggara I', 20, 2),
        (42, '06498257', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Nusa Tenggara I Provinsi Nusa Tenggara Barat', 20, 2),
        (43, '06633945', 'Balai Wilayah Sungai Nusa Tenggara II', 21, 2),
        (44, '06400712', 'SNVT Air Tanah dan Air Baku Nusa Tenggara II Provinsi Nusa Tenggara Timur', 21, 2),
        (45, '06633894', 'Balai Wilayah Sungai Kalimantan I', 22, 2),
        (46, '06498207', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Kapuas, WS. Jelai-Kendawangan Provinsi Kalimantan Barat', 22, 2),
        (47, '06633908', 'Balai Wilayah Sungai Kalimantan II', 23, 2),
        (48, '06498227', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Mentaya-Katingan, WS. Barito, WS. Jelai-Kendawangan Provinsi Kalimantan Tengah', 23, 2),
        (49, '06498217', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Barito Provinsi Kalimantan Selatan', 23, 2),
        (50, '06633914', 'Balai Wilayah Sungai Kalimantan III', 24, 2),
        (51, '06417774', 'SNVT PJPA WS.Sesayap ,WS.Mahakam ,WS.Berau-KelaiI Provinsi Kalimantan Utara', 24, 2),
        (52, '06498237', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS.Mahakam ,WS.Berau-KelaiI Provinsi Kalimantan Timur', 24, 2),
        (53, '06633951', 'Balai Wilayah Sungai Sulawesi I', 25, 2),
        (54, '06498277', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Sulawesi I Provinsi Sulawesi Utara', 25, 2),
        (55, '06633960', 'Balai Wilayah Sungai Sulawesi II', 26, 2),
        (56, '06498287', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Sulawesi II', 26, 2),
        (57, '06633976', 'Balai Wilayah Sungai Sulawesi III', 27, 2),
        (58, '06498297', 'Satuan Kerja Pelaksanaan Jaringan Pemanfaatan Air WS. Palu Lariang, WS. Parigi-Poso, WS. Kaluku-Karama Provinsi Sulawesi Tengah', 27, 2),
        (59, '06498327', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air WS. Kaluku-Karama, WS. Palu-Lariang Provinsi Sulawesi Barat', 27, 2),
        (60, '06447900', 'Balai Wilayah Sungai Sulawesi IV Kendari', 28, 2),
        (61, '06498317', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Sulawesi IV Provinsi Sulawesi Tenggara', 28, 2),
        (62, '06634011', 'Balai Besar Wilayah Sungai Pompengan-Jeneberang', 29, 2),
        (63, '06498307', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Pompengan-Jeneberang Provinsi Sulawesi Selatan', 29, 2),
        (64, '06633991', 'Balai Wilayah Sungai Maluku', 30, 2),
        (65, '06498337', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Maluku Provinsi Maluku', 30, 2),
        (66, '06633993', 'Balai Wilayah Sungai Maluku Utara', 31, 2),
        (67, '06498637', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Maluku Provinsi Maluku Utara', 31, 2),
        (68, '06634002', 'Balai Wilayah Sungai Papua', 32, 2),
        (69, '06498347', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Papua Provinsi Papua', 32, 2),
        (70, '06255163', 'Balai Wilayah Sungai Papua Merauke', 33, 2),
        (71, '06498349', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Papua Provinsi Papua-Merauke', 33, 2),
        (72, '06634005', 'Balai Wilayah Sungai Papua Barat', 34, 2),
        (73, '06498357', 'SNVT Pelaksanaan Jaringan Pemanfaatan Air Papua Provinsi Papua Barat', 34, 2);");
    }
}
