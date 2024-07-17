<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic PHP</title>
</head>
<body>
  <?php
    $list=["Diane","gens","Marc"];
    print_r($list);
    print_r($list[1]);

    $list_a=["cake"=>"eggs","el2"=>"flour"];
    print_r($list_a);

    $list_movie=["Dune part 2","Interstellar","Dune part 1","Midsommar"];
    print_r($list_movie[0]);
  ?>
  <?php
    $countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' );
    echo '<pre>';
      print_r($countries);
    echo '</pre>';
    var_dump($countries);
  ?>
  <?php
    $me = array(
      'age'	=> 45 , 
      'firstname' 		=> 'Alexandre' ,
      'lastname' 	  		=> 'Plennevaux' ,
      'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix')
    );
    
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    $me['hobbies'][] = "Video Games";
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    $mother = array(
      'age'	=> 56 , 
      'firstname' 		=> 'Vero' ,
      'lastname' 	  		=> 'Barb' ,
      'favourite_movies' 	=> array('La la land', 'Her', 'Matrix'),
      'hobbies'=> ['Lire']
    );
    $me["mother"]=$mother;
    $me['hobbies'][]='Sleep';
    $me['lastname']='Durant';
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    $soulmates = array(
      'age'	=> 56 , 
      'firstname' 		=> 'Emma' ,
      'lastname' 	  		=> 'S' ,
      'favourite_movies' 	=> array('La la land', 'Her', 'Matrix'),
      'hobbies'=> ['lire','Video Games']
    );
    $possible_hobbies_via_intersection = array_intersect($soulmates['hobbies'], $me['hobbies']);
    $possible_hobbies_via_merge = array_merge($me['hobbies'],$soulmates['hobbies']);   
    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';
  ?>
</body>
</html>