<?php
    // array asosiatif
    $barang = [
        [
            'nama_barang' => 'pasta gigi',
            'harga_barang'=> '18000',
            'jumlah_barang'=>'1',
        ],
        [
            'nama_barang' => 'Sabun Mandi',
            'harga_barang'=> '5000',
            'jumlah_barang'=>'4',
        ],
        [
            'nama_barang' => 'Aloe vera sheet mask',
            'harga_barang'=> '15000',
            'jumlah_barang'=>'4',
        ]
        ];

        $no = 1;
        $total_harga = 0;
        echo "Daftar Barang :";
        // Fungsi Foreach untuk melakukan perulangan nilai array
        foreach ($barang as $br) {
            $nama_barang = $br['nama_barang'];
            $harga_barang = $br['harga_barang'];
            $jumlah_beli = $br['jumlah_barang'];

            $total_barang = $harga_barang * $jumlah_beli; // menyimpan dan memanipulasi harga total dari satu jenis barang
            $total_harga += $harga_barang * $jumlah_beli; // menghitung total harga dari semua barang yang dibeli dalam transaksi tersebut

            echo " <br>";
            echo $no. ". ". $nama_barang. "($jumlah_beli)".": ". number_format($total_barang,0, ',',',');

            $no++;
        }
        echo "<br>";
        echo "Total Harga yang harus dibayar adalah Rp . ". number_format($total_harga,0,',',',');
        ?>