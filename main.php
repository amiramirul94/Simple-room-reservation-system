<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Internship project for abe nor">
    <meta name="author" content="Amir Amirul">

    <title>Tempahan Bilik</title>

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
  include "conn.php";
  // include "style.css";
  include "function.php";

  $masa = $_GET['dateH'];
  $hari = $_GET['dayD'];
  $select = $conn->prepare("SELECT * FROM bilik_kuliah_1 WHERE dateH = '$masa'");
  $select->setFetchMode(PDO::FETCH_ASSOC);
  $select->execute();
  $data=$select->fetch();
  ?>

  <div class="container-fluid">
    <div class="panel-heading">
      <h1>Tempahan Bilik Di Jabatan Kecemasan USM</h1>
    </div>
  </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Tarikh = <?php echo $data['dateH']; ?> / <?php echo $hari; ?>
                      <button type="submit" name="button" placeholder="Edit Full" class="btn">
                        <a href="Cari.php">Cari Tarikh</a></button>
                    </h3>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Masa</th>
                                <th>Bilik Kuliah 1 (MAX :36)</th>
                                <th>Bilik Kuliah 2 (MAX :24)</th>
                                <th>Bilik Kuliah 3 (MAX :32)</th>
                                <th>Ruang CME</th>
                                <th>Simulation LAB</th>
                                <th>Audatorium (MAX :132)</th>
                                <th>Ruang Makan (Max :150)</th>
                                <th>Bilik Mesyuarat</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="odd gradeX">
                              <td>8.00</td>
                              <td><?php echo $data['bk1_8']; ?></td>
                              <td><?php echo $data['bk2_8']; ?> </td>
                              <td><?php echo $data['bk3_8']; ?> </td>
                              <td><?php echo $data['cme_8']; ?> </td>
                              <td><?php echo $data['sim_8']; ?> </td>
                              <td><?php echo $data['au_8']; ?> </td>
                              <td><?php echo $data['rm_8']; ?> </td>
                              <td><?php echo $data['bm_8']; ?> </td>
                          </tr>
                          <tr class="even gradeC">
                              <td>9.00</td>
                              <td><?php echo $data['bk1_9']; ?></td>
                              <td><?php echo $data['bk2_9']; ?> </td>
                              <td><?php echo $data['bk3_9']; ?> </td>
                              <td><?php echo $data['cme_9']; ?> </td>
                              <td><?php echo $data['sim_9']; ?> </td>
                              <td><?php echo $data['au_9']; ?> </td>
                              <td><?php echo $data['rm_9']; ?> </td>
                              <td><?php echo $data['bm_9']; ?> </td>
                          </tr>
                          <tr class="odd gradeA">
                              <td>10.00</td>
                              <td><?php echo $data['bk1_10']; ?></td>
                              <td><?php echo $data['bk2_10']; ?> </td>
                              <td><?php echo $data['bk3_10']; ?> </td>
                              <td><?php echo $data['cme_10']; ?> </td>
                              <td><?php echo $data['sim_10']; ?> </td>
                              <td><?php echo $data['au_10']; ?> </td>
                              <td><?php echo $data['rm_10']; ?> </td>
                              <td><?php echo $data['bm_10']; ?> </td>
                          </tr>
                          <tr class="even gradeA">
                              <td>11.00</td>
                              <td><?php echo $data['bk1_11']; ?></td>
                              <td><?php echo $data['bk2_11']; ?> </td>
                              <td><?php echo $data['bk3_11']; ?> </td>
                              <td><?php echo $data['cme_11']; ?> </td>
                              <td><?php echo $data['sim_11']; ?> </td>
                              <td><?php echo $data['au_11']; ?> </td>
                              <td><?php echo $data['rm_11']; ?> </td>
                              <td><?php echo $data['bm_11']; ?> </td>
                          </tr>
                          <tr class="even gradeA">
                              <td>12.00</td>
                              <td><?php echo $data['bk1_12']; ?></td>
                              <td><?php echo $data['bk2_12']; ?> </td>
                              <td><?php echo $data['bk3_12']; ?> </td>
                              <td><?php echo $data['cme_12']; ?> </td>
                              <td><?php echo $data['sim_12']; ?> </td>
                              <td><?php echo $data['au_12']; ?> </td>
                              <td><?php echo $data['rm_12']; ?> </td>
                              <td><?php echo $data['bm_12']; ?> </td>
                          </tr>
                          <tr class="even gradeA">
                              <td>1.00</td>
                              <td><?php echo $data['bk1_1']; ?></td>
                              <td><?php echo $data['bk2_1']; ?> </td>
                              <td><?php echo $data['bk3_1']; ?> </td>
                              <td><?php echo $data['cme_1']; ?> </td>
                              <td><?php echo $data['sim_1']; ?> </td>
                              <td><?php echo $data['au_1']; ?> </td>
                              <td><?php echo $data['rm_1']; ?> </td>
                              <td><?php echo $data['bm_1']; ?> </td>
                          </tr>
                          <tr class="even gradeA">
                              <td>2.00</td>
                              <td><?php echo $data['bk1_2']; ?></td>
                              <td><?php echo $data['bk2_2']; ?> </td>
                              <td><?php echo $data['bk3_2']; ?> </td>
                              <td><?php echo $data['cme_2']; ?> </td>
                              <td><?php echo $data['sim_2']; ?> </td>
                              <td><?php echo $data['au_2']; ?> </td>
                              <td><?php echo $data['rm_2']; ?> </td>
                              <td><?php echo $data['bm_2']; ?> </td>
                          </tr>
                          <tr class="even gradeA">
                              <td>3.00</td>
                              <td><?php echo $data['bk1_3']; ?></td>
                              <td><?php echo $data['bk2_3']; ?> </td>
                              <td><?php echo $data['bk3_3']; ?> </td>
                              <td><?php echo $data['cme_3']; ?> </td>
                              <td><?php echo $data['sim_3']; ?> </td>
                              <td><?php echo $data['au_3']; ?> </td>
                              <td><?php echo $data['rm_3']; ?> </td>
                              <td><?php echo $data['bm_3']; ?> </td>
                          </tr>
                          <tr class="even gradeA">
                              <td>4.00</td>
                              <td><?php echo $data['bk1_4']; ?></td>
                              <td><?php echo $data['bk2_4']; ?> </td>
                              <td><?php echo $data['bk3_4']; ?> </td>
                              <td><?php echo $data['cme_4']; ?> </td>
                              <td><?php echo $data['sim_4']; ?> </td>
                              <td><?php echo $data['au_4']; ?> </td>
                              <td><?php echo $data['rm_4']; ?> </td>
                              <td><?php echo $data['bm_4']; ?> </td>
                          </tr>
                          <tr class="even gradeA">
                              <td>5.00</td>
                              <td><?php echo $data['bk1_5']; ?></td>
                              <td><?php echo $data['bk2_5']; ?> </td>
                              <td><?php echo $data['bk3_5']; ?> </td>
                              <td><?php echo $data['cme_5']; ?> </td>
                              <td><?php echo $data['sim_5']; ?> </td>
                              <td><?php echo $data['au_5']; ?> </td>
                              <td><?php echo $data['rm_5']; ?> </td>
                              <td><?php echo $data['bm_5']; ?> </td>
                          </tr>
                        </tbody>
                    </table>
                    <form method="post" action="editfull.php?edit_id=<?php echo $data['dateH']; ?>&dayD=<?php echo $hari?>">
                      <button type="submit" name="button" placeholder="Edit Full" class="btn btn-info">Tempah</button>
                    </form>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- /.col-lg-12 -->

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
