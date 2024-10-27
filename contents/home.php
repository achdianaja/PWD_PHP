<?php
$title = 'Home';

include '../components/head.php';
?>

<style>
    a {
        text-decoration: none;
    }

    table {
        caption-side: bottom;
        border-collapse: collapse;
        width: 100%;
        height: 100%;
    }
</style>

<div class="header">
    <h1>Welcome to My Personal Web</h1>
    <p>explore and enjoy</p>
</div>

<?php include '../components/navbar.php'; ?>

<main class="container">
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Bahasa Pemrograman</h2>
                <h5>Oct 10, 2024</h5>
                <div class="bhs">
                    <img src="../public/images/java.png" alt="">
                    <img src="../public/images/c++.png" alt="">
                </div>
                <p><strong>Java Dan C++</strong></p>
                <p>Kedua bahasa Pemrograman diatas adalah bahasa yang saya pelajari selama 2 semester di Universitas
                    Langlangbuana dan hingga saat ini saya memahaminya</p>
            </div>
            <div class="card">
                <h2>HTML & CSS</h2>
                <h5>Oct 10, 2024</h5>
                <div class="bhs">
                    <img src="../public/images/html.png" alt="">
                    <img src="../public/images/css.png" alt="">
                </div>
                <p>Saat ini saya sedang belajar menggunakan html dan css untuk membangun tampilan web yang menarik
                </p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>About Me</h2>
                <p>Achdian Fahrul Rizki atau biasa dipanggil Iki oleh orang-orang di sekitarnya dikenal memiliki
                    hobi ngetik buku dan bermain futsal. Saya lahir... <a href="about.html">Selengkapnya</a></p>
            </div>
            <div class="card">
                <h3>My Schedule</h3>
                <table border="1" style="font-size: 10px;">
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
                </table>
                <p style="margin-top: 20px;"><a href="schedule.html" class="btn btn-violet">See full</a></p>
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <div class="follow-me">
                    <img src="../public/images/whatsapp.png" alt="">
                    <img src="../public/images/instagram.png" alt="">
                    <img src="../public/images/facebook.png" class="fb" alt="">
                </div>
                <p style="margin-top: 20px;"><a href="contact.html" class="btn btn-violet">Contact me</a></p>
            </div>
        </div>
    </div>

</main>

<?php include '../components/footer.php'; ?>