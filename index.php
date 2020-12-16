<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
       $name = $_GET["name"];
       $email = $_GET["email"];
       $age = $_GET["age"];
    
     

      // validation
      if ( empty($name) || empty($email) || empty($age)) {
          echo "not validate beacuse one of the three value is empty";
         
       } else if(strlen($name) <= 3){
           echo "name = $name. </br> validate the name is inferior a three word";
       } else if((strpos($email, "@") === false) || (strpos($email, ".") === false)){
           echo "mail = $email. </br> not validate must contain @ and .";
       } else if ((is_numeric($age) === false)){
           echo "age = $age. </br> age must be a number";
       } else{
           echo "sucess access";
       }
           
       
         
   ?>
</body>
</html>