@extends('layouts.master-guest')

@section('title', 'Paket Wisata Banyuwangi')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('bwi')

<body>
    <div class="mt-4 background">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2">
                <h4 style="color: white">Daftar Tarif Harga Paket Tour Wisata Banyuwangi</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('guest.share')
    </div>
    <div class="center mt-5">
        <img class="center" src="/images/bwi.jpg" width="900" height="500">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white;">
        <p>sumber :
            https://www.javatravel.net/tempat-wisata-banyuwangi</p>
    </div>
    <h4 class="mt-4" style="text-align: center">
        Tentang Bayuwangi
    </h4>
    <p style="color: white" class="mt-4">
        Kabupaten Banyuwangi, terletak di ujung paling Timur pulau Jawa dan berbatasan langsung dengan Kabupaten
        Situbondo di utara, selat Bali di Timur, Samudra Hindia di selatan serta Kabupaten Jember dan Kabupaten
        Bondowoso di barat. Dengan beribukotakan Banyuwangi, pelabuhan Ketapang adalah pelabuhan yang menghubungkan
        pulau Jawa di Banyuwangi dengan pelabuhan Gilimanuk di Bali.
    </p>
    <p style="color: white" class="mt-3">
        Ibukota Kabupaten Banyuwangi berjarak 239 km sebelah timur Surabaya, dan dihuni oleh beragam suku bangsa.
        Mayoritas penduduk lokal Banyuwangi adalah suku Osing yang dipercaya merupakan sub-suku Jawa, dan suku lain yang
        hidup dengan damai seperti, suku Madura, suku Jawa, Bali dan Bugis.
    </p>
    <p style="color: white" class="mt-4">
        Anda bisa melakukan perjalanan wisata maupun tour di Kabupaten Banyuwangi dengan cara mudah tanpa harus tersesat karena
        tidak mengetahui arah tujuan spot wisata terbaik yang ada di Kabupaten Banyuwangi, karena bisa dikatakan obyek tempat
        wisata di Bandung sangat banyak, dengan pilihan menggunakan jasa agen tour Banyuwangi bisa menjadi solusi terbaik
        untuk menetukan paket wisata
        sehingga perjalanan jauh lebih mudah anda tinggal memilih jenis paket tour yang anda maupun peserta kehendaki
        khususnya di wilayah Kabupaten Banyuwangi dan sekitarnya.
    </p>
    <div class="mt-5">
        <img class="center" src="/images/bwi2.jpg" width="950" height="600">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white">
        <p>sumber :
            https://www.hipwee.com/travel/arek-jawa-timur-pasti-tahu-misteri-alas-purwo-banyuwangi-hutan-yang-paling-angker-se-pulau-jawa/
        </p>
    </div>
    <div class="container row ml-auto">
        <div class="mt-4 bek">
            <div class="container">
                <div class="container mt-2">
                    <h4 style="color: white; font-size: x-large">Daftar Tempat Wisata Bandung</h4>
                </div>
            </div>
        </div>
        <div class="container mt-2 ml-4" style="color: white">
            <p>1. Air Terjun Lider</p>
            <p>2. Taman Nasional Baluran</p>
            <p>3. Teluk Biru</p>
            <p>4. Jembatan Selfie Kalilo</p>
            <p>5. Mirah Fantasia</p>
            <p>6. Kawah Ijen</p>
            <p>7. Pura Agung Blambangan</p>
            <p>8. Pulau Tabuhan</p>
            <p>9. Umbul Bening</p>
            <p>10. Rumah Apung Bangsring</p>
            <p>11. Watu Dodol</p>
            <p>12. Jawatan Benculuk</p>
            <p>13. Mangrove Bedul Ecotourism</p>
            <p>14. Lori Wisata Kalibaru</p>
            <p>15. Air Terjun Jagir/p>
            <p>16. Bukit Mondoleko</p>
            <p>17. Pantai Trianggulasi</p>
            <p>18. Rumah Kurcaci Glenmore</p>
            <p>19. Pantai Parang Kursi</p>
            <p>20. Desa Wisata Osing Kemiren</p>
            <p>21. Rowo Bayu</p>
            <p>22. Pantai Boom</p>
            <p>23. Pantai Bangsring</p>
            <p>24. Air Terjun Kampung Anyar</p>
            <p>25. Alas Purwo</p>
            <p>26. Puncak Asmoro</p>
            <p>27. Teluk Hijau</p>
            <p>28. Pantai Plengkung</p>
            <p>29. Pulau Merah</p>
            <p>30. Gunung Raung</p>
            <p>31. Waduk Sidodadi Glenmore</p>
            <p>32. Dialoog Banyuwangi</p>
            <p>33. Taman Sritanjung</p>
            <p>34. Pantai Sukamade</p>
            <p>35. Pantai Wedi Ireng</p> 
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
                    <h4 style="color: white">Harga Paket Wisata Bandung</h4>
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
                            <td>Paket One Day / City Tour Banyuwangi</td>
                            <td>Rp. 400.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Banyuwangi 2 Hari 1 Malam</td>
                            <td>Rp. 700.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Banyuwangi 3 Hari 2 Malam</td>
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
                    <h5 style="color: white">*Catatan : Untuk wisata / daerah lain yang ingin dikunjungi, silahkan hubungi admin Melia.</h5>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('guest.footer')
</body>


@endsection