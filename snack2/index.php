<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>TEST 2</h1>
  <?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age']+0;
    $output = 'Accesso non granted';
    echo $name.'<br>';
    echo $mail.'<br>';
    echo $age.'<br>';
    if(strlen($name)>3 && strpos($mail, '@')!=false && strpos($mail, '.')!=false && is_integer($age)!=false ){
      $output='Accesso Garantito';
    }

   ?>
   <h1> <?php echo $output ?></h1>
</body>
</html>