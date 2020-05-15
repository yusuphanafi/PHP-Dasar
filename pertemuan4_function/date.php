<?php 
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak berlalu 1 Januari 1970
    // echo time();
    // echo date("d M Y", time()-60*60*24*100);

    // mktime
    // membuat sendiri setik
    // mktime(0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("d M Y", mktime(0,0,0,6,23,1999));

    // strtotime
    echo date("l", strtotime("23 aug 1999"));
?>