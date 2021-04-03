@extends('layouts.master-guest')

@section('title', 'Paket Wisata Malang')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('mlg')

<body>
    <div class="mt-4 background">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2">
                <h4 style="color: white">Daftar Tarif Harga Paket Tour Wisata Malang</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('guest.share')
    </div>
    <div class="center mt-5">
        <img class="center" src="/images/mlg.jpg" width="900" height="500">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white;">
        <p>sumber :
            https://www.kompasiana.com/tentangdiriku/570333dace7e61740790ca0e/ini-dia-perbedaan-kota-malang-dengan-kota-pendidikan-lain-di-indonesia?page=all
        </p>
    </div>
    <h4 class="mt-4" style="text-align: center">
        Tentang Malang
    </h4>
    <p style="color: white" class="mt-4">
        Malang, adalah salah satu kabupaten dan kota di Jawa Timur yang terletak di dataran tinggi, berjarak 90 Km dari
        Kota Surabaya. Karena letaknya yang tinggi, kota ini memiliki udara yang sejuk dan nyaman untuk dikunjungi.
    </p>
    <p style="color: white" class="mt-3">
        Malang merupakan kota terbesar kedua di Jawa Timur setelah Surabaya, dan dikenal dengan julukan kota pelajar,
        atau banyak juga yang menjuluki sebagai Kota Bunga. Tidak bisa dipungkiri, karena lokasi alam yang dingin serta
        banyak lahan yang masih hijau, kota Malang pantas pula di juluki sebagai Kota Bunga. Disamping itu, beberapa
        obyek dengan tema agrowisata
        banyak dijumpai di Malang.
    </p>
    <p style="color: white" class="mt-4">
        Anda bisa melakukan perjalanan wisata maupun tour di Malang dengan cara mudah tanpa harus tersesat
        karena
        tidak mengetahui arah tujuan spot wisata terbaik yang ada di Malang, karena bisa dikatakan
        obyek
        tempat
        wisata di Malang sangat banyak, dengan pilihan menggunakan jasa agen tour Malang bisa menjadi solusi
        terbaik
        untuk menetukan paket wisata
        sehingga perjalanan jauh lebih mudah anda tinggal memilih jenis paket tour yang anda maupun peserta kehendaki
        khususnya di wilayah Malang.
    </p>
    <div class="mt-5">
        <img class="center" src="/images/mlg2.jpg" width="950" height="600">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white">
        <p>sumber :
            https://travel.kompas.com/read/2020/12/23/112849227/persiapan-kota-malang-sambut-libur-panjang-hotel-ganjil-genap
        </p>
    </div>
    <div class="container row ml-auto">
        <div class="mt-4 bek">
            <div class="container">
                <div class="container mt-2">
                    <h4 style="color: white; font-size: x-large">Daftar Tempat Wisata Malang dan Sekitarnya</h4>
                </div>
            </div>
        </div>
        <div class="container mt-2 ml-4" style="color: white">
            <p>1. Kampung Warna-warni Jodipan</p>
            <p>2. Kampung Biru Arema</p>
            <p>3. Kampung 3D</p>
            <p>4. Alun-alun Kota Malang</p>
            <p>5. Taman Trunojoyo</p>
            <p>6. Taman Balai Kota Malang</p>
            <p>7. Hawai Waterpark</p>
            <p>8. Malang Night Paradise</p>
            <p>9. Kebun Teh Wonosari</p>
            <p>10. Florawisata San Terra de Lafonte</p>
            <p>11. Desa Wisata Pujon Kidul</p>
            <p>12. Taman Kelinci Pujon</p>
            <p>13. Boonpring Andeman</p>
            <p>14. Taman Rekreasi Sengkaling</p>
            <p>15. Jawa Timur Park 1 (Jatim Park 1)</p>
            <p>16. Jawa Timur Park 2 (Jatim Park 2)</p>
            <p>17. Jawa Timur Park 3 (Jatim Park 3)</p>
            <p>18. The Bagong Adventure Museum Tubuh</p>
            <p>19. Batu Night Spectacular</p>
            <p>20. Alun-alun Kota Batu</p>
            <p>21. Taman Selecta</p>
            <p>22. The Onsen Hot Spring Resort</p>
            <p>23. Kawasan Kusuma Agrowisata</p>
            <p>24. Museum Angkut</p>
            <p>25. Lumbung Stroberi Batu</p>
        </div>
    </div>
    <div class="container row ml-auto">
        <div class="mt-4 bek">
            <div class="container">
                <div class="container mt-2">
                    <h4 style="color: white">Fasilitas Travel Melia</h4>
                </div>
            </div>
        </div>
        <div class="container mt-4" style="color: white">
            <ul>
                <li class="container">Driver berpengalaman dan ramah</li>
                <li class="container">Sudah termasuk BBM , Parkir, Toll dan retribusi</li>
                <li class="container">Akomodasi Penginapan, Homestay , Villa, Hotel di Bandung</li>
                <li class="container">Tour leader dan guide untuk tour rombongan</li>
                <li class="container">Tiket semua obyek wisata yang di kunjungi</li>
                <li class="container">Makan sesuai dengan jadwal (custom)</li>
                <li class="container">Dokumentasi</li>
                <li class="container">P3K</li>
            </ul>
        </div>
    </div>
    <div class="container row ml-auto">
        <div class="mt-4 bek">
            <div class="container">
                <div class="container mt-2">
                    <h4 style="color: white">Yang Tidak Termasuk Fasilitas Travel Melia</h4>
                </div>
            </div>
        </div>
        <div class="container mt-4" style="color: white">
            <ul>
                <li class="container">Pengeluaran pribadi selama tour</li>
                <li class="container">Transportasi dari & ke kota asal</li>
                <li class="container">Asuransi di luar tiket</li>
                <li class="container">Biaya keperluan pribadi ( Makan di luar include, Toilet, Sewa Alat dll )</li>
                <li class="container">Tipping untuk Guide</li>
            </ul>
        </div>
    </div>
    <div class="container row  ml-auto">
        <div class="m-3 bek">
            <div class="container">
                <div class="container mt-2">
                    <h4 style="color: white">Harga Paket Wisata Malang</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt-4 col-5">
                <table table-bordered class="table" style="color: white">
                    <thead>
                        <tr>
                            <th>Jenis Paket Wisata</th>
                            <th>Tarif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Paket One Day / City Tour Malang</td>
                            <td>Rp. 400.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Malang 2 Hari 1 Malam</td>
                            <td>Rp. 700.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Malang 3 Hari 2 Malam</td>
                            <td>Rp. 1.000.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Family Gathering</td>
                            <td>Rp. 3.000.000 / 5 Orang</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4 background">
            <div class="trans" style="border-radius: 15px">
                <div class="container mt-2" style="text-align: center">
                    <h5 style="color: white">*Catatan : Harga sewaktu-waktu dapat berubah, harap hubungi admin Melia
                        untuk
                        info lengkapnya.</h5>
                </div>
            </div>
        </div>
        <div class="mt-4 background">
            <div class="trans" style="border-radius: 15px">
                <div class="container mt-2" style="text-align: center">
                    <h5 style="color: white">*Catatan : Untuk wisata / daerah lain yang ingin dikunjungi, silahkan
                        hubungi admin Melia.</h5>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('guest.footer')
</body>

@endsection