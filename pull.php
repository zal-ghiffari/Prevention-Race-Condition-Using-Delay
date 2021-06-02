<?php

$seconds = rand(1, 10);
$nanoseconds = rand(100, 1000000000);
time_nanosleep($seconds, $nanoseconds);

include 'functions.php';
$pdo = pdo_connect();

if (isset($_GET['id'])&&isset($_GET['amount'])) {
    $data_pulled = $_GET['amount'];
    $stmt = $pdo->prepare('SELECT * FROM deposit WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $deposit = $stmt->fetch(PDO::FETCH_ASSOC);
    $transaksi = 0;
    if($deposit['amount'] >= $data_pulled){
        $d_now = $deposit['amount'] - $data_pulled;
        $stmt = $pdo->prepare('UPDATE deposit set amount= ? WHERE id = ?');
        $stmt->execute([$d_now, $_GET['id']]);
        echo "success\n";
        #echo "LOG:\n";
        #echo "jumlah saldo stlh diposit = " . $d_now ."\nsaldo sebelumnya = ". $deposit['amount'] ."\njumlah deposit". $data_pulled ."\n\n";
    } else {
        die('Not enough amount');
    }
    
} else {
    die ('No ID specified!');
}

?>