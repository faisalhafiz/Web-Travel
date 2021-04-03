@extends('layouts.master-guest')

@section('title', 'Paket Wisata Bandung')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('bdg')

<body>
    <div class="mt-4 background">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2">
                <h4 style="color: white">Daftar Tarif Harga Paket Tour Wisata Bandung</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('guest.share')
    </div>
    <div class="center mt-3">
        <img class="center" src="/images/bdg.jpg" width="900" height="500">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white;">
        <p>sumber :
            https://www.republika.co.id/berita/q4jqpw368/jabar-kembali-revitalisasi-gedung-sate-pakuan-dan-saparua</p>
    </div>
    <h4 class="mt-4" style="text-align: center">
        Tentang Bandung
    </h4>
    <p style="color: white" class="mt-5">
        Bandung adalah kota metropolitan terbesar di Provinsi Jawa Barat, sekaligus menjadi ibu kota provinsi tersebut.
        Kota ini
        terletak 140 km sebelah tenggara Jakarta, dan merupakan kota terbesar di wilayah Pulau Jawa bagian selatan.
        Sedangkan wilayah Bandung Raya (Wilayah Metropolitan Bandung) merupakan metropolitan terbesar ketiga di
        Indonesia setelah Jabodetabek dan Gerbangkertosusila.
    </p>
    <p style="color: white" class="mt-3">
        Di kota ini tercatat berbagai sejarah penting, di antaranya sebagai tempat berdirinya sebuah perguruan tinggi
        teknik pertama di Indonesia (Technische Hoogeschool te Bandoeng - TH Bandung, sekarang Institut Teknologi
        Bandung - ITB), lokasi ajang pertempuran pada masa kemerdekaan, serta pernah menjadi tempat berlangsungnya
        Konferensi Asia-Afrika 1955, suatu pertemuan yang menyuarakan semangat anti kolonialisme, bahkan Perdana
        Menteri India Jawaharlal Nehru dalam pidatonya mengatakan bahwa Bandung adalah ibu kotanya Asia-Afrika.
    </p>
    <p style="color: white" class="mt-4">
        Anda bisa melakukan perjalanan wisata maupun tour di Bandung dengan cara mudah tanpa harus tersesat karena
        tidak mengetahui arah tujuan spot wisata terbaik yang ada di Bandung, karena bisa dikatakan obyek tempat
        wisata di Bandung sangat banyak, dengan pilihan menggunakan jasa agen tour Bandung bisa menjadi solusi terbaik
        untuk menetukan paket wisata
        sehingga perjalanan jauh lebih mudah anda tinggal memilih jenis paket tour yang anda maupun peserta kehendaki
        khususnya di wilayah kota Bandung dan sekitarnya.
    </p>
    <div class="mt-5">
        <img class="center" src="/images/bdg2.jpg" width="950" height="600">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white">
        <p>sumber :
            https://www.pikiran-rakyat.com/bandung-raya/pr-011164357/inilah-10-kecamatan-di-kota-bandung-dengan-kasus-positif-aktif-covid-19-tertinggi
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
            <p>1. Farmhouse Lembang</p>
            <p>2. Kebun Teh Sukawana</p>
            <p>3. Pinisi Resto Dan Glamping Lakeside Ciwidey</p>
            <p>4. Curug Cinulang Cicalengka</p>
            <p>5. Curug Tilu Leuwi Opat Lembang</p>
            <p>6. Gunung Tangkuban Perahu</p>
            <p>7. Kawah Putih Ciwidey</p>
            <p>8. Danau Situ Patenggang</p>
            <p>9. Curug Cimahi</p>
            <p>10. Taman Hutan Raya Ir. H. Djuanda </p>
            <p>11. Situ Cisanti Bandung</p>
            <p>12. Maribaya Bandung</p>
            <p>13. Puncak Bintang</p>
            <p>14. Saung Angklung Udjo</p>
            <p>15. Museum Geologi Bandung</p>
            <p>16. Observatorium Bosscha</p>
            <p>17. Factory Outlet Rumah Mode</p>
            <p>18. Tebing Keraton Bandung </p>
            <p>19. Dusun Bambu Lembang</p>
            <p>20. Taman Buru Kareumbi Masigit</p>
            <p>21. Floating Market Lembang</p>
            <p>22. The Lodge Maribaya Bandung</p>
            <p>23. Ciwidey Valley Hot Spring Water Park</p>
            <p>24. Saung Angklung Udjo</p>
            <p>25. Trans Studio Bandung</p>
            <p>26. Taman Balai Kota Bandung</p>
            <p>27. Taman Begonia Lembang</p>
            <p>28. De Ranch Lembang</p>
            <p>29. Kampung Gajah Wonderland</p>
            <p>30. Jendela Alam Lembang</p>
            <p>31. Ranca Upas Ciwidey</p>
            <p>32. Dago Dream Park</p>
            <p>33. Orchid Forest Cikole Lembang</p>
            <p>34. Jalan Braga Bandung</p>
            <p>35. Sanghyang Heuleut</p>
            <p>36. Sendang Geulis Kahuripan</p>
            <p>37. Chinatown Bandung</p>
            <p>38. Grafika Cikole</p>
            <p>39. Rabbit Town Bandung</p>
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
                            <td>Paket One Day / City Tour Bandung</td>
                            <td>Rp. 400.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Bandung 2 Hari 1 Malam</td>
                            <td>Rp. 700.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Bandung 3 Hari 2 Malam</td>
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