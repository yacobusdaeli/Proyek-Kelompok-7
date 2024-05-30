<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <h1> Kalkulator Keren </h1>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <input type="number" name="angka1" placeholder="Angka pertama" required>
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <input type="number" name="angka2" placeholder="Angka kedua" required>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        if ($operasi == 'tambah') {
            $hasil = $angka1 + $angka2;
        } elseif ($operasi == 'kurang') {
            $hasil = $angka1 - $angka2;
        } elseif ($operasi == 'kali') {
            $hasil = $angka1 * $angka2;
        } elseif ($operasi == 'bagi') {
            if ($angka2 != 0) {
                $hasil = $angka1 / $angka2;
            } else {
                $hasil = 'Error: Pembagian dengan nol';
            }
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>

</html>