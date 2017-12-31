<?php

class func {
  public static function checkDate($conn, $masa, $hari){
    $dateH = $_GET['dateH'];
    $dayD = $_GET['dayD'];
    $sql = $conn->prepare("SELECT COUNT(*) AS `total` FROM bilik_kuliah_1 WHERE dateH = :dateH");
    $sql->execute(array(':dateH' => $dateH));
    $result = $sql->fetchObject();

    if ($result->total > 0)
    {
        echo '<br>The Date number: ' . $dateH. ' is already in the database<br />';
        echo '<br>The Day number: ' . $dayD. ' is already in the database<br />';
        ?>
        <script>
          window.location = "./main.php?dateH=<?php echo $dateH?>&dayD=<?php echo $dayD?>";
        </script>
        <?php
    }
    else
    {
          echo '<br>No rows matched the query.';
          func::insertDate($conn, $dateH, $hari);
    }
  }

  public static function insertDate($conn, $masa, $hari){
      $masa = $_GET['dateH'];
      $hari = $_GET['dayD'];
      $query = "INSERT INTO bilik_kuliah_1 (dateH, dayD) VALUES (:dateH, :dayD)";
      $insert = $conn->prepare($query);
      $insert->bindParam(':dateH', $masa);
      $insert->bindParam(':dayD', $hari);
      $insert->execute();
      echo "</br>Insert it";
      ?>
      <script>
        window.location = "./main.php?dateH=<?php echo $masa?>&dayD=<?php echo $hari?>";
      </script>
      <?php
    // }
  }

  public static function checkTest($conn, $masa){
    $q = $conn->prepare("SELECT dateH FROM bilik_kuliah_1 WHERE dateH = :dateH ");
    $q->bindValue(':dateH', '$dateH');
    $cuba = $q->execute();

    if ($q->rowCount() > 0){
        $check = $q->fetch(PDO::FETCH_ASSOC);
        $row = $check['dateH'];
        // echo $cuba;
        echo "<br> Already Exist";
    } else {
        echo "<br> Doesn't Exist";
    }
  }

  public static function goIndex($conn, $masa){

  }
}


 ?>
