<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pertemuan 11</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <?php
  $nama = "Yulia"; //ini variabel nama

  $kumpulanNama = ["Fariq", "Diana", "John"];
  //
  $array2 = [
    "nama" => "fariq",
    "alamat" => "krian",
    "kelas" => "VI B",
    "hobi" => ["Membaca", "Menulis", "Menyanyi"]
  ];

  $siswa = [
    "nama" => "fariq",
    "alamat" => "krian",
    "kelas" => "VI B",
    "hobi" => ["Membaca", "Menulis", "Menyanyi"]
  ];

  //kuis
  $mahasiswa = [
    [
      "nama" => "Yaya",
      "alamat" => "krian",
      "kelas" => "VI B",
      "hobi" => ["Membaca", "Menulis", "Menyanyi"]
    ],
    [
      "nama" => "Yiyi",
      "alamat" => "krian",
      "kelas" => "VI B",
      "hobi" => ["Membaca", "Menulis", "Menyanyi"]
    ],
    [
      "nama" => "Yuyu",
      "alamat" => "krian",
      "kelas" => "VI B",
      "hobi" => ["Membaca", "Menulis", "Menyanyi"]
    ]
  ];


  ?>
  <div class="container">
    <?php echo $kumpulanNama[0];
    echo '<br>'; ?>
    <?php echo $kumpulanNama[1];
    echo '<br>'; ?>
    <?php echo $kumpulanNama[2];
    echo '<br>'; ?>

    <?php
    // var_dump($array2);
    echo "Haii... nama Saya " . $array2['nama']
      . ", " . "Saya Tinggal di" . $array2['alamat']
      . " " . "dan Saya Kelas" . " " . $array2['kelas']
      // . " ," . "Hobi Saya" . $array2['hobi'];
      . ", " . "Hobi Saya" . " " . implode("-", $array2['hobi']);
    // echo $array2['kelas'];
    ?>


    <?php
    echo $kumpulanNama[2];
    echo $nama;
    ?>


    <?php
    echo '<hr>';
    echo '<hr>';
    //foreach ($kumpulanNama as $nama) {
    // echo $nama;
    //  echo '<br>';
    //}



    ?>




    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

    <div class="table">
      <table>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Hobi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $siswa['nama'] ?></td>
            <td><?php echo $siswa['kelas'] ?></td>
            <td><?php echo $siswa['alamat'] ?></td>
            <td><?php echo implode("-", $siswa['hobi']) ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="table">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Hobi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($mahasiswa as $key => $value) {
            $no = $key + 1;
            $nama = $value['nama'];
            $kelas = $value['kelas'];
            $alamat = $value['alamat'];
            $hobi = implode(", ", $value['hobi']);
            echo "<tr>
                    <th scope='row'>$no</th>
                    <td>$nama</td>
                    <td>$kelas</td>
                    <td>$alamat</td>
                    <td>$hobi</td>
                  </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- fungsi div : memberikan padding ke kanan dan ke kiri -->






</body>

</html>