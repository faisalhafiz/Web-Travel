@extends('layouts.master-guest')

@section('title', 'Paket Wisata Semarang')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('smg')

<body>
    <div class="mt-4 background">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2">
                <h4 style="color: white">Daftar Tarif Harga Paket Tour Wisata Semarang</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('guest.share')
    </div>
    <div class="center mt-5">
        <img class="center" src="/images/smg.jpg" width="900" height="500">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white;">
        <p>sumber :
            https://id.wikipedia.org/wiki/Kota_Semarang
        </p>
    </div>
    <h4 class="mt-4" style="text-align: center">
        Tentang Semarang
    </h4>
    <p style="color: white" class="mt-4">
        Semarang merupakan ibukota provinsi di Jawa Tengah yang saat ini sudah berumur 471 tahun, kota ini lahir pada
        tanggal 2 Mei 1547. Total penduduk Kota Semarang saat ini mencapai 1.570.097 jiwa dengan luas wilayah 373.67
        km2.

        Kota Semarang menjadi kota metropolitan terbesar kelima di Indonesia sesudah Jakarta, Surabaya, Medan, dan
        Bandung. Beberapa wilayah di Semarang pun menjadi wilayah terpadat keempat setelah Jakarta, Surabaya, dan
        Bandung.

        Kota Semarang terletak sekitar 558 km sebelah timur Jakarta, atau 312 km sebelah barat Surabaya, atau 621 km
        sebalah barat daya Banjarmasin dan berbatasan dengan Laut Jawa di utara, Kabupaten Demak di timur, Kabupaten
        Semarang di selatan, dan Kabupaten Kendal di barat.
    </p>
    <p style="color: white" class="mt-3">
        Wilayah Kota Semarang terbagi menjadi 2 yaitu Semarang atas dan Semarang Bawah. Dimana wilayah Semarang Bawah
        merupakan dataran rendah yang sering terkena banjir akibat luapan air laut dan Semarang Atas merupakan dataran
        tinggi sebelah selatan.

        Kota Semarang memiliki penduduk dengan mayoritas suku Jawa, namun terdapat pula suku Sunda, Tionghoa, Pakistan,
        Arab, dan lain sebagainya yang tidak terlalu banyak. Agama yang dianut oleh mayoritas penduduknya yakni Islam.

        Kota Semarang memiliki beberapa julukan salah satunya yaitu Venetië van Java. Alasan dijuluki nama ini karena
        Semarang dilalui banyak sungai di tengah kota seperti di Venesia (Italia), sehingga Belanda menyebut Semarang
        sebagai Venetië van Java.
    </p>
    <p style="color: white" class="mt-4">
        Anda bisa melakukan perjalanan wisata maupun tour di Semarang dengan cara mudah tanpa harus tersesat
        karena
        tidak mengetahui arah tujuan spot wisata terbaik yang ada di Semarang, karena bisa dikatakan
        obyek
        tempat
        wisata di Semarang sangat banyak, dengan pilihan menggunakan jasa agen tour Semarang bisa menjadi solusi
        terbaik
        untuk menetukan paket wisata
        sehingga perjalanan jauh lebih mudah anda tinggal memilih jenis paket tour yang anda maupun peserta kehendaki
        khususnya di wilayah Semarang.
    </p>
    <div class="mt-5">
        <img class="center" src="/images/smg2.jpg" width="950" height="600">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white">
        <p>sumber :
            https://www.pegipegi.com/travel/6-hal-yang-wajib-kamu-lakukan-di-semarang/
        </p>
    </div>
    <div class="container row ml-auto">
        <div class="mt-4 bek">
            <div class="container">
                <div class="container mt-2">
                    <h4 style="color: white; font-size: x-large">Daftar Tempat Wisata Semarang dan Sekitarnya</h4>
                </div>
            </div>
        </div>
        <div class="container mt-2 ml-4" style="color: white">
            <p>1. Kota Lama</p>
            <p>2. Benteng Pandem, Ambarawa</p>
            <p>3. Taman Wilis</p>
            <p>4. Bukit Gombel</p>
            <p>5. Klenteng Sam Poo Kong</p>
            <p>6. Brown Canyon Semarang</p>
            <p>7. Gardu Pandang Lereng Kelir</p>
            <p>8. Pantai Tirang</p>
            <p>9. Air Terjun Kali Pancur</p>
            <p>10. Ayanaz Gedong Songo</p>
            <p>11. Taman Bunga Celosia</p>
            <p>12. Old City Trik 3D Art Museum Semarang</p>
            <p>13. Dusun Semilir</p>
            <p>14. Museum Kereta Api Ambarawa</p>
            <p>15. Semarang Contemporary Art Gallery</p>
            <p>16. Museum Rekor Dunia Indonesia</p>
            <p>17. Museum Lawang Sewu</p>
            <p>18. Pantai Marina</p>
            <p>19. The Hills Dining Restaurant</p>
            <p>20. Umbul Sidomukti</p>
            <p>21. Susan Spa & Resort</p>
            <p>22. Cimory on The Valley</p>
            <p>23. Taman Margasatwa Semarang</p>
            <p>24. Eling Bening</p>
            <p>25. Kampung Pelangi</p>
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
                    <h4 style="color: white">Harga Paket Wisata Semarang</h4>
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
                            <td>Paket One Day / City Tour Semarang</td>
                            <td>Rp. 400.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Semarang 2 Hari 1 Malam</td>
                            <td>Rp. 700.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Semarang 3 Hari 2 Malam</td>
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