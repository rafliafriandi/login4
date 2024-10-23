<?php
session_start();
if (empty($_SESSION['user']) || empty($_SESSION['pass'])) {
    header("location:login.php");
    exit(); // Make sure to exit after header redirect
} else {
    ?>
    <html>
        <head><title>Dashboard</title></head>
        <body>
            <h1>Dashboard</h1> 
            <h4><?php echo date("l, d F Y"); ?></h4> <!-- Improved date format -->
            <h3>Selamat Datang <?php echo htmlspecialchars($_SESSION['nama']); ?></h3> <!-- Sanitize output -->
            <a href="logout.php">Logout</a>
        </body>
    </html>
    <?php
}
?>
