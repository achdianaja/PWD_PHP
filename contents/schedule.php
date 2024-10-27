<?php
$title = 'Schedule';

include '../components/head.php';
include '../components/navbar.php';

?>

<style>
    th,
    td {
        padding: 10px;
    }

    a {
        text-decoration: none;
    }

    table {
        caption-side: bottom;
        border-collapse: collapse;
        width: 100%;
        height: 100%;
    }

    .senin:hover,
    .senin:hover~.senin {
        background-color: rgba(255, 255, 0, 0.5);
    }

    .selasa:hover,
    .selasa:hover~.selasa {
        background-color: rgba(0, 255, 255, 0.5);
    }

    .rabu:hover,
    .rabu:hover~.rabu {
        background-color: rgba(255, 0, 255, 0.5);
    }

    .kamis:hover,
    .kamis:hover~.kamis {
        background-color: rgba(255, 165, 0, 0.5);
    }

    .jumat:hover,
    .jumat:hover~.jumat {
        background-color: rgba(0, 255, 0, 0.5);
    }
</style>

<main class="container">
    <div class="breadcumb">
        <a href="home.php">Home</a> / My schedule
    </div>
    <div class="content-center">
        <table border="1">
            <tr>
                <th colspan="5" style="background-color: blueviolet; color: white;">2024/2025</th>
            </tr>
            <tr style="background-color: violet; color: white;">
                <th>Hari</th>
                <th>Mata Kuliah</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Dosen</th>
            </tr>
            <tr class="senin">
                <td rowspan="2">Senin</td>
                <td>Praktikum Sistem Operasi</td>
                <td>08:30</td>
                <td>09:20</td>
                <td>Bu Wahyu</td>
            </tr>
            <tr class="senin">
                <td>Sistem Operasi</td>
                <td>09:30</td>
                <td>11:20</td>
                <td>Bu Wahyu</td>
            </tr>
            <tr class="selasa">
                <td rowspan="2">Selasa</td>
                <td>Perancangan UI dan UX</td>
                <td>08:00</td>
                <td>10:30</td>
                <td>Pak Ikmal</td>
            </tr>
            <tr class="selasa">
                <td>Sistem Terdistribusi</td>
                <td>11:20</td>
                <td>13:00</td>
                <td>Bu Wahyu</td>
            </tr>
            <tr class="rabu">
                <td rowspan="2">Rabu</td>
                <td>Pemrograman Web Dasar</td>
                <td>08:50</td>
                <td>10:30</td>
                <td>Pak Hadi</td>
            </tr>
            <tr class="rabu">
                <td>Pengantar Keamanan Komputer</td>
                <td>12:10</td>
                <td>14:40</td>
                <td>Pak Awan</td>
            </tr>
            <tr class="kamis">
                <td>Kamis</td>
                <td>Proses Bisnis dan Sistem Informasi</td>
                <td>12:10</td>
                <td>14:40</td>
                <td>Pak Awan</td>
            </tr>
            <tr class="jumat">
                <td>Jumat</td>
                <td>Analisis dan Perancangan Perangkat Lunak</td>
                <td>08:50</td>
                <td>11:20</td>
                <td>Pak Iwan</td>
            </tr>
        </table>
    </div>
</main>

<?php include '../components/footer.php'; ?>