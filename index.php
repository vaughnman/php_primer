   
   <?php 
        $title = "Index";
        include 'includes/header.php' 
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php  
        //Printing to HTML using echo
        echo 'Hello PHP!';
        // YOu can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
        // Variables need a '$'. They are not strongly typed
        $name = 'Vaughn Bauer';
        $age = 9451346;
        // echo variable
        echo $name;
        echo '<h4>My Name Is: '.$name.' </h4>';
        echo '<h4>My Age Is: '.$age.' </h4>';
        // Echo using double quotes and interpolation
        echo "<h4>My Name is: $name </h4>";
    ?>
    <a href="https://cst323activity1.azurewebsites.net/index.php" target="_blank" class="btn btn-danger">AZURE</a>

    <a href="https://cst323studentapp.herokuapp.com/" target="_blank" class="btn btn-danger">Heroku</a>

    <a href="http://cst323activity-env.eba-ynk3p8a2.us-east-1.elasticbeanstalk.com/" target="_blank" class="btn btn-danger">AWS</a>
    <?php
        require 'includes/footer.php' 
    ?>
