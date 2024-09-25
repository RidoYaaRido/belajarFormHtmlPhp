<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama = $_POST['nm'] ?? '';
    $username = $_POST['usr'] ?? '';
    $password = $_POST['pass'] ?? '';
    $jenis_kelamin = $_POST['jk'] ?? '';
    $bahasa_pemrograman = [];
    if (isset($_POST['php'])) $bahasa_pemrograman[] = 'PHP';
    if (isset($_POST['py'])) $bahasa_pemrograman[] = 'Python';
    if (isset($_POST['js'])) $bahasa_pemrograman[] = 'JavaScript';
    $kota_asal = $_POST['kosal'] ?? '';
    $pesan = $_POST['pesan'] ?? '';

    // Menampilkan hasil dalam format responsif
    echo "<div class='output-container'>";
    echo "<h2>Hasil Input Form</h2>";
    echo "<table class='responsive-table'>";
    echo "<tr><th>Nama</th><td>: $nama</td></tr>";
    echo "<tr><th>Username</th><td>: $username</td></tr>";
    echo "<tr><th>Password</th><td>: $password</td></tr>";
    echo "<tr><th>Jenis Kelamin</th><td>: $jenis_kelamin</td></tr>";
    echo "<tr><th>Bahasa Pemrograman</th><td>: " . implode(", ", $bahasa_pemrograman) . "</td></tr>";
    echo "<tr><th>Kota Asal</th><td>: $kota_asal</td></tr>";
    echo "<tr><th>Pesan & Kesan</th><td>: $pesan</td></tr>";
    echo "</table>";
    echo "</div>";
} else {
    echo "<p>No data submitted.</p>";
}
?>