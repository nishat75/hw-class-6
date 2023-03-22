

<?php

/** 

for ($i=1; $i < 10 ; $i++) { 
    
    echo str_repeat("*",$i)."<br>";
    
}
*/

/** 
//factorial

$given_num=5;
$factorial=1;

for ($i=1; $i <= $given_num; $i++) { 
    $factorial=$factorial*$i;
}
echo "The factorial of $given_num is" ." " . $factorial;
*/

/** 
//table

$table_of=20;

for ($i=1; $i < $table_of; $i++) { 

    for ($j=1; $j <=10; $j++) { 
        echo "$i * $j=" . $i*$j ."<br>";
    }
}
*/
?>

<!--EVEN ODD-->
<!--
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 <form action="./even odd.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">EVEN ODD CHECKER</label>
    <input name="number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Insert a number</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
    
</body>
</html>
-->


<!--factorial-->


<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 <form action="./factorial.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">FACTORIAL CHECKER</label>
    <input name="factorial" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Insert a number</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
    
</body>
</html>
-->


<!--ttimes tables-->

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 <form action="./times tables.php" method="GET" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">TIMES TABLE GENERATOR</label>
    <input name="timestable" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Insert a number</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
    
</body>
</html>
-->



<!--MAIL CHEACKER-->


<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 <form action="./mailcheck.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mail validation</label>
    <input name="mail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Insert a number</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
    
</body>
</html>

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 <form action="./length.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">LENGTH CHEACKER</label>
    <input name="length" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Insert a number</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
    
</body>
</html>
