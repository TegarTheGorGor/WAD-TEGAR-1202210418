<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = "SELECT * FROM shworoom_mobil";
            $result = mysqli_query($connect, $query);
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if($result){
                while ($row = mysqli_fetch_assoc($result)) {
                    $nama_mobil = $row['nama_mobil'];
                    $brand_mobil  = $row['brand_mobil'];
                    $warna_mobil  = $row['warna_mobil'];
                    $tipe_mobil  = $row['tipe_mobil'];
                    $harga_mobil  = $row['harga_mobil'];
                    echo '<tr>
                    <th scope="row">' . $brand_mobil . '</th>
                    <td>' . $nama_mobil . '</td>               
                    <td>' . $brand_mobil . '</td>
                    <td>' . $warna_mobil . '</td>
                    <td>' . $tipe_mobil . '</td>
                    <td>' . $harga_mobil . '</td>
                    </tr>';
                } 
            }
            
    

            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = "SELECT * FROM shworoom_mobil";
            $result = mysqli_query($connect, $query);
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if($result){
                while ($row = mysqli_fetch_assoc($result)) {
                    $nama_mobil = $row['nama_mobil'];
                    $brand_mobil  = $row['brand_mobil'];
                    $warna_mobil  = $row['warna_mobil'];
                    $tipe_mobil  = $row['tipe_mobil'];
                    $harga_mobil  = $row['harga_mobil'];
                    echo '<tr>
                    <th scope="row">' . $brand_mobil . '</th>
                    <td>' . $nama_mobil . '</td>               
                    <td>' . $brand_mobil . '</td>
                    <td>' . $warna_mobil . '</td>
                    <td>' . $tipe_mobil . '</td>
                    <td>' . $harga_mobil . '</td>
                    </tr>';
                } 
            }
            
    

            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
>>>>>>> cc89f4a111e5a797b61f97e875a5cd7a322e8b3f
