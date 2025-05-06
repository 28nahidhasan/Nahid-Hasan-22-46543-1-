<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $country = htmlspecialchars($_POST['country']);
    $gender = htmlspecialchars($_POST['gender']);
    $description = htmlspecialchars($_POST['description']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Confirmation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
    }
    .info {
      margin-bottom: 20px;
    }
    .buttons {
      display: flex;
      gap: 20px;
    }
    .buttons button {
      padding: 10px 20px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
    }
    .confirm-btn {
      background-color: #4CAF50;
      color: white;
    }
    .cancel-btn {
      background-color: #f44336;
      color: white;
    }
  </style>
</head>
<body>

  <h2>Confirm Your Information</h2>
  <div class="info">
    <p><strong>Full Name:</strong> <?php echo $fullname; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
    <p><strong>Country:</strong> <?php echo $country; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Description:</strong> <?php echo nl2br($description); ?></p>
  </div>

  <div class="buttons">
    <form method="post" action="success.php">
      <input type="hidden" name="fullname" value="<?php echo $fullname; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="dob" value="<?php echo $dob; ?>">
      <input type="hidden" name="country" value="<?php echo $country; ?>">
      <input type="hidden" name="gender" value="<?php echo $gender; ?>">
      <input type="hidden" name="description" value="<?php echo $description; ?>">
      <button type="submit" class="confirm-btn">Confirm</button>
    </form>

    <form method="get" action="index.html">
      <button type="submit" class="cancel-btn">Cancel</button>
    </form>
  </div>

</body>
</html>
