<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0268B4;
            margin: 0;
            padding: 0;
        }

        .content {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .intro-y {
            color: #333;
        }

        .about-section {
            margin-top: 20px;
        }

        .about-section h3 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .about-section p,
        .about-section ul {
            margin: 10px 0;
            line-height: 1.6;
        }

        .about-section ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .about-section ul ul {
            list-style-type: circle;
            padding-left: 20px;
        }

        .about-section li {
            margin-bottom: 5px;
        }

        .about-section p a {
            color: #007bff;
            text-decoration: none;
        }

        .about-section p a:hover {
            text-decoration: underline;

        }

        .grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 10px;
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table th {
            background-color: #007bff;
            color: white;
            text-align: left;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Tentang Kami
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                </div>
            </div>
            <?php if (!empty($about)) : ?>
                <!-- Content here -->
            <?php else : ?>
                <div class="about-section">
                    <h3>Voir Beauty</h3>
                    <table>
                        <tr>
                            <th>Nama Klinik</th>
                            <td>Voir Beauty</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>Jl. Bunga Mawar No. 123, Jakarta, Indonesia</td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon</th>
                            <td>+62 21 1234 5678</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><a href="mailto:voir@gmail.com">voir@gmail.com</a></td>
                        </tr>
                        <tr>
                            <th>Jam Operasional</th>
                            <td>
                                Senin - Jumat: 09.00 - 18.00 WIB<br>
                                Sabtu: 09.00 - 15.00 WIB<br>
                                Minggu dan Hari Libur Nasional: Tutup
                            </td>
                        </tr>
                    </table>

                    <h3>Tentang Kami</h3>
                    <p>Klinik Kecantikan Sehat dan Cantik adalah klinik kecantikan yang berfokus pada perawatan kulit dan tubuh dengan menggunakan teknologi modern dan produk berkualitas tinggi. Kami didukung oleh tim profesional yang berpengalaman dan berdedikasi untuk memberikan hasil terbaik bagi setiap pelanggan.</p>

                    <h3>Layanan yang Tersedia</h3>
                    <ul>
                        <li>Perawatan Wajah
                            <ul>
                                <li>Facial</li>
                                <li>Mikrodermabrasi</li>
                                <li>Chemical Peel</li>
                                <li>Laser Treatment</li>
                            </ul>
                        </li>
                        <li>Perawatan Tubuh
                            <ul>
                                <li>Body Scrub</li>
                                <li>Body Slimming</li>
                                <li>Massage Therapy</li>
                            </ul>
                        </li>
                        <li>Perawatan Anti-Aging
                            <ul>
                                <li>Botox</li>
                                <li>Filler</li>
                                <li>Thread Lift</li>
                            </ul>
                        </li>
                        <li>Perawatan Khusus
                            <ul>
                                <li>Perawatan Jerawat</li>
                                <li>Perawatan Pigmentasi</li>
                                <li>Perawatan Kulit Sensitif</li>
                            </ul>
                        </li>
                    </ul>

                    <h3>Fasilitas</h3>
                    <ul>
                        <li>Ruang tunggu yang nyaman</li>
                        <li>Ruang perawatan yang bersih dan modern</li>
                        <li>Peralatan canggih dan steril</li>
                        <li>Konsultasi gratis dengan dokter spesialis</li>
                    </ul>
                    <h3>Testimoni Pelanggan</h3>
                    <p>Kami bangga dengan banyaknya testimoni positif dari pelanggan yang puas dengan pelayanan dan hasil perawatan di klinik kami.</p>

                    <h3>Kontak dan Reservasi</h3>
                    <p>Untuk informasi lebih lanjut atau untuk membuat janji, silakan hubungi kami melalui telepon atau email, atau kunjungi website kami untuk reservasi online.</p>

                    <h3>Media Sosial</h3>
                    <ul>
                        <li>Facebook: @voirbeauty</li>
                        <li>Instagram: @voirbeauty</li>
                        <li>Twitter: @voirbeauty</li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>