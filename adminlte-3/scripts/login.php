<?php
session_start();

if (!empty($_POST['email']) && !empty($_POST['password'])) {
//  print_r($_POST);
  require_once './connect.php';
  if ($conn->connect_errno != 0) {
    $_SESSION['error'] = "Błędne połączenie z bazą danych!";
    header('location: ..');
    exit();
  }

  $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
  $password = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

  $sql = sprintf("SELECT * FROM users WHERE email='%s'", mysqli_real_escape_string($conn, $email));

  if ($result = $conn->query($sql)) {
    $error = 0;
    if ($count = $result->num_rows) {
      $row = $result->fetch_assoc();
      $passdb = $row['password'];

      if  (password_verify($password, $passdb)) {

        if ($row['status_id'] == 1) {
          $_SESSION['logged']['role'] = $row['role_id'];
          $_SESSION['logged']['firstname'] = $row['firstname'];
          $_SESSION['logged']['surname'] = $row['surname'];
          $_SESSION['logged']['email'] = $row['email'];

//          echo $_SESSION['logged']['role'] . ' ' .  $_SESSION['logged']['firstname'] . ' ' . $_SESSION['logged']['surname'] . ' ' . $_SESSION['logged']['email'];
          // aktualizacja daty i czasu ostatniego zalogowania do systemu
          // utworzyć tabelę logs =>
          // zalogowany: iduser, timestamp, adresip, token(idsesji)
          // 15.11.2020
        } else {
          $sql = sprintf("SELECT * FROM status WHERE id='%s'", $row['status_id']);
          if ($result1 = $conn->query($sql)) {
            $row1 = $result1->fetch_assoc();
            $_SESSION['error'] = $row1['description'];
            $error = 1;
          }
        }

      } else {
        $error = 1;
        $_SESSION['error'] = "Błędny login lub hasło";
      }

    } else {
      $error = 1;
      $_SESSION['error'] = "Błędny login lub hasło";
    }

    if ($error != 0) {
      header('location: ..');
      exit();
    }
  }

} else {
  $_SESSION['error'] = "Wypełnij wszystkie pola!";
  header('location: ..');
}

?>
