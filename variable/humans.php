<html>
  <head><title>Hi!</title></head>
  <bod?>
  	<?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
   	<?php } ?>
    <?php 
      $name="Lucas";
      $age="23";
      $eyecolor="brown";
      $familly= array(
        0=>"Cindy",
        1=>"Jean",
        2=>"Mustapha",
        3=>"Pierre",
        4=>"Eric");
      $familly2= [
        "Cindy",
        "Jean",
        "Mustapha",
        "Pierre",
        "Eric"];
    ?>
    <p>Hi! My name is <?php echo $name?></p>
    <p>I am <?php echo $age?> years old</p>
    <p>My eyes are <?php echo $eyecolor?></p>
    <p>The first person in my family is <?php echo $familly2[0]?></p>
    <p><?php 
    $room_is_filthy = false;
    if($room_is_filthy){
      echo "Yuk, Room is dirty : let's clean it up !";
      // cleanup_room();
      echo "<br>Room is now clean!";
      $room_is_filthy = false;
    } else {
      echo "<br>Nothing to do, room is neat.";
    } ?></p>
    <?php
      // 1.2 Clean your room Exercise, improved

      // Create the array of possible states
      $possible_states = ["very durty","durty","clean"];

      // When testing, change the index value to navigate to the possible array values
      $room_filthiness = $possible_states[1]; 

      if($room_filthiness=="very durty"){
        echo "Yuk, Room is Disgusting! Let's clean it up ! 2";
      } else if($room_filthiness == "durty"){
        echo "Yuk, Room is dirty : let's clean it up ! 2";
      // ...
      } else {
        echo "<br>Nothing to do, room is neat. 2";
      }   
    ?>
    <br>
    <br>
    <?php
      // 2. "Different greetings according to time" Exercise

      $now =  date("H:i"); // How to get the current time in PHP ? Google is your friend ;-)
      echo($now);
      // Test the value of $now and display the right message according to the specifications.
      if($now>"05:00"&& $now<"09:00"){
        echo " Good morning";
      }else if($now>"09:01"&& $now<"12:00"){
        echo " Good day";
      }else if ($now> "12:01"&& $now< "16:00"){
        echo " Good Afternoon";
      }elseif($now>"16:01"&& $now< "21:00"){
        echo " Good evening!";
      }else{
        echo " Good night";
      }
      ?>
        <br>
        <br>
      <?php
      // 3. "Different greetings according to age" Exercise
      // Form (incomplete)
      ?>
        <br>
        <br>
      <form method="get" action="">
        <label for="age">AGE</label>
        <input type="" name="age">
        <br>
        <br>
        <label for="gender">Male</label>
        <input type="radio" name="male">
        <label for="gender">Female</label>
        <input type="radio" name="female">
        <p>Do you speak English</p>
        <label for="speak">Yes</label>
        <input type="radio" name="Yes">
        <label for="speak">No</label>
        <input type="radio" name="speak">
        <br>
        <input type="submit" name="submit" value="Greet me now">
      </form>
      <?php
      if (isset($_GET["male"])){
        if (isset($_GET['age'])){
          if($_GET['age']<12){
            if(isset($_GET["Yes"])){
              echo 'Hello kiddo Men!';
            }else{
              echo 'Aloha kiddo Men!';
            }
          }else if($_GET['age']>12&&$_GET['age']<18){
            if(isset($_GET["Yes"])){
              echo 'Hello teen Men!';
            }else{
              echo 'Aloha teen Men!';
            }
          }else if($_GET['age']>18&&$_GET['age']<115){
            if(isset($_GET["Yes"])){
              echo 'Hello Adult Men!';
            }else{
              echo 'Aloha Adult Men!';
            }
          }else{
            if(isset($_GET["Yes"])){
              echo "Wow Men! Still alive ? Are you a robot, like me ? Can I hug you ?";;
            }else{
              echo "Aloha Men! Still alive ? Are you a robot, like me ? Can I hug you ?";;
            }
          }
        }
      }if (isset($_GET["female"])){
        if (isset($_GET['age'])){
          if($_GET['age']<12){
            if(isset($_GET["Yes"])){
              echo 'Hello kiddo WoMen!';
            }else{
              echo 'Aloha kiddo WoMen!';
            }
          }else if($_GET['age']>12&&$_GET['age']<18){
            if(isset($_GET["Yes"])){
              echo 'Hello teen WoMen!';
            }else{
              echo 'Aloha teen WoMen!';
            }
          }else if($_GET['age']>18&&$_GET['age']<115){
            if(isset($_GET["Yes"])){
              echo 'Hello Adult WoMen!';
            }else{
              echo 'Aloha Adult WoMen!';
            }
          }else{
            if(isset($_GET["Yes"])){
              echo "Wow WoMen! Still alive ? Are you a robot, like me ? Can I hug you ?";;
            }else{
              echo "Aloha WoMen! Still alive ? Are you a robot, like me ? Can I hug you ?";;
            }
          }
        }
      }
      ?>
    
  </body>
</html>