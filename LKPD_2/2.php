<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Total Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 max-w-md w-full">
        <p class='text-lg text-blue-700 font-semibold'>Hari ini hari: <?php echo date('l'); ?></p>
        <p class='text-md text-black mb-4'>Tanggal: <?php echo date('d F Y'); ?></p>

        <form action="" method="POST" class="mb-4">
            <label for="totalPembelian" class="block text-lg font-medium text-blue-700 mb-2">Masukkan Total Pembelian:</label>
            <input type="number" id="totalPembelian" name="totalPembelian" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan total pembelian" required>
            <button type="submit" class="mt-3 w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 transition duration-300">Hitung</button>
        </form>

        <?php
        function hitungTotalPembayaran($totalPembelian) {
            $hari = date('l'); 
            $diskon = 0;

            // Jika hari Selasa, diskon 5%
            if (strtolower($hari) == 'tuesday') {
                $diskon += 0.05;
            }

            // Jika total pembelian lebih dari 100.000, diskon 7%
            if ($totalPembelian > 100000) {
                $diskon += 0.07;
            }

            // Menghitung total setelah diskon
            $totalSetelahDiskon = $totalPembelian - ($totalPembelian * $diskon);
            
            return $totalSetelahDiskon;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalPembelian = $_POST['totalPembelian']; 

            $totalPembayaran = hitungTotalPembayaran($totalPembelian);

            echo "<p class='text-md text-black'>Total Pembelian: Rp " . number_format($totalPembelian, 2, ',', '.') . "</p>";
            echo "<p class='text-md text-black'>Total Pembayaran: Rp " . number_format($totalPembayaran, 2, ',', '.') . "</p>";
        }
        ?>
    </div>

</body>
</html>
