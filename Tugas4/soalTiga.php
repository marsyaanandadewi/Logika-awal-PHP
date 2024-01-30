<!-- Data berikut merupakan data apa-apa saja yang Andi beli pada suatu minimarket.
 Dari data tersebut, hitunglah total uang yang perlu Andi bayar untuk membelinya -->

 <?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];

$bayar = 0;
echo "<ol>";
foreach ($barang as $value){
    $hitung = $value['harga_barang'] * $value['jumlah_beli'];
    $bayar += $hitung;
}
echo "Yang harus di bayar Andi adalah = $bayar";

echo"</ol>";
