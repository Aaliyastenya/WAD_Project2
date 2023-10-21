<!DOCTYPE html>
<html>
<head>
    <title>LATIHAN 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>LATIHAN 2</h1>

        <form method="post" action="hitung.php">
            <!-- Input Angka -->
            <div class="form-group">
                <label for="angka">Angka:</label>
                <input type="number" class="form-control" id="angka" name="angka" required>
            </div>
            <!-- Akhir Input Angka -->

            <!-- Input dropdown -->
            <div class="form-group">
                <label for="operasi">Operasi:</label>
                <select class="form-control" id="operasi" name="operasi">
                    <option value="tambah">Tambah</option>
                    <option value="kurang">Kurang</option>
                    <option value="kali">Kali</option>
                    <option value="bagi">Bagi</option>
                </select>
            </div>
            <!-- Akhir Input dropdown -->

            <!-- Button -->
            <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
            <!-- Akhir Button -->
        </form>
    </div>
</body>
</html>