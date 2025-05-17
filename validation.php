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
  <title>Review Registration Info</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
    }

    h3 {
      text-align: center;
      margin-bottom: 30px;
    }

    .row {
      display: flex;
      margin-bottom: 15px;
    }

    .label {
      flex: 1;
      font-weight: bold;
    }

    .value {
      flex: 2;
    }

    .button-group {
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .button-group form {
      margin: 0 10px;
    }

    button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    .confirm-btn {
      background-color: #28a745;
      color: white;
    }

    .cancel-btn {
      background-color: #dc3545;
      color: white;
    }
  </style>
</head>
<body>

<div class="container">
  <h3>Review Your Submitted Information</h3>

  <div class="row">
    <div class="label">Full Name:</div>
    <div class="value"><?php echo $fullname; ?></div>
  </div>

  <div class="row">
    <div class="label">Email:</div>
    <div class="value"><?php echo $email; ?></div>
  </div>

  <div class="row">
    <div class="label">Date of Birth:</div>
    <div class="value"><?php echo $dob; ?></div>
  </div>

  <div class="row">
    <div class="label">Country:</div>
    <div class="value"><?php echo $country; ?></div>
  </div>

  <div class="row">
    <div class="label">Gender:</div>
    <div class="value"><?php echo $gender; ?></div>
  </div>

  <div class="row">
    <div class="label">Description:</div>
    <div class="value"><?php echo nl2br($description); ?></div>
  </div>

  <div class="button-group">
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
</div>

</body>
</html>
