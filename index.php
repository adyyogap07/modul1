<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Kalkulator</title>
  </head>
  <body>
    <?php
    $hasil = ""; 
    if(isset($_POST['hitung'])){
      $bil1 = $_POST['bil1'];
      $bil2 = $_POST['bil2'];
      $operasi = $_POST['operasi'];
      
      if ($operasi == 'bagi' && $bil2 == 0) {
        $hasil = "Error: Division by zero";
      } else {
        switch ($operasi) {
          case 'tambah':
            $hasil = $bil1 + $bil2;
            break;
          case 'kurang':
            $hasil = $bil1 - $bil2;
            break;
          case 'kali':
            $hasil = $bil1 * $bil2;
            break;
          case 'bagi':
            $hasil = $bil1 / $bil2;
            break;
          case 'modulus':
            $hasil = $bil1 % $bil2;       
        }
      }
    }
    ?>

    <div class="container">
      <div class="row">
        <form method="post" action="">
          <p>Masukan Angka</p>
          <div class="bil">
            <input
              type="text"
              id="angka1"
              placeholder="0"
              size="10" 
              class="bil"
              name="bil1"
            />
            <input
              type="text"
              id="angka2"
              placeholder="0"
              size="10" 
              class="bil"
              name="bil2"
            />
            <b>=</b>
            <input type="text" name="hasil" id="hasil" size="10" class="bil" value="<?php echo $hasil; ?>" /> 
          </div>
          <p>Pilih Operator</p>
            <button type="submit" value="tambah" class="opt" name="operasi">+</button>
            <button type="submit" value="kurang" class="opt" name="operasi">-</button>
            <button type="submit" value="kali" class="opt" name="operasi">x</button>
            <button type="submit" value="bagi" class="opt" name="operasi">/</button>
            <button type="submit" value="modulus" class="opt" name="operasi">Mod</button>
          <input type="hidden" name="hitung"> <!-- Hidden input to trigger calculation -->
        </form>
      </div>
    </div>
  </body>
</html>