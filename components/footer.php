<div class="footer">
    <div class="container">
        <ul>
            <li class="menu-item"><a href="../contents/home.php" id="<?php echo ($title == "Home" ? "active" : "") ?>">Home</a></li>
            <li class="menu-item"><a href="../contents/about.php" id="<?php echo ($title == "About" ? "active" : "") ?>">About</a></li>
            <li class="menu-item"><a href="../contents/contact.php" id="<?php echo ($title == "Contact" ? "active" : "") ?>">Contact me</a></li>
            <li class="menu-item"><a href="../contents/profile.php" id="<?php echo ($title == "Profile" ? "active" : "") ?>">Profile</a></li>
            <li class="menu-item"><a href="../contents/schedule.php" id="<?php echo ($title == "Schedule" ? "active" : "") ?>">My schedule</a></li>
        </ul>
        <hr>
        <p class="footer-text">© 2004 Achdian</p>
    </div>
</div>

<script>
    const storedName = window.localStorage.getItem('name');
    
    if (storedName) {
        document.getElementById('getName').innerText = storedName;
    } else {
        document.getElementById('getName').innerText = "Nama tidak ditemukan!";
    }

    
    function logout(){
        // var logout = window.localStorage.removeItem('name');
        alert("berhasil logout");
        window.location.href = "../index"
        console.log("berhasil di hapus");
    
    }
</script>
</body>

</html>