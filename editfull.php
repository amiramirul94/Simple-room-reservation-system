<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Internship project for abe nor">
    <meta name="author" content="Amir Amirul">

    <title>Edit Penuh</title>

    <!-- Bootstrap Core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="./vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- connect DB -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
include './conn.php';
include './function.php';

echo "<h4>Edit Semua</h4>";

echo "<h3>Tarikh = ".$dateH = $_GET['edit_id'];
echo "<br>Hari = ".$dayD = $_GET['dayD'];
echo "</h3>";
$select = $conn->prepare("SELECT * FROM bilik_kuliah_1 WHERE dateH= '$dateH'");
$select -> setFetchMode(PDO::FETCH_ASSOC);
$select -> execute();
$data = $select->fetch();

if(isset($_POST['done'])){
  $bk1_8  = $_POST['bk1_8'];
  $bk1_9  = $_POST['bk1_9'];
  $bk1_10 = $_POST['bk1_10'];
  $bk1_11 = $_POST['bk1_11'];
  $bk1_12 = $_POST['bk1_12'];
  $bk1_1  = $_POST['bk1_1'];
  $bk1_2  = $_POST['bk1_2'];
  $bk1_3  = $_POST['bk1_3'];
  $bk1_4  = $_POST['bk1_4'];
  $bk1_5  = $_POST['bk1_5'];
  $bk2_8  = $_POST['bk2_8'];
  $bk2_9  = $_POST['bk2_9'];
  $bk2_10 = $_POST['bk2_10'];
  $bk2_11 = $_POST['bk2_11'];
  $bk2_12 = $_POST['bk2_12'];
  $bk2_1  = $_POST['bk2_1'];
  $bk2_2  = $_POST['bk2_2'];
  $bk2_3  = $_POST['bk2_3'];
  $bk2_4  = $_POST['bk2_4'];
  $bk2_5  = $_POST['bk2_5'];
  $bk3_8  = $_POST['bk3_8'];
  $bk3_9  = $_POST['bk3_9'];
  $bk3_10 = $_POST['bk3_10'];
  $bk3_11 = $_POST['bk3_11'];
  $bk3_12 = $_POST['bk3_12'];
  $bk3_1  = $_POST['bk3_1'];
  $bk3_2  = $_POST['bk3_2'];
  $bk3_3  = $_POST['bk3_3'];
  $bk3_4  = $_POST['bk3_4'];
  $bk3_5  = $_POST['bk3_5'];
  $cme_8  = $_POST['cme_8'];
  $cme_9  = $_POST['cme_9'];
  $cme_10 = $_POST['cme_10'];
  $cme_11 = $_POST['cme_11'];
  $cme_12 = $_POST['cme_12'];
  $cme_1  = $_POST['cme_1'];
  $cme_2  = $_POST['cme_2'];
  $cme_3  = $_POST['cme_3'];
  $cme_4  = $_POST['cme_4'];
  $cme_5  = $_POST['cme_5'];
  $sim_8  = $_POST['sim_8'];
  $sim_9  = $_POST['sim_9'];
  $sim_10 = $_POST['sim_10'];
  $sim_11 = $_POST['sim_11'];
  $sim_12 = $_POST['sim_12'];
  $sim_1  = $_POST['sim_1'];
  $sim_2  = $_POST['sim_2'];
  $sim_3  = $_POST['sim_3'];
  $sim_4  = $_POST['sim_4'];
  $sim_5  = $_POST['sim_5'];
  $au_8  = $_POST['au_8'];
  $au_9  = $_POST['au_9'];
  $au_10 = $_POST['au_10'];
  $au_11 = $_POST['au_11'];
  $au_12 = $_POST['au_12'];
  $au_1  = $_POST['au_1'];
  $au_2  = $_POST['au_2'];
  $au_3  = $_POST['au_3'];
  $au_4  = $_POST['au_4'];
  $au_5  = $_POST['au_5'];
  $rm_8  = $_POST['rm_8'];
  $rm_9  = $_POST['rm_9'];
  $rm_10 = $_POST['rm_10'];
  $rm_11 = $_POST['rm_11'];
  $rm_12 = $_POST['rm_12'];
  $rm_1  = $_POST['rm_1'];
  $rm_2  = $_POST['rm_2'];
  $rm_3  = $_POST['rm_3'];
  $rm_4  = $_POST['rm_4'];
  $rm_5  = $_POST['rm_5'];
  $bm_8  = $_POST['bm_8'];
  $bm_9  = $_POST['bm_9'];
  $bm_10  = $_POST['bm_10'];
  $bm_11  = $_POST['bm_11'];
  $bm_12  = $_POST['bm_12'];
  $bm_1  = $_POST['bm_1'];
  $bm_2  = $_POST['bm_2'];
  $bm_3  = $_POST['bm_3'];
  $bm_4  = $_POST['bm_4'];
  $bm_5  = $_POST['bm_5'];

  $query = "UPDATE bilik_kuliah_1 SET
  bk1_8 =:bk1_8,
  bk1_9 =:bk1_9,
  bk1_10=:bk1_10,
  bk1_11=:bk1_11,
  bk1_12=:bk1_12,
  bk1_1 =:bk1_1,
  bk1_2 =:bk1_2,
  bk1_3 =:bk1_3,
  bk1_4 =:bk1_4,
  bk1_5 =:bk1_5,
  bk2_8 =:bk2_8,
  bk2_9 =:bk2_9,
  bk2_10=:bk2_10,
  bk2_11=:bk2_11,
  bk2_12=:bk2_12,
  bk2_1 =:bk2_1,
  bk2_2 =:bk2_2,
  bk2_3 =:bk2_3,
  bk2_4 =:bk2_4,
  bk2_5 =:bk2_5,
  bk3_8 =:bk3_8,
  bk3_9 =:bk3_9,
  bk3_10=:bk3_10,
  bk3_11=:bk3_11,
  bk3_12=:bk3_12,
  bk3_1 =:bk3_1,
  bk3_2 =:bk3_2,
  bk3_3 =:bk3_3,
  bk3_4 =:bk3_4,
  bk3_5 =:bk3_5,
  cme_8 =:cme_8,
  cme_9 =:cme_9,
  cme_10=:cme_10,
  cme_11=:cme_11,
  cme_12=:cme_12,
  cme_1 =:cme_1,
  cme_2 =:cme_2,
  cme_3 =:cme_3,
  cme_4 =:cme_4,
  cme_5 =:cme_5,
  sim_8 =:sim_8,
  sim_9 =:sim_9,
  sim_10=:sim_10,
  sim_11=:sim_11,
  sim_12=:sim_12,
  sim_1 =:sim_1,
  sim_2 =:sim_2,
  sim_3 =:sim_3,
  sim_4 =:sim_4,
  sim_5 =:sim_5,
  au_8 =:au_8,
  au_9 =:au_9,
  au_10=:au_10,
  au_11=:au_11,
  au_12=:au_12,
  au_1 =:au_1,
  au_2 =:au_2,
  au_3 =:au_3,
  au_4 =:au_4,
  au_5 =:au_5,
  rm_8 =:rm_8,
  rm_9 =:rm_9,
  rm_10=:rm_10,
  rm_11=:rm_11,
  rm_12=:rm_12,
  rm_1 =:rm_1,
  rm_2 =:rm_2,
  rm_3 =:rm_3,
  rm_4 =:rm_4,
  rm_5 =:rm_5,
  bm_8  =:bm_8,
  bm_9  =:bm_9,
  bm_10  =:bm_10,
  bm_11  =:bm_11,
  bm_12  =:bm_12,
  bm_1  =:bm_1,
  bm_2  =:bm_2,
  bm_3  =:bm_3,
  bm_4  =:bm_4,
  bm_5  =:bm_5
  WHERE dateH='$dateH'";
  $update = $conn->prepare($query);

  $update->bindParam(':bk1_8',  $bk1_8);
  $update->bindParam(':bk1_9',  $bk1_9);
  $update->bindParam(':bk1_10', $bk1_10);
  $update->bindParam(':bk1_11', $bk1_11);
  $update->bindParam(':bk1_12', $bk1_12);
  $update->bindParam(':bk1_1',  $bk1_1);
  $update->bindParam(':bk1_2',  $bk1_2);
  $update->bindParam(':bk1_3',  $bk1_3);
  $update->bindParam(':bk1_4',  $bk1_4);
  $update->bindParam(':bk1_5',  $bk1_5);
  $update->bindParam(':bk2_8',  $bk2_8);
  $update->bindParam(':bk2_9',  $bk2_9);
  $update->bindParam(':bk2_10', $bk2_10);
  $update->bindParam(':bk2_11', $bk2_11);
  $update->bindParam(':bk2_12', $bk2_12);
  $update->bindParam(':bk2_1',  $bk2_1);
  $update->bindParam(':bk2_2',  $bk2_2);
  $update->bindParam(':bk2_3',  $bk2_3);
  $update->bindParam(':bk2_4',  $bk2_4);
  $update->bindParam(':bk2_5',  $bk2_5);
  $update->bindParam(':bk3_8',  $bk3_8);
  $update->bindParam(':bk3_9',  $bk3_9);
  $update->bindParam(':bk3_10', $bk3_10);
  $update->bindParam(':bk3_11', $bk3_11);
  $update->bindParam(':bk3_12', $bk3_12);
  $update->bindParam(':bk3_1',  $bk3_1);
  $update->bindParam(':bk3_2',  $bk3_2);
  $update->bindParam(':bk3_3',  $bk3_3);
  $update->bindParam(':bk3_4',  $bk3_4);
  $update->bindParam(':bk3_5',  $bk3_5);
  $update->bindParam(':cme_8',  $cme_8);
  $update->bindParam(':cme_9',  $cme_9);
  $update->bindParam(':cme_10', $cme_10);
  $update->bindParam(':cme_11', $cme_11);
  $update->bindParam(':cme_12', $cme_12);
  $update->bindParam(':cme_1',  $cme_1);
  $update->bindParam(':cme_2',  $cme_2);
  $update->bindParam(':cme_3',  $cme_3);
  $update->bindParam(':cme_4',  $cme_4);
  $update->bindParam(':cme_5',  $cme_5);
  $update->bindParam(':sim_8',  $sim_8);
  $update->bindParam(':sim_9',  $sim_9);
  $update->bindParam(':sim_10', $sim_10);
  $update->bindParam(':sim_11', $sim_11);
  $update->bindParam(':sim_12', $sim_12);
  $update->bindParam(':sim_1',  $sim_1);
  $update->bindParam(':sim_2',  $sim_2);
  $update->bindParam(':sim_3',  $sim_3);
  $update->bindParam(':sim_4',  $sim_4);
  $update->bindParam(':sim_5',  $sim_5);
  $update->bindParam(':au_8',  $au_8);
  $update->bindParam(':au_9',  $au_9);
  $update->bindParam(':au_10', $au_10);
  $update->bindParam(':au_11', $au_11);
  $update->bindParam(':au_12', $au_12);
  $update->bindParam(':au_1',  $au_1);
  $update->bindParam(':au_2',  $au_2);
  $update->bindParam(':au_3',  $au_3);
  $update->bindParam(':au_4',  $au_4);
  $update->bindParam(':au_5',  $au_5);
  $update->bindParam(':rm_8',  $rm_8);
  $update->bindParam(':rm_9',  $rm_9);
  $update->bindParam(':rm_10', $rm_10);
  $update->bindParam(':rm_11', $rm_11);
  $update->bindParam(':rm_12', $rm_12);
  $update->bindParam(':rm_1',  $rm_1);
  $update->bindParam(':rm_2',  $rm_2);
  $update->bindParam(':rm_3',  $rm_3);
  $update->bindParam(':rm_4',  $rm_4);
  $update->bindParam(':rm_5',  $rm_5);
  $update->bindParam(':bm_8',  $bm_8);
  $update->bindParam(':bm_9',  $bm_9);
  $update->bindParam(':bm_10',  $bm_10);
  $update->bindParam(':bm_11',  $bm_11);
  $update->bindParam(':bm_12',  $bm_12);
  $update->bindParam(':bm_1',  $bm_1);
  $update->bindParam(':bm_2',  $bm_2);
  $update->bindParam(':bm_3',  $bm_3);
  $update->bindParam(':bm_4',  $bm_4);
  $update->bindParam(':bm_5',  $bm_5);

  $update->execute();
 ?>
 <script>
 window.location = "./main.php?dateH=<?php echo $dateH?>&dayD=<?php echo $dayD?>";
 </script>
 <?php } ?>

 <div class="row">
     <div class="col-lg-12">
         <div class="panel panel-default">
           <div class="panel-body">
             <form method="post">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                <thead>
                    <tr></br>
                      <th>Masa</th>
                      <th>Bilik Kuliah 1</th>
                      <th>Bilik Kuliah 2 (MAX :24)</th>
                      <th>Bilik Kuliah 3 (MAX :32)</th>
                      <th>Ruang CME</th>
                      <th>Simulation LAB</th>
                      <th>Audatorium (MAX :132)</th>
                      <th>Ruang Makan (Max :150)</th>
                      <th>Bilik Mesyuarat</th>
                    </tr>
                </thead>
                <tr class="odd gradeX">
                  <th>8.00</th>
                  <td><input type="text" name="bk1_8" placeholder="bk1_8" value="<?php echo $data['bk1_8'] ?>"></td>
                  <td><input type="text" name="bk2_8" placeholder="bk2_8" value="<?php echo $data['bk2_8'] ?>"></td>
                  <td><input type="text" name="bk3_8" placeholder="bk3_8" value="<?php echo $data['bk3_8'] ?>"></td>
                  <td><input type="text" name="cme_8" placeholder="cme_8" value="<?php echo $data['cme_8'] ?>"></td>
                  <td><input type="text" name="sim_8" placeholder="sim_8" value="<?php echo $data['sim_8'] ?>"></td>
                  <td><input type="text" name="au_8"  placeholder="au_8"  value="<?php echo $data['au_8']  ?>"></td>
                  <td><input type="text" name="rm_8"  placeholder="rm_8"  value="<?php echo $data['rm_8']  ?>"></td>
                  <td><input type="text" name="bm_8"  placeholder="bm_8"  value="<?php echo $data['bm_8']  ?>"></td>
                </tr>
                <tr class="even gradeC">
                  <th>9.00</th>
                  <td><input type="text" name="bk1_9" placeholder="bk1_9" value="<?php echo $data['bk1_9'] ?>"></td>
                  <td><input type="text" name="bk2_9" placeholder="bk2_9" value="<?php echo $data['bk2_9'] ?>"></td>
                  <td><input type="text" name="bk3_9" placeholder="bk3_9" value="<?php echo $data['bk3_9'] ?>"></td>
                  <td><input type="text" name="cme_9" placeholder="cme_9" value="<?php echo $data['cme_9'] ?>"></td>
                  <td><input type="text" name="sim_9" placeholder="sim_9" value="<?php echo $data['sim_9'] ?>"></td>
                  <td><input type="text" name="au_9"  placeholder="au_9"  value="<?php echo $data['au_9']  ?>"></td>
                  <td><input type="text" name="rm_9"  placeholder="rm_9"  value="<?php echo $data['rm_9']  ?>"></td>
                  <td><input type="text" name="bm_9"  placeholder="bm_9"  value="<?php echo $data['bm_9']  ?>"></td>
                </tr>
                <tr class="odd gradeA">
                  <th>10.00</th>
                  <td><input type="text" name="bk1_10" placeholder="bk1_10" value="<?php echo $data['bk1_10'] ?>"></td>
                  <td><input type="text" name="bk2_10" placeholder="bk2_10" value="<?php echo $data['bk2_10'] ?>"></td>
                  <td><input type="text" name="bk3_10" placeholder="bk3_10" value="<?php echo $data['bk3_10'] ?>"></td>
                  <td><input type="text" name="cme_10" placeholder="cme_10" value="<?php echo $data['cme_10'] ?>"></td>
                  <td><input type="text" name="sim_10" placeholder="sim_10" value="<?php echo $data['sim_10'] ?>"></td>
                  <td><input type="text" name="au_10"  placeholder="au_10"  value="<?php echo $data['au_10']  ?>"></td>
                  <td><input type="text" name="rm_10"  placeholder="rm_10"  value="<?php echo $data['rm_10']  ?>"></td>
                  <td><input type="text" name="bm_10"  placeholder="bm_10"  value="<?php echo $data['bm_10']  ?>"></td>
                </tr>
                <tr class="even gradeA">
                  <th>11.00</th>
                  <td><input type="text" name="bk1_11" placeholder="bk1_11" value="<?php echo $data['bk1_11'] ?>"></td>
                  <td><input type="text" name="bk2_11" placeholder="bk2_11" value="<?php echo $data['bk2_11'] ?>"></td>
                  <td><input type="text" name="bk3_11" placeholder="bk3_11" value="<?php echo $data['bk3_11'] ?>"></td>
                  <td><input type="text" name="cme_11" placeholder="cme_11" value="<?php echo $data['cme_11'] ?>"></td>
                  <td><input type="text" name="sim_11" placeholder="sim_11" value="<?php echo $data['sim_11'] ?>"></td>
                  <td><input type="text" name="au_11"  placeholder="au_11"  value="<?php echo $data['au_11']  ?>"></td>
                  <td><input type="text" name="rm_11"  placeholder="rm_11"  value="<?php echo $data['rm_11']  ?>"></td>
                  <td><input type="text" name="bm_11"  placeholder="bm_11"  value="<?php echo $data['bm_11']  ?>"></td>
                </tr>
                <tr class="even gradeA">
                  <th>12.00</th>
                  <td><input type="text" name="bk1_12" placeholder="bk1_12" value="<?php echo $data['bk1_12'] ?>"></td>
                  <td><input type="text" name="bk2_12" placeholder="bk2_12" value="<?php echo $data['bk2_12'] ?>"></td>
                  <td><input type="text" name="bk3_12" placeholder="bk3_12" value="<?php echo $data['bk3_12'] ?>"></td>
                  <td><input type="text" name="cme_12" placeholder="cme_12" value="<?php echo $data['cme_12'] ?>"></td>
                  <td><input type="text" name="sim_12" placeholder="sim_12" value="<?php echo $data['sim_12'] ?>"></td>
                  <td><input type="text" name="au_12"  placeholder="au_12"  value="<?php echo $data['au_12']  ?>"></td>
                  <td><input type="text" name="rm_12"  placeholder="rm_12"  value="<?php echo $data['rm_12']  ?>"></td>
                  <td><input type="text" name="bm_12"  placeholder="bm_12"  value="<?php echo $data['bm_12']  ?>"></td>
                </tr>
                <tr class="even gradeA">
                  <th>1.00</th>
                  <td><input type="text" name="bk1_1" placeholder="bk1_1" value="<?php echo $data['bk1_1'] ?>"></td>
                  <td><input type="text" name="bk2_1" placeholder="bk2_1" value="<?php echo $data['bk2_1'] ?>"></td>
                  <td><input type="text" name="bk3_1" placeholder="bk3_1" value="<?php echo $data['bk3_1'] ?>"></td>
                  <td><input type="text" name="cme_1" placeholder="cme_1" value="<?php echo $data['cme_1'] ?>"></td>
                  <td><input type="text" name="sim_1" placeholder="sim_1" value="<?php echo $data['sim_1'] ?>"></td>
                  <td><input type="text" name="au_1"  placeholder="au_1"  value="<?php echo $data['au_1']  ?>"></td>
                  <td><input type="text" name="rm_1"  placeholder="rm_1"  value="<?php echo $data['rm_1']  ?>"></td>
                  <td><input type="text" name="bm_1"  placeholder="bm_1"  value="<?php echo $data['bm_1']  ?>"></td>
                </tr>
                <tr class="even gradeA">
                  <th>2.00</th>
                  <td><input type="text" name="bk1_2" placeholder="bk1_2" value="<?php echo $data['bk1_2'] ?>"></td>
                  <td><input type="text" name="bk2_2" placeholder="bk2_2" value="<?php echo $data['bk2_2'] ?>"></td>
                  <td><input type="text" name="bk3_2" placeholder="bk3_2" value="<?php echo $data['bk3_2'] ?>"></td>
                  <td><input type="text" name="cme_2" placeholder="cme_2" value="<?php echo $data['cme_2'] ?>"></td>
                  <td><input type="text" name="sim_2" placeholder="sim_2" value="<?php echo $data['sim_2'] ?>"></td>
                  <td><input type="text" name="au_2"  placeholder="au_2"  value="<?php echo $data['au_2']  ?>"></td>
                  <td><input type="text" name="rm_2"  placeholder="rm_2"  value="<?php echo $data['rm_2']  ?>"></td>
                  <td><input type="text" name="bm_2"  placeholder="bm_2"  value="<?php echo $data['bm_2']  ?>"></td>
                </tr>
                <tr class="even gradeA">
                  <th>3.00</th>
                  <td><input type="text" name="bk1_3" placeholder="bk1_3" value="<?php echo $data['bk1_3'] ?>"></td>
                  <td><input type="text" name="bk2_3" placeholder="bk2_3" value="<?php echo $data['bk2_3'] ?>"></td>
                  <td><input type="text" name="bk3_3" placeholder="bk3_3" value="<?php echo $data['bk3_3'] ?>"></td>
                  <td><input type="text" name="cme_3" placeholder="cme_3" value="<?php echo $data['cme_3'] ?>"></td>
                  <td><input type="text" name="sim_3" placeholder="sim_3" value="<?php echo $data['sim_3'] ?>"></td>
                  <td><input type="text" name="au_3"  placeholder="au_3"  value="<?php echo $data['au_3']  ?>"></td>
                  <td><input type="text" name="rm_3"  placeholder="rm_3"  value="<?php echo $data['rm_3']  ?>"></td>
                  <td><input type="text" name="bm_3"  placeholder="bm_3"  value="<?php echo $data['bm_3']  ?>"></td>
                </tr>
                <tr class="even gradeA">
                  <th>4.00</th>
                  <td><input type="text" name="bk1_4" placeholder="bk1_4" value="<?php echo $data['bk1_4'] ?>"></td>
                  <td><input type="text" name="bk2_4" placeholder="bk2_4" value="<?php echo $data['bk2_4'] ?>"></td>
                  <td><input type="text" name="bk3_4" placeholder="bk3_4" value="<?php echo $data['bk3_4'] ?>"></td>
                  <td><input type="text" name="cme_4" placeholder="cme_4" value="<?php echo $data['cme_4'] ?>"></td>
                  <td><input type="text" name="sim_4" placeholder="sim_4" value="<?php echo $data['sim_4'] ?>"></td>
                  <td><input type="text" name="au_4"  placeholder="au_4"  value="<?php echo $data['au_4']  ?>"></td>
                  <td><input type="text" name="rm_4"  placeholder="rm_4"  value="<?php echo $data['rm_4']  ?>"></td>
                  <td><input type="text" name="bm_4"  placeholder="bm_4"  value="<?php echo $data['bm_4']  ?>"></td>
                </tr>
                <tr class="even gradeA">
                  <th>5.00</th>
                  <td><input type="text" name="bk1_5" placeholder="bk1_5" value="<?php echo $data['bk1_5'] ?>"></td>
                  <td><input type="text" name="bk2_5" placeholder="bk2_5" value="<?php echo $data['bk2_5'] ?>"></td>
                  <td><input type="text" name="bk3_5" placeholder="bk3_5" value="<?php echo $data['bk3_5'] ?>"></td>
                  <td><input type="text" name="cme_5" placeholder="cme_5" value="<?php echo $data['cme_5'] ?>"></td>
                  <td><input type="text" name="sim_5" placeholder="sim_5" value="<?php echo $data['sim_5'] ?>"></td>
                  <td><input type="text" name="au_5"  placeholder="au_5"  value="<?php echo $data['au_5']  ?>"></td>
                  <td><input type="text" name="rm_5"  placeholder="rm_5"  value="<?php echo $data['rm_5']  ?>"></td>
                  <td><input type="text" name="bm_5"  placeholder="bm_5"  value="<?php echo $data['bm_5']  ?>"></td>
                </tr>
              </table>

              <!-- <input type="submit" name="done"> -->
              <button type="submit" name="done" placeholder="Edit Full" class="btn btn-info">Done</button>
            </form>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
  </br></br>
</div>
<!-- jQuery -->
<script src="./vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="./vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="./vendor/raphael/raphael.min.js"></script>
<script src="./vendor/morrisjs/morris.min.js"></script>
<script src="./data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>
