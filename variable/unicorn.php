<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unicorn</title>
</head>
<body>
<h3>Are you a human, a cat or a Unicorn</h3>
<form method="get" action="">
    <label for="H">Human</label>
    <input type="radio" name="species" value="Human">
    <label for="C">Cat</label>
    <input type="radio" name="species" value="Cat">
    <label for="U">Unicorn</label>
    <input type="radio" name="species" value="Unicorn">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <?php
    if (isset($_GET['submit'])) { 
        if (isset($_GET["species"])) {
           if($_GET["species"]=="Human"){
              $GifH = "https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExdTN4a2NscjV5cGp5dnhpenhhYmNqaXl5ajRtamV1OXMxOGN5eTBuYiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/Ta3v3I4GI1gH7Rqek6/giphy.webp";
              echo "<img src='$GifH' alt='GIF d'un humain'>";
            }else if($_GET["species"]=="Cat"){
              $GifC = "https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExNHZlNWNobHRhejR1Ymhmb2I4enZsMGIzZTBqYmxlOHg1OWx3OWF6byZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/mlvseq9yvZhba/giphy.webp";
              echo "<img src='$GifC' alt='GIF d'un chat'>";
            }else{
              $GifU = "https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExcDgxdHl5dWY3bjFoMHJlbDF6bW1ncHpwZm8ybnk2bXlpNDltMzcwbiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/j0kQJxo5mzGYb4EvWK/giphy.webp";
              echo "<img src='$GifU' alt='GIF d'une licorne'>";
            }
        } else {
            echo "Please select your gender."; 
        }
    }
    $a = 4;
    echo '$a = four';
    echo '$a = 2+2';
    echo "$a = four";
    ?>
</body>
</html>