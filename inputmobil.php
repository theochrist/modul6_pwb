<html>

<head>
  <title>Menu Penyewaan Mobil♡</title>
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
  <form method="post" action="outputmobil.php">
    <div align="center">
      <p class="style3">SEWA MOBIL KEREN</p>
    </div>
    <table width="627" height="307" border="5" align="center" bgcolor="white">
      <tr>
        <td width="576" height="301">
          <p align="center"><span class="style4 style2"><strong>Hitung Penyewaan Mobil</strong></span></p>
          <p align="center">&nbsp;</p>
          <p>Jenis Kendaraan=
            <select name="TypeCar" id="TypeCar">
              <option value=0 selected>-Pilih Jenis Kendaraan-</option>
              <option value="Sedan">Sedan</option>
              <option value="MPV">MPV</option>
              <option value="SUV">SUV</option>
            </select>
          </p>
          Merk Kendaraan=
          <select name="VehichleBrand" id="VehichleBrand">
            <option value=0 selected>-Pilih Merk Kendaraan-</option>
            <option value="BMW">BMW</option>
            <option value="Mercedez Benz">Mercedez Benz</option>
            <option value="Alphard">Alphard</option>
            <option value="Odyssey">Odyssey</option>
            <option value="Land Cruizer">Land Cruizer</option>
            <option value="Lexus RX">Lexus RX</option>
          </select>
          </p>
          Lama Sewa=
          <input type="text" name="periodTime" id="">
          </p>

          <input type="submit" name="submit" value="Hitung">
          <input type="reset" name="Reset" value="Reset">
          </p>
          </blockquote>
        </td>
      </tr>
    </table>
</body>

</html>