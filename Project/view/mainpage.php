<?php
    echo "<br>";
    setcookie("Mainpage","Agri Bazar",time()+(86400*30),"/");
    $point="";
    if(isset($_COOKIE["Mainpage"]))
    {
        $point=1;
    }
    if($point==1)
    {
        echo "You are visiting me before";
    }
    
    else{
        echo"You are visiting me first time. Thank you!!";
    }
?>
<?php
    echo "<br>";
    include "../view/siteheader.php";
    include "../view/navigationbar.php";
    echo "<br>";
    include "../view/mainpage_body.php";
    echo "<br>";
    include "../view/aboutus.php";
?>
