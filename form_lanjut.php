<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>

    <h2>Form Contoh</h2>
    
    <form method="POST" action="proses_lanjut.php">
        
        <label for="buah">Pilih Buah:</label><br>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        
        <br><br>
        
        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        
        <br>
        
        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
        
        <br>
        
        <input type="submit" value="Submit">
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Mengambil nilai dari input 'buah' (Select)
    $selectedBuah = $_POST['buah'];

    // 2. Mengambil nilai dari input 'warna[]' (Checkbox)
    // Cek apakah ada checkbox 'warna' yang dipilih
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = []; // Jika tidak ada yang dipilih, inisialisasi sebagai array kosong
    }

    // 3. Mengambil nilai dari input 'jenis_kelamin' (Radio)
    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    // --- Output Hasil ---

    // Menampilkan hasil dari Select (Buah)
    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    // Menampilkan hasil dari Checkbox (Warna)
    // Cek apakah array $selectedWarna tidak kosong
    if (!empty($selectedWarna)) {
        // Implode digunakan untuk menggabungkan elemen array menjadi string dengan koma
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit. <br>";
    }

    // Menampilkan hasil dari Radio (Jenis Kelamin)
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin . "<br>";
}
?>
