<html>

<head>
  <title>Ini PHP Saya</title>
</head>

<body>
  <!-- Saya Budi -->
  <?php 
    // int k = 10;
    // int s = 20;
    // int t = k+s;
    // system.out.println(t);

    // $s = "Tina";
    // $t ="Dika";
    // $k = $s+$t;
    // echo $k

    // $i = "10";
    // $k = "10";

    // if($i===$k){
    //   echo"Benar";
    // }else{
    //   echo "Salah";
    // }

    //kenapa salah?
    //perbedaan == dengan ===?
    //

    $i = "10";
    $k = 10;
    // for($i=0;$i<$k;$i++){
    //   echo $i."<br/>";
    // }

    //genap
    for ($i=1; $i <= 10; $i++){ // Mengulang selama 10 kali yang di mulai dari angka 1
      if ( $i % 2 == 0 ){ // Mengecek apakah bilangan itu dibagi 2 sisa 0 
        echo " ".$i; // Jika benar bilangan itu di bagi 2 sisa 0 maka menampilkan bilangan itu, yang dipisahkan oleh string kosong 
      }
    }
    
    //ganjil
    for ($i=1; $i <= 10; $i++){ // Mengulang selama 10 kali yang di mulai dari angka 1
      if ( $i % 2 == 1 ){ // Mengecek apakah bilangan itu dibagi 2 sisa 0 
        echo " ".$i; // Jika benar bilangan itu di bagi 2 sisa 0 maka menampilkan bilangan itu, yang dipisahkan oleh string kosong 
      }
    }
    
    //prima
    for($i=1;$i<=10;$i++){
      $a=0;
      for($j=1;$j<=$i;$j++){
          if($i % $j == 0){
              $a++;
          }
      }
      if($a == 2){
       echo $i.' ';
      }
  }



    $kota="surabaya kota yang panas";
    $banyak = strlen($kota);
    $jumlah_s=0;
    
    for($i=0;$i<$banyak;$i++){
      if($kota[$i]=='s'){
        $jumlah_s++;
      }
    }
    echo "Jumlah a kecil dalam kota : ".$jumlah_s;
        
        
        
     ?>

</body>

</html>