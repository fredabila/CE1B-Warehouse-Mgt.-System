<?php
session_start();
?>

<div class="navbar">
    <img src="images/image2.png" class="logo">
    <ul id="dropdownclick" class="topnav">
        <li><a href="/">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="functions/logout.php">Log out</a></li>
        <?php else: ?>
            <li><a href="login.html">Login</a></li>
        <?php endif; ?>
        <li class="dropdown"><a href="javascript:void(0);" onclick="dropdownmenu()">&#9776;</a></li>
    </ul>
</div>

<script>
    function dropdownmenu() {
        var x = document.getElementById("dropdownclick");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>