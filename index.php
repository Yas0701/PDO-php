<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welkom op deze pagina </h1>
    <?php echo "<i>Hello world</i><br>";?>

    <?php 
        $a=12;
        $b=10;
        $c=$a+$b;
        echo "$c <br/>";
    ?>
    <?php
    $a=12;
    $b=10;
    $c=$a*$b;
    echo "$c <br/>";
    ?>
    <?php
    $naam="Yasser<br>";
    echo "Welkom".$naam;     
    ?>
    <?php 
    $mijnNaam="Yasser";
    $jouwNaam="camel";
    echo $mijnNaam." zit bij ".$jouwNaam." in de klas!<br/>";
    echo "$mijnNaam zit bij $jouwNaam in de klas!";
    ?>

    <?php 
    $variabele1 =10;
    $variabele2=10;
    if ($variabele1=="10") {
    echo " <br> de twee waarden zijn gelijk";}
    else {
        echo " de  twee waarden zijn ongelijk";
    }
    ?>

    <?php 
    $variabele1= 10;
    $variabele2= 12;
    if ($variabele1 !=12){
    echo " <br>de twee waarden zijn ongelijk";}
    ?>
    <?php
    $variabele1=10;
    $variabele2=10;
    if ($variabele1=="10")
    echo "<br> twee waarden zijn gelijk";
    else{
       echo "twee waarden zijn ongelijk";
    };
    
    ?>
    <?php
        if (isset($_POST{'knopje'}))
        {
            //doe iets.
            echo "<br>er wordt op het knopje gedrukt.";
        } 
        else
        {
            // doe iets.
            echo "<br>op het knopje wordt er nog niet gedrukt.";
        }
    
    ?>

    <form method="post" action ="">
        <label> username </label><br>
        <input type="username" name="username"><br>
 
        <label> password</label><br>
        <input type="password" name="password"><br>
        <div>
           <input type="submit" name= "knopje">
        </div>
    </form>
    <?php
   $a = "verzonden";
   $b = "niet verzonden";
    if (isset($_POST['knopje']))
    {
         echo $_POST['username'];
         echo "<br>";
         echo $_POST ['password'];
        }
    else
    {
        echo "werkt niet";
    }
        ?>
    
    </body>

</html>