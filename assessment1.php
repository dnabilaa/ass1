<?php

$user = array(
    "satu" => array(
    "nama"          => "Arsene Lupin",
    "no_pesanan"    => "1234",
    "pembayaran"    => "100000",
    "tgl_bayar"     => "1902-03-23",
    "kamar"         => "202" ),

    "dua"  => array(
    "nama"         => "Sherlock Holmes",
    "no_pesanan"    => "4321",
    "pembayaran"    => "300000",
    "tgl_bayar"    => "1902-03-23",
    "kamar"         => "308" 
    ),

    "tiga" => array(
    "nama"          => "Irene Adler",
    "no_pesanan"    => 4444,
    "pembayaran"    => 450000,
    "tgl_bayar"    => "1902-03-23",
    "kamar"         => 810 )
    
     
    );

    
 
    $keyword = "Irene Adler";
    $ketemu  = FALSE;
    for($i=0;$i<count($user);$i++) {
        if($user[$i]["nama"] == $keyword){
            $ketemu = TRUE;
            break;
        }
    }
    
    if($ketemu == TRUE){
        echo "Keyword $keyword berhasil ditemukan";
    }
    else{
        echo "Nama atau no pesanan tidak ada dalam daftar";
    }
    
    $y=0;
    $n=0;
    
    foreach($user as $u){
    if(strtoupper($u["nama"]) == strtoupper($namaorang)){
    $y=1;
    $n=$u;
    } 
    }
    
    echo "<table border='3'>";
        echo "<thead>
              <th>Nama</th>
              <th>NoPemesanan</th>
              <th>Pembayaran</th>
              <th>TglBayar</th>
              <th>Kamar</th>
              </thead>";
        
        for($x=0;$x<count($user);$x++){
            echo "<tr>";
            echo "<td>".$user[$x]['nama']."</td>";
            echo "<td>".$user[$x]['no_pesanan']."</td>";  
            echo "<td>".$user[$x]['pembayaran']."</td>";  
            echo "<td>".$user[$x]['tgl_bayar']."</td>"; 
            echo "<td>".$user[$x]['kamar']."</td>";  
            echo "</tr>";
        }
    
    
    ?>
    <br>
    


?>
    