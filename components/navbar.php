<!-- start navbar -->
<nav class="navbar" id="navbar">
    <div class="navbar-collaps">
        <div class="navbar-brand">
            <button class="btn btn-violet" onclick="mode()">
                <span id="text">light</span>
            </button>
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
            <button onclick="logout()" class="btn btn-violet">Logout</button>
        </div>
    </div>
</nav>
<!-- end navbar -->