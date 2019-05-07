<?php

  $servername = "localhost";
  $username = "root";
  $password = "taichow";
  $dbname = "prova1";

  // Connect - apertura connession con il server
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection - controlla la connessione
  if ($conn->connect_errno) {
    echo ("Connection failed: " . $conn->connect_error);
    return;
  }
  else {
    // var_dump("ok"); die();
  }

  $status = $_GET["status"];
  // $status = "all";
  
  if ($status != "all"){
    $where = " WHERE pagamenti.status LIKE '$status' ";
  }
  else{
    $where = "";
  }

  $sql = "
          SELECT pagamenti.id, pagamenti.price, paganti.name ,paganti.lastname
          FROM `pagamenti`
          JOIN paganti
          ON pagamenti.pagante_id = paganti.id
          $where
          ORDER BY pagamenti.price DESC
        ";
  // echo $sql; die();

  $result = $conn->query($sql);
  // var_dump($result); die();

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      // var_dump($row); echo "<br>" ;
      $res[] = $row;

    }
  } else {
    echo "0 results";
  }

  $conn->close();

  echo json_encode($res);

?>
