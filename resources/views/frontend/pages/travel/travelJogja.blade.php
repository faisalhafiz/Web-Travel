@extends('layouts.master-guest')

@section('title', 'Paket Wisata Jogjakarta')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('jgj')

<body>
    <div class="mt-4 background">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2">
                <h4 style="color: white">Daftar Tarif Harga Paket Tour Wisata Yogyakarta</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('guest.share')
    </div>
    <div class="center mt-5">
        <img class="center" src="/images/jgj.jpg" width="900" height="500">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white;">
        <p>sumber :
            https://www.kangamir.com/2017/12/31/5-tempat-wisata-unik-dan-tidak-biasa-di-jogjakarta/</p>
    </div>
    <h4 class="mt-4" style="text-align: center">
        Tentang Yogyakarta
    </h4>
    <p style="color: white" class="mt-4">
        Ketika Anda mendengar nama Yogyakarta, Anda akan berpikir tentang keunikan kota di Jawa di Indonesia ini. Kota
        ini disebut unik karena kita bisa melihat berbagai tradisi Jawa yang begitu melekat di kota ini dan
        masyarakatnya, seperti batik (kain dengan corak khusus yang dibuat dengan tangan (dilukis dan dicetak),
        kerajinan perak, pertunjukan wayang, musik tradisional atau gamelan, bahkan makanan khas Yogyakarta yang disebut
        Gudeg! yaitu sayuran yang terbuat dari buah nangka muda
    </p>
    <p style="color: white" class="mt-3">
        Yogyakarta juga merupakan Ibukota Daerah Istimewa Yogyakarta di Jawa yang terkenal dengan Istana Sultan
        Yogyakarta atau Keraton Yogyakarta dimana keluarga Sultan masih tinggal di istana tersebut sampai sekarang .
        Istana ini juga terbuka untuk umum tetapi tidak semua bangunan, hanya beberapa bagian bangunan yang bisa dilihat
        oleh masyarakat.
    </p>
    <p style="color: white" class="mt-4">
        Anda bisa melakukan perjalanan wisata maupun tour di Yogyakarta dengan cara mudah tanpa harus tersesat
        karena
        tidak mengetahui arah tujuan spot wisata terbaik yang ada di Daerah Istimewa Yogyakarta, karena bisa dikatakan obyek
        tempat
        wisata di Yogyakarta sangat banyak, dengan pilihan menggunakan jasa agen tour Yogyakarta bisa menjadi solusi
        terbaik
        untuk menetukan paket wisata
        sehingga perjalanan jauh lebih mudah anda tinggal memilih jenis paket tour yang anda maupun peserta kehendaki
        khususnya di wilayah Daerah Istimewa Yogyakarta dan sekitarnya.
    </p>
    <div class="mt-5">
        <img class="center" src="/images/jgj2.jpg" width="950" height="600">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white">
        <p>sumber :
            https://travel.okezone.com/read/2020/10/24/408/2298972/liburan-di-yogyakarta-ini-3-tempat-wisata-instagramable-ala-luar-negeri
        </p>
    </div>
    <div class="container row ml-auto">
        <div class="mt-4 bek">
            <div class="container">
                <div class="container mt-2">
                    <h4 style="color: white; font-size: x-large">Daftar Tempat Wisata Yogyakarta dan Sekitarnya</h4>
                </div>
            </div>
        </div>
        <div class="container mt-2 ml-4" style="color: white">
            <p>1. Candi Borobudur</p>
            <p>2. Candi Prambanan</p>
            <p>3. Pantai Indrayanti</p>
            <p>4. Pantai Nglambor</p>
            <p>5. Pantai Pok Tunggal</p>
            <p>6. Jalan Malioboro</p>
            <p>7. Pasar Beringharjo</p>
            <p>8. Benteng Vredeburg Yogyakarta</p>
            <p>9. Museum Ullen Sentalu</p>
            <p>10. Keraton Yogyakarta</p>
            <p>11. Taman Sari Jogja</p>
            <p>12. Museum Gunung Merapi</p>
            <p>13. Pantai Parangtritis</p>
            <p>14. Goa Jomblang</p>
            <p>15. Goa Pindul</p>
            <p>16. Candi Ratu Boko</p>
            <p>17. Kebun Buah Mangunan</p>
            <p>18. Pantai Depok</p>
            <p>19. Pantai Sundak</p>
            <p>20. Hutan Mangrove Kulon Progo</p>
            <p>21. Jogja Bay Pirates Adventure Waterpark</p>
            <p>22. Air Terjun Kedung Pedut</p>
            <p>23. Pantai Sepanjang</p>
            <p>24. Tebing Breksi</p>
            <p>25. Kalibiru Di Kulon Progo</p>
            <p>26. Pantai Goa Cemara</p>
            <p>27. Pantai Glagah</p>
            <p>28. Pantai Krakal</p>
            <p>29. Pantai Siung</p>
            <p>30. Puncak Becici</p>
            <p>31. Hutan Pinus Pengger</p>
            <p>32. Desa Wisata Tembi</p>
            <p>33. Wisata Kaliurang</p>
            <p>34. Taman Sungai Mudal</p>
            <p>35. Pantai Ngandong</p>
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
                    <h4 style="color: white">Harga Paket Wisata Yogyakarta</h4>
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
                            <td>Paket One Day / City Tour Yogyakarta</td>
                            <td>Rp. 400.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Yogyakarta 2 Hari 1 Malam</td>
                            <td>Rp. 700.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Yogyakarta 3 Hari 2 Malam</td>
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