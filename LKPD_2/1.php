<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Analisis Teks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 max-w-md w-full">
        <form action="" method="POST" class="mb-4">
            <label for="textInput" class="block text-lg font-medium text-blue-700 mb-2">Masukkan Teks:</label>
            <input type="text" id="textInput" name="inputText" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan teks di sini" required>
            <button type="submit" class="mt-3 w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 transition duration-300">Kirim</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Text = $_POST['inputText'];

            $symbols = "";

            for ($i = 0; $i < strlen($Text); $i++) {
                $char = $Text[$i]; 
                if (ctype_punct($char)) {
                    $symbols .= $char . " ";
                }
            }

            echo "<p class='text-xl font-bold text-blue-700'>Teks: " . htmlspecialchars($Text) . "</p>";

            if ($symbols) {
                echo "<p class='text-md text-black'>Simbol yang ditemukan: " . htmlspecialchars($symbols) . "</p>";
            } else {
                echo "<p class='text-md text-black'>Tidak ada simbol yang ditemukan.</p>";
            }
        }
        ?>
    </div>

</body>
</html>
