<!-- start navbar -->
<nav class="navbar">
    <div class="navbar-collaps">
        <div class="navbar-brand">
            <h1><a href="home.html">A</a></h1>
        </div>

        <div class="menu">
            <ul>
                <li class="menu-item"><a href="../contents/home.php" id="<?php echo ($title == "Home" ? "active" : "") ?>">Home</a></li>
                <li class="menu-item"><a href="../contents/about.php" id="<?php echo ($title == "About" ? "active" : "") ?>">About</a></li>
                <li class="menu-item"><a href="../contents/contact.php" id="<?php echo ($title == "Contact" ? "active" : "") ?>">Contact me</a></li>
                <li class="menu-item"><a href="../contents/profile.php" id="<?php echo ($title == "Profile" ? "active" : "") ?>">Profile</a></li>
                <li class="menu-item"><a href="../contents/schedule.php" id="<?php echo ($title == "Schedule" ? "active" : "") ?>">My schedule</a></li>
            </ul>
        </div>

        <div class="logout">
            <button onclick="logout()">Logout</button>
            <!-- <a href="../index.php" class="" o  nclick="logout()"><p id="getName"></p>| Logout</a> -->
        </div>
    </div>
</nav>
<!-- end navbar -->