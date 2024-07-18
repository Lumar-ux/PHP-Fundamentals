<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loop</title>
</head>
<body>
  <?php 
    $pronouns = array('I', 'You', 'He/She','We', 'You', 'They');
    foreach ($pronouns as $pro) {
      if($pro=='He/She'){
        echo "$pro codes"."<br>";
      }else{
        echo "$pro code"."<br>";
      }
    }
  ?>
  <?php
  $counter=0;
  while ($counter<121) {
    echo $counter." ";
    $counter++;
  }
  ?>
  <br>
  <br>
  <?php
  for ($counter=0;$counter<121;$counter++) {
    echo $counter." ";
  }
  ?>
  <br>
  <?php 
    $lst=["Daniel","Cars","Antoine","Louis","Nico"];
    foreach($lst as $lstall){
      echo $lstall." ";  
    }
  ?>
  <br>
<select>
<?php 
  $lst_country=["Belgique","France","Suisse","Portugal","Espagne","Brazil","Canada","China","Etas-Unis","Australia"];
  $country_codes=["BE","FR","CH","PR","ES","BR","CA","US","AU"];
  $countries=[];
  // for( $i= 0;$i<count($lst_country);$i++) {
  //   echo '<option>'.$lst_country[$i].'</option>';
  // }
  for ($i = 0; $i < count($lst_country); $i++) {
    $countries[$country_codes[$i]] = $lst_country[$i]; 
    echo '<option>' . $countries[$country_codes[$i]] . '</option>';
  }
  print_r($countries);
?>
</select>
</body>
</html>