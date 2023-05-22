<html>
<head>
    <title>Penjualan Handphone GSM</title>
</head>
<body>
    <?php
    // Inisialisasi variabel
    $produk = "produk";
    $ID = $_POST["ID"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $member = $_POST["member"];
    $pembayaran = $_POST["pembayaran"];
    $harga = 0;

    // Array harga produk
    $hargaProduk = array(
        "produk1" => 350000,
        "produk2" => 465000,
        "produk3" => 485000,
        "produk4" => 865000,
        "produk5" => 1624000
    );

    // Menghitung total harga
    if (isset($_POST['produk1'])) {
        $harga += $hargaProduk['produk1'];
    }
    if (isset($_POST['produk2'])) {
        $harga += $hargaProduk['produk2'];
    }
    if (isset($_POST['produk3'])) {
        $harga += $hargaProduk['produk3'];
    }
    if (isset($_POST['produk4'])) {
        $harga += $hargaProduk['produk4'];
    }
    if (isset($_POST['produk5'])) {
        $harga += $hargaProduk['produk5'];
    }

    // Menghitung diskon 10% jika pembeli adalah member
    $diskonMember = 0;
    if ($member == "Ya") {
        $diskonMember = 0.1 * $harga;
    }

    // Menghitung pembayaran akhir setelah diskon
    $pembayaranAkhir = $harga - $diskonMember;
    ?>

    <h1>Info Pembelian</h1>
    <hr>

    Produk yang dibeli : <br>
    <?php
    // Menampilkan produk yang dipilih
    if (isset($_POST['produk1'])) {
        echo $_POST['produk1'] . "<br>";
    }
    if (isset($_POST['produk2'])) {
        echo $_POST['produk2'] . "<br>";
    }
    if (isset($_POST['produk3'])) {
        echo $_POST['produk3'] . "<br>";
    }
    if (isset($_POST['produk4'])) {
        echo $_POST['produk4'] . "<br>";
    }
    if (isset($_POST['produk5'])) {
        echo $_POST['produk5'] . "<br>";
    }
    ?><br>

    Nomor ID : <?php
    // Memvalidasi dan menampilkan nomor ID
    if ((trim($ID) == '') || ($ID < 0) || (!preg_match("/^[0-9]/", $ID))) {
        echo "Input ID Anda salah !";
    } else {
        echo $ID;
    }
    ?><br><br>
    ========================================= <br><br>
    Data Customer : <br>
    ID Customer : <?php
    // Memvalidasi dan menampilkan ID Customer
    if (strlen($ID) == 0) {
        echo "Silahkan masukkan ID Anda !";
    } else {
        echo $ID;
    }
    ?><br>

    Nama : <?php
    // Memvalidasi dan menampilkan nama
    if (strlen($nama) == 0) {
        echo "Silahkan masukkan nama Anda !";
    } else {
        echo $nama;
    }
    ?><br>

    Email : <?php
    // Memvalidasi dan menampilkan email
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
        echo "Invalid email !";
    } else {
        echo $email;
    }
    ?><br>

    Alamat : <?php
    // Memvalidasi dan menampilkan alamat
    if (strlen($alamat) == 0) {
        echo "Silahkan masukkan alamat Anda !";
    } else {
        echo $alamat;
    }
    ?><br>

    Member : <?php echo $member ?><br>
    Pembayaran : <?php echo $pembayaran ?><br>
    Total Pembayaran : <?php echo $harga ?><br>
    Diskon Member : <?php echo $diskonMember ?><br>
    Pembayaran Akhir : <?php echo $pembayaranAkhir ?>
    <br>
</body>
</html>
