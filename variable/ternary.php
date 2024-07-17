<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ternary</title>
</head>
<body>
  <form method="get" action="">
    <label for="gender_male">Male</label>
    <input type="radio" name="gender" value="male">
    <label for="gender_female">Female</label>
    <input type="radio" name="gender" value="female">
    <input type="submit" name="submit" value="Greet me now">
  </form>
    <?php
    if (isset($_GET['submit'])) {
        $hello = "Welcome, ";

        if (isset($_GET["gender"])) {
            $gender = ($_GET["gender"] == "male") ? "$hello Mr." : "$hello Ms.";
            echo "$hello $gender";
        } else {
            echo "Please select your gender."; 
        }
    }
    ?>

  
</body>
</html>