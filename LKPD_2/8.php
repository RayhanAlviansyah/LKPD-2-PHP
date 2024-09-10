    <?php
$jurusan = [
'PPLG',
'HTL',
'KLN',
'PMN',
'pplg',
'htl'
];

$arraypembesar = array_map('strtoupper', $jurusan);//menerapkan fungsi tertentu pada setiap elemen dari array

$arraypengubah = array_unique($arraypembesar);
// print_r digunakan untuk menampilkan informasi tentang suatu variabel dalam bentuk yang mudah dibaca manusia
// mencetak semua nilai dari array yang diberikan beserta nomor indeksnya.
print_r($arraypengubah);
?>