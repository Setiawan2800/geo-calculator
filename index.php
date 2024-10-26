<?php
class GeoCalculat {
    // luas persegi panjang
    function luasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    // keliling persegi panjang
    function kelilingPersegiPanjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    // luas persegi
    function luasPersegi($sisi) {
        return $sisi * $sisi;
    }

    // keliling persegi
    function kelilingPersegi($sisi) {
        return 4 * $sisi;
    }

    // luas segitiga
    function luasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    // luas lingkaran
    function luasLingkaran($jariJari) {
        return pi() * $jariJari * $jariJari;
    }

    // keliling lingkaran
    function kelilingLingkaran($jariJari) {
        return 2 * pi() * $jariJari;
    }
}

$hitung = new GeoCalculat();
while (true) {
    echo "Pilih perhitungan yang ingin anda lakukan:\n";
    echo "1. Luas Persegi Panjang\n";
    echo "2. Keliling Persegi Panjang\n";
    echo "3. Luas Persegi\n";
    echo "4. Keliling Persegi\n";
    echo "5. Luas Segitiga\n";
    echo "6. Luas Lingkaran\n";
    echo "7. Keliling Lingkaran\n";
    echo "Masukkan pilihan (1-7): ";
    $pilihanUser = trim(fgets(STDIN));

    switch ($pilihanUser) {
        case '1':
            echo "Masukkan panjang persegi panjang: ";
            $panjang = trim(fgets(STDIN));
            echo "Masukkan lebar persegi panjang: ";
            $lebar = trim(fgets(STDIN));
            echo "Luas Persegi Panjang: " . $hitung->luasPersegiPanjang($panjang, $lebar) . "\n";
            break;

        case '2':
            echo "Masukkan panjang persegi panjang: ";
            $panjang = trim(fgets(STDIN));
            echo "Masukkan lebar persegi panjang: ";
            $lebar = trim(fgets(STDIN));
            echo "Keliling Persegi Panjang: " . $hitung->kelilingPersegiPanjang($panjang, $lebar) . "\n";
            break;

        case '3':
            echo "Masukkan sisi persegi: ";
            $sisi = trim(fgets(STDIN));
            echo "Luas Persegi: " . $hitung->luasPersegi($sisi) . "\n";
            break;

        case '4':
            echo "Masukkan sisi persegi: ";
            $sisi = trim(fgets(STDIN));
            echo "Keliling Persegi: " . $hitung->kelilingPersegi($sisi) . "\n";
            break;

        case '5':
            echo "Masukkan alas segitiga: ";
            $alas = trim(fgets(STDIN));
            echo "Masukkan tinggi segitiga: ";
            $tinggi = trim(fgets(STDIN));
            echo "Luas Segitiga: " . $hitung->luasSegitiga($alas, $tinggi) . "\n";
            break;

        case '6':
            echo "Masukkan jari-jari lingkaran: ";
            $jariJari = trim(fgets(STDIN));
            echo "Luas Lingkaran: " . $hitung->luasLingkaran($jariJari) . "\n";
            break;

        case '7':
            echo "Masukkan jari-jari lingkaran: ";
            $jariJari = trim(fgets(STDIN));
            echo "Keliling Lingkaran: " . $hitung->kelilingLingkaran($jariJari) . "\n";
            break;

        default:
            echo "Pilihan tidak valid\n";
            echo "Silakan masukan sesuai yang tertera di atas ya:)\n";
            continue 2;
    }
    echo "Apakah Anda ingin melakukan perhitungan lain? (y/n): ";
    $lanjut = trim(fgets(STDIN));
    
    if (strtolower($lanjut) !== 'y') {
        echo "Terima kasih telah mencoba\n";
        echo "Kalau ingin menghitung kembali silakan run lagi ya:)\n";
        break;
    }
}
?>
