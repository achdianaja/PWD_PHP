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

<div class="header" id="header">
    <h1>Welcome to My Personal Web</h1>
    <p>explore and enjoy</p>
    <div> Selamat datang <strong id="getName"></strong></div>
</div>

<?php include '../components/navbar.php'; ?>

<main class="container">
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Bahasa Pemrograman</h2>
                <h5>Oct 10, 2024</h5>
                <div class="bhs">
                    <img src="../public/images/java.png" alt="Java" class="modal-img" data-text="Java is a high-level programming language." data-src="../public/images/java.png">
                    <img src="../public/images/c++.png" alt="C++" class="modal-img" data-text="C++ is an object-oriented programming language." data-src="../public/images/c++.png">
                </div>
                <p><strong>Java Dan C++</strong></p>
                <p>Kedua bahasa Pemrograman diatas adalah bahasa yang saya pelajari selama 2 semester di Universitas Langlangbuana dan hingga saat ini saya memahaminya.</p>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <img id="modalImage" src="" alt="" style="width: 50%;">
                        <p id="modalText"></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <h2>HTML & CSS</h2>
                <h5>Oct 10, 2024</h5>
                <div class="bhs">
                    <img src="../public/images/html.png" alt="HTML" class="modal-img" data-text="HTML is the standard markup language for creating web pages." data-src="../public/images/html.png">
                    <img src="../public/images/css.png" alt="CSS" class="modal-img" data-text="CSS is a style sheet language used for describing the presentation of a document." data-src="../public/images/css.png">
                </div>
                <p>Saat ini saya sedang belajar menggunakan html dan css untuk membangun tampilan web yang menarik.</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>About Me</h2>
                <p>Achdian Fahrul Rizki atau biasa dipanggil Iki oleh orang-orang di sekitarnya dikenal memiliki hobi ngetik buku dan bermain futsal. Saya lahir... <a href="about.html">Selengkapnya</a></p>
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
                    <img src="../public/images/whatsapp.png" alt="WhatsApp">
                    <img src="../public/images/instagram.png" alt="Instagram">
                    <img src="../public/images/facebook.png" class="fb" alt="Facebook">
                </div>
                <p style="margin-top: 20px;"><a href="contact.html" class="btn btn-violet">Contact me</a></p>
            </div>
        </div>
    </div>
</main>

<script>
    var modal = document.getElementById("myModal");
    var modalImage = document.getElementById("modalImage");
    var modalText = document.getElementById("modalText");
    var span = document.getElementsByClassName("close")[0];

    var images = document.getElementsByClassName("modal-img");
    for (var i = 0; i < images.length; i++) {
        images[i].onclick = function() {
            modal.style.display = "block";
            modalImage.src = this.getAttribute('data-src');
            modalText.innerHTML = this.getAttribute('data-text');
        }
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<?php include '../components/footer.php'; ?>
