<?php
// Fungsi untuk membentuk piramida palindrome
function palindromePyramid($num) {
    for ($i = 1; $i <= $num; $i++) {
        // Spasi sebelum angka untuk membuat bentuk piramida
        for ($j = $i; $j < $num; $j++) {
            echo "&nbsp;&nbsp;";
        }

        // Membentuk bagian kiri dari palindrome
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }

        // Membentuk bagian kanan dari palindrome
        for ($j = $i - 1; $j >= 1; $j--) {
            echo $j;
        }

        // Pindah ke baris berikutnya
        echo "<br>";
    }
}

// Input dari pengguna
if (isset($_POST['submit'])) {
    $inputNumber = $_POST['number'];
    if (is_numeric($inputNumber) && $inputNumber > 0) {
        palindromePyramid($inputNumber);
    } else {
        echo "Harap masukkan angka positif.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramid Palindrome</title>
</head>
<body>
    <h1>Piramid Palindrome</h1>
    <form method="post">
        <label for="number">Masukkan angka: </label>
        <input type="number" name="number" id="number" min="1" required>
        <button type="submit" name="submit">Tampilkan</button>
    </form>

    <?php
    if (isset($inputNumber)) {
        echo "<h2>Hasil Piramid Palindrome:</h2>";
        palindromePyramid($inputNumber);
    }
    ?>
</body>
</html>
