@extends('layouts.master-guest')

@section('title', 'Paket Wisata Pacitan')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('pct')

<body>
    <div class="mt-4 background">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2">
                <h4 style="color: white">Daftar Tarif Harga Paket Tour Wisata Pacitan</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('guest.share')
    </div>
    <div class="center mt-5">
        <img class="center" src="/images/pct.jpg" width="900" height="500">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white;">
        <p>sumber :
            https://www.kompasiana.com/tentangdiriku/570333dace7e61740790ca0e/ini-dia-perbedaan-kota-malang-dengan-kota-pendidikan-lain-di-indonesia?page=all
        </p>
    </div>
    <h4 class="mt-4" style="text-align: center">
        Tentang Pacitan
    </h4>
    <p style="color: white" class="mt-4">
        Beribukotakan Pacitan, Kabupaten pacitan terletak di ujung sebelah barat Jawa Timur. Wilayah kabupaten Pacitan
        berbatasan dengan Kabupaten Ponorogo di utara, Kabupaten Trenggalek di timur, Samudra Hindia di selatan, serta
        Kabupaten Wonogiri, Jawa Tengah, di barat.

        Secara geografi, sebagian besar wilayah Pacitan adalah pegunungan kapur, yang merupakan bagian dari rangkaian
        Pegunungan Kidul. Dengan keadaan tanah tersebut kurang cocok untuk pertanian, terutama padi. Sehingga, ketela
        pohon atau singkong menjadi alternatif sejak dahulu.
    </p>
    <p style="color: white" class="mt-3">
        Hasil pertanian utama Pacitan adalah padi, singkong, cengkeh, kelapa dan kakao yang baru dibudidayakan beberapa
        tahun terakhir. Potensi bahan tambang juga cukup besar di kawasan Pacitan. Terdapat juga kerajinan batu akik
        yang terpusat di kawasan Donorojo, sedikit banyak telah menyumbang nilai penting bagi Pacitan.

        Dari segi pariwisata, Pacitan juga dikenal memiliki beberapa tujuan wisata yang layak untuk dieksplor seperti,
        gua-gua yang indah, pantai, atau obyek wisata buatan lainnya. Selain itu, di daerah pegunungan seringkali
        ditemukan fosil purbakala.
    </p>
    <p style="color: white" class="mt-4">
        Anda bisa melakukan perjalanan wisata maupun tour di Malang dengan cara mudah tanpa harus tersesat
        karena
        tidak mengetahui arah tujuan spot wisata terbaik yang ada di Pacitan, karena bisa dikatakan
        obyek
        tempat
        wisata di Pacitan sangat banyak, dengan pilihan menggunakan jasa agen tour Pacitan bisa menjadi solusi
        terbaik
        untuk menetukan paket wisata
        sehingga perjalanan jauh lebih mudah anda tinggal memilih jenis paket tour yang anda maupun peserta kehendaki
        khususnya di wilayah Pacitan.
    </p>
    <div class="mt-5">
        <img class="center" src="/images/pct2.jpg" width="950" height="600">
    </div>
    <div class="text-center mt-2" style="font-size: small;color: white">
        <p>sumber :
            https://www.idntimes.com/travel/destination/eliza/wisata-alam-paling-hits-di-pacitan-yang-wajib-masuk-bucket-list-kamu-c1c2
        </p>
    </div>
    <div class="container row ml-auto">
        <div class="mt-4 bek">
            <div class="container">
                <div class="container mt-2">
                    <h4 style="color: white; font-size: x-large">Daftar Tempat Wisata Pacitan dan Sekitarnya</h4>
                </div>
            </div>
        </div>
        <div class="container mt-2 ml-4" style="color: white">
            <p>1. Pantai Klayar</p>
            <p>2. Pantai Watu Karung</p>
            <p>3. Monumen Jenderal Sudirman</p>
            <p>4. Pemandian Banyu Anget</p>
            <p>5. Pantai Teleng Ria</p>
            <p>6. Pantai Seruni</p>
            <p>7. Goa Gong</p>
            <p>8. Goa Song Terus</p>
            <p>9. Pantai Kali Uluh</p>
            <p>10. Pantai Taman</p>
            <p>11. Pantai Kunir</p>
            <p>12. Goa Tabuhan</p>
            <p>13. Goa LuwengJaran</p>
            <p>14. Pantai Buyutan</p>
            <p>15. Pantai Karang Bolong</p>
            <p>16. Pantai Tawang</p>
            <p>17. Pantai Soge</p>
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
                    <h4 style="color: white">Harga Paket Wisata Pacitan</h4>
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
                            <td>Paket One Day / City Tour Pacitan</td>
                            <td>Rp. 400.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Pacitan 2 Hari 1 Malam</td>
                            <td>Rp. 700.000 / Pax</td>
                        </tr>
                        <tr>
                            <td>Paket Tour Pacitan 3 Hari 2 Malam</td>
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