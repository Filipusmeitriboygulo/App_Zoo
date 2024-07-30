<?php
// Pastikan untuk menambahkan autoload file jika menggunakan Composer
require_once __DIR__ . '/vendor/autoload.php';

// Jika tidak menggunakan Composer, pastikan untuk meng-include library Midtrans secara manual
// require_once dirname(__FILE__) . '/pathofproject/Midtrans.php';

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-OntdCcvk7QyWMVYlJRhf4JpH';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$tanggal = $_POST['tanggal'];
$jumlah = (int) $_POST['jumlah'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$kontak = $_POST['kontak'];
$harga = 60000;

$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => $harga * $jumlah,
    ),
    'customer_details' => array(
        'first_name' => $nama,
        'email' => $email,
        'phone' => $kontak,
    ),
    'item_details' => array(
        array(
            'id' => 'a1',
            'price' => $harga,
            'quantity' => $jumlah,
            'name' => $tanggal
        )
    ),
    "callbacks" => array(
        "finish" => "http://localhost/App_Zoo_Clone/tiket.php"
    )
);

try {
    $snapToken = \Midtrans\Snap::getSnapToken($params);
    echo $snapToken;
} catch (Exception $e) {
    echo $e->getMessage();
}
