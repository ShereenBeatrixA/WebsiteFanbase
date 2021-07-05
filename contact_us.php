<?php
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $lahir = $_POST['lahir'];
    $jk = $_POST['jk'];
    $lama = $_POST['lama'];
    $favorit = "";
        for ($i=1;$i<=5;$i++)
        {
            $fav = $_POST['fav'.$i];
            if (!empty($fav))
                $favorit .= $fav.", ";
        }
            $pesan = $_POST['pesan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>One Direction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
    <script type="text/javascript">
    alert("Data berhasil di input")
    </script>

<BR>

<div class="container">
    <div class="panel-group">
        <div class="panel panel-success">
            <div class="panel-heading">Hasil Penginputan Data</div>
            <div class="panel-body">

            <table class="table table-striped">
                                    <tbody>
                                      <tr>
                                        <td><b>Nama</b></td>
                                        <td> <?php echo $nama?></td>
                                      </tr>
                                      <tr>
                                        <td><b>Kota</b></td>
                                        <td><?php echo $kota; ?></td>
                                      </tr>
                                      <tr>
                                        <td><b>Email</b></td>
                                        <td><?php echo $email; ?></td>
                                      </tr>
                                      <tr>
                                        <td><b>Tanggal Lahir</b></td>
                                        <td> <?php echo $lahir; ?></td>
                                      </tr>
                                      <tr>
                                        <td><b>Jenis Kelamin</b></td>
                                        <td> <?=$jk?></td>
                                      </tr>
                                      <tr>
                                        <td><b>Lama Menjadi Directioners</b></td>
                                        <td> <?=$lama?></td>
                                      </tr>
                                      <tr>
                                        <td><b>Favorit</b></td>
                                        <td>     <?=$favorit?> </td>
                                      </tr>
                                      <tr>
                                        <td><b>Pesan</b></td>
                                        <td><?=$pesan?></td>
                                      </tr>
                                    </tbody>
                                  </table>

               
            </div>
            <div class="panel-footer">Terima Kasih Sudah Menginput</div>
            
    </div>
    
        </div>
        <div class="form-group">
          <div class="col-sm-10">
          <a href="home.html" class="btn btn-primary danger">Back To Home</a>
          </div>
    </div>
</div>


</body>
</html>

 <Link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
  
<script src="js/bootstrap.min.js"></script>
</body>
</html>