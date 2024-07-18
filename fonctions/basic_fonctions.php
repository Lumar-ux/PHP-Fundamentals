<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FONCTIONS</title>
</head>
<body>
 <?php 
 echo ucfirst("word")."<br>";
 echo date("Y")."<br>";
 echo date("j, n, Y")."<br>";
  ?>
  <!-- <?php 
    function additionner($a, $b) {
      if(!is_int($a)or!is_int($b)){
        echo "Error: argument is not a number.";
      }else{
        return $a + $b;
      }
  }
  $resultat = additionner("10", 5);
  echo $resultat."<br>";
  ?> -->
  <?php 
    function initials($str){
      $newStr="";
      for ($i=0;$i<strlen($str);$i++){
        if($i == 0 || $str[$i - 1] == " "){
          $newStr .= $str[$i];
        }
      };
      return $newStr;
    };
    echo initials("Lucas Maroy")."<br>";
  ?>
    <?php 
    function replace($str) {
      $newStr = "";
      for ($i = 0; $i < strlen($str); $i++) {
          if ($str[$i] === "a" && isset($str[$i + 1]) && $str[$i + 1] === "e") {
              $newStr .= "æ";
              $i++;
          } else {
              $newStr .= $str[$i];
          }
      }
      return $newStr;
    }

    echo replace("microsphaera")."<br>";
    $str_rplc = replace("microsphaera");
    function reverse_replace($str){
      $str = str_replace("æ", "ae", $str); // Replace 'æ' with 'ae'
      return $str;
    }
    echo reverse_replace($str_rplc)."<br>";
  ?>
</body>
</html>