<html>

<head>
  <title>Rincian Penyewaaan Mobil</title>
  <style type="text/css">
    .style2 {
      font-size: large
    }

    .style3 {
      font-size: xx-large;
      font-weight: bold;
      color: black;
    }
  </style>
</head>

<body style='background-color: palegreen;'>
  <form method="post" action="inputmobil.php">
    <div align="center">
      <p class="style3">Rincian Penyewaan Mobil</p>
    </div>
    <table width="627" height="307" border="5" align="center" class="bg-dark">
      <tr>
        <td width="576" height="301">
          <p align="center"><span class="style4 style2"><strong>Rincian Penyewaan Mobil</strong></span></p>
          <p align="center">&nbsp;</p>
          <p>&nbsp;</p>
          <blockquote>

            <body>
              <?php
              $VehichleBrand = $_POST['VehichleBrand'];
              if ($VehichleBrand == "BMW") {
                $CarPrice = 1000000;
              } else if ($VehichleBrand == "Mercedez Benz") {
                $CarPrice = 1200000;
              } else if ($VehichleBrand == "Alphard") {
                $CarPrice = 700000;
              } else if ($VehichleBrand == "Odyssey") {
                $CarPrice = 500000;
              } else if ($VehichleBrand == "Land Cruizer") {
                $CarPrice = 1500000;
              } else if ($VehichleBrand == "Lexus RX") {
                $CarPrice = 1000000;
              }
              $periodTime = $_POST['periodTime'];
              $totalprice = $CarPrice * $periodTime;
              ?>

              <table>
                <tr>
                  <td>Biaya Sewa: </td>
                  <td>Rp. <?php echo $totalprice; ?></td>
                </tr>
      </tr>
      <tr>
        <td>
      <tr>
        <td>Lama Sewa:</td>
        <td><?php echo $periodTime; ?> hari</td>
      </tr>
      <tr>
    </table>
    <form action="inputmobil.php"><input type="submit" value="back"></form>
    </div>
</body>

</html>