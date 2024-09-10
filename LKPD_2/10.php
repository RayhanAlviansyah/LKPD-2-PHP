<?php
// operator === di gunakan untuk mengecek dan membandingkan konten dan tipe
    function cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar) {

        $jumlahSoal = count($jawabanBenar);
        $jumlahBenar = 0;
    

        for ($i = 0; $i < $jumlahSoal; $i++) /*Loop untuk memeriksa setiap jawaban*/ {
            if ($jawabanSiswa[$i] === $jawabanBenar[$i]) /* Membandingkan jawaban siswa dengan jawaban yang benar*/{
                $jumlahBenar++;
            }
        }
    
        $jumlahSalah = $jumlahSoal - $jumlahBenar;
    
        return [ // Mengembalikan hasil dalam bentuk array asosiatif yang berisi nama siswa, jumlah jawaban benar, dan jumlah jawaban salah.
            'nama' => $namaSiswa,
            'jumlah_benar' => $jumlahBenar,
            'jumlah_salah' => $jumlahSalah
        ];
    }
    
    $namaSiswa = "Budi";
    $jawabanSiswa = ['A', 'D', 'C', 'D', 'A'];
    $jawabanBenar = ['A', 'C', 'C', 'D', 'A'];
    
    $hasil = cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
    
    echo "Nama Siswa: " . $hasil['nama'] . "<br>";
    echo "Jumlah Jawaban Benar: " . $hasil['jumlah_benar'] . "<br>";
    echo "Jumlah Jawaban Salah: " . $hasil['jumlah_salah'] . "<br>";
    
?>