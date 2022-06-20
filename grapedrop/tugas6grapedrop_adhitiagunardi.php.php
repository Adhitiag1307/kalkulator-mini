<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <style>
    .body{

    }
  </style>
   
<section id="ifaen" class="gpd-section"style="">
  <div id="i9f7j" class="gpd-container gpd-cnt">
    <div id="ii4yo" class="gpd-box">
      <h1 id="i148g" class="gpd-header">NILAI PESERTA PELATIHAN
      </h1>
    </div>
  </div>
</section>
<section id="ikyox" class="gpd-section">
  <div id="ic4jk" class="gpd-container gpd-cnt">
    <form method="post" id="i0pxg" data-redirect="" class="form">
      <div class="gpd-text" id="i8x4y">Input Nilai
      </div>
      <div class="form-group">
        <label id="izj1y" class="label">Nilai praktik&nbsp;</label>
        <input type="number" placeholder="Nilai Praktik" name="nilai" id="i81rb" class="input"/>
      </div>
      <div class="form-group">
        <label id="iapn2" class="label">Nilai Pilihan Ganda</label>
        <input type="number" placeholder="Nilai Pilihan Ganda" name="ganda" id="iwkz3" class="input"/>
      </div>
      <div id="i3gw1" class="form-group">
        <label id="ilba1" class="label">Nilah Kehadiran</label>
      </div>
      <input type="number" placeholder="Nilai Kehadiran" name="hadir" id="imtp8" class="input"/>
      <div id="itji5" class="form-group">
        <label id="i3djk" class="label">Nilai Sikap</label>
        <input type="number" placeholder="Nilai Sikap" name="sikap" id="ibcxz" class="input"/>
      </div>
      <div class="form-group">
        <button type="submit" class="button" name="hitung">Hitung</button>
      </div>
      <div data-form-state="success" id="inl9o" class="state-success">Thanks! We received your request
      </div>
      <div data-form-state="error" id="iog16" class="state-error">An error occurred on processing your request, try again!
      </div>
      <div class="gpd-box">
        <!-- <div class="gpd-text" id="iwqtr">Nilai Akhir:&nbsp;&nbsp; -->
        </div>
      </div>
      <div class="gpd-box">
        <!-- <div class="gpd-text" id="ij9wv">Kriteria Kelulusan: -->
        </div>
      </div>
    </form>
<?php
  $nilai_akhir="";
  $kriteria="";
  if(isset($_POST['hitung']))
  {
      $praktik=$_POST['nilai'];
      $pilihanganda=$_POST['ganda'];
      $kehadiran=$_POST['hadir'];
      $sikap=$_POST['sikap'];
      $nilai_akhir=(0.6*$praktik)+(0.3*$pilihanganda)+(0.05*$kehadiran)+(0.05*$sikap);
    if(($nilai_akhir>=100)||($nilai_akhir<0)){
      $kriteria="NILAI AKHIR TIDAK VALID";
    }
      elseif($nilai_akhir >=95){
        $kriteria="MEMUASKAN";
      }
      elseif($nilai_akhir >=85){
        $kriteria="BAIK SEKALI";
      }
      elseif($nilai_akhir >=75){
        $kriteria="BAIK";
      }
      elseif($nilai_akhir >=65){
        $kriteria="CUKUP";
      }
      else{
        $kriteria="TIDAK LULUS";
      }
  }

  echo '<div class="gpd-text" id="itdjc">nilai akhir = ' . $nilai_akhir;
  echo '<br>';
  echo 'kriteria kelulusan =' . $kriteria;
?>
  </div>
</section>
</body>
</html>

