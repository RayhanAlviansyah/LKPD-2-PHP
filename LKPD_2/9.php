<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kombinasi Koin</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 max-w-md w-full">
        <form action="" method="POST" class="mb-4">
            <label for="jumlahUang" class="block text-lg font-medium text-blue-700 mb-2">Masukkan Jumlah Uang:</label>
            <input type="number" id="jumlahUang" name="jumlahUang" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan jumlah uang" required>
            <button type="submit" class="mt-3 w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 transition duration-300">Hitung</button>
        </form>

        <?php
        function cariKoin($jumlah) {
            $koin = [500, 200, 100, 50];
            $hasil = [];

            foreach ($koin as $nilaiKoin) {
                if ($jumlah >= $nilaiKoin) {
                    $jumlahKoin = floor($jumlah / $nilaiKoin);
                    $jumlah -= $jumlahKoin * $nilaiKoin;
                    $hasil[$nilaiKoin] = $jumlahKoin;
                }
            }
            return $hasil;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jumlahUang = $_POST['jumlahUang']; // Mengambil input dari form
            $kombinasiKoin = cariKoin($jumlahUang);

            echo "<p class='text-lg text-blue-700 font-semibold'>Kombinasi koin untuk Rp. " . number_format($jumlahUang, 0, ',', ',') . " adalah:</p>";
            echo "<ul class='list-disc pl-5'>";
            foreach ($kombinasiKoin as $koin => $jumlahKoin) {
                echo "<li class='text-md text-black'>Rp. " . number_format($koin, 0, ',', ',') . ": " . $jumlahKoin . " koin</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>

</body>
</html>
