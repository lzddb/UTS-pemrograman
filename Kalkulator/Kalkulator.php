<html> 
<head>
    <title>Kalkulator</title> 
</head>
<body> 
    <form action="" method="post">
        <h1>Demo Operator</h1> 
        <h2>Arithmetic</h2> 
        <table border="3"> 
            <tr> 
                <td align="center"><b>Operand Kiri</b></td>
                <td align="center"><b>Operator</b></td> 
                <td align="center"><b>Operand Kanan</b></td> 
                <td align="center"><b></b></td> 
            </tr> 
            <tr>
                <td><input type="text" name="angka1" size="20" /></td> 
                <td>
                    <select name="operasi"> 
                        <option value="*">x</option> 
                        <option value="/">:</option> 
                        <option value="+">+</option> 
                        <option value="-">-</option> 
                        <option value="%">%</option> 
                    </select>
                </td> 
                <td><input type="text" name="angka2" size="20" /></td>
                <td><input type="submit" value="Submit" /></td>
            </tr> 
        </table> 
        
        <?php 
        if (isset($_POST["angka1"]) && isset($_POST["angka2"])) { 
            $angka1 = $_POST["angka1"]; // Mengambil nilai angka1
            $angka2 = $_POST["angka2"]; // Mengambil nilai angka2
            $operasi = $_POST["operasi"]; // Mengambil nilai operasi
            
            $hasil = 0; // Inisialisasi variabel hasil

            if ($operasi == '*') { 
                $hasil = $angka1 * $angka2; // Perkalian
            } elseif ($operasi == '/') { 
                $hasil = $angka1 / $angka2; // Pembagian
            } elseif ($operasi == '+') { 
                $hasil = $angka1 + $angka2; // Penjumlahan
            } elseif ($operasi == '-') { 
                $hasil = $angka1 - $angka2; // Pengurangan
            } elseif ($operasi == '%') { 
                $hasil = $angka1 % $angka2; // Modulus
            } 
            
            echo "<br> Hasilnya = $hasil"; // Menampilkan hasil
        } 
        ?> 
    </form> 
</body> 
</html> 
