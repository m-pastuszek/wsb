<?php
session_start();
if (!empty($_POST['firstname']) && !empty($_POST['surname']) && !empty($_POST['email'])
  && !empty($_POST['email_confirmation']) &&  !empty($_POST['password']) && !empty($_POST['password_confirmation'])
  && !empty($_POST['city']) && !empty($_POST['birthday']) && isset($_POST['terms'])) {

  $error = 0;

  require_once './connect.php';
  if ($conn->connect_errno != 0) {
    $_SESSION['error'] = "Awaria bazy danych";
    $error = 1;
  }
  else {
    if ($_POST['password'] != $_POST['password_confirmation']) {
      $error = 1;
      $_SESSION['error'] = "Wprowadzono różne hasła.";

      if ($_POST['email'] != $_POST['email_confirmation']) {
        $error = 1;
        $_SESSION['error'] = "Wprowadzono różne adresy e-mail.";
      }
    }
  }

  if($error == 1) {
    ?>
    <script>
      history.back();
    </script>
    <?php
    exit();
  }

  echo '<pre>';
  print_r($_POST);
  echo '</pre>';

  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  $birthday = $_POST['birthday'];

  echo $firstname, $surname, $password, $email, $city, $birthday;
  $sql = "INSERT INTO `users` (`firstname`, `surname`, `email`, `password`, `city_id`, `birthday`) VALUES (?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssss", $firstname, $surname, $email, $password, $city, $birthday);

  if ($stmt->execute()) {
    header('location: ../index.php?register=success');
  } else {
    header('location: ../pages/register.php');
    exit();
  }
  echo $conn->affected_rows;
  $stmt->close();

} else {
  $_SESSION['error'] = "Wypełnij wszystkie pola";
  // header('location: ../pages/register.php');
  ?>
    <script>
      history.back();
    </script>
<?php
}


