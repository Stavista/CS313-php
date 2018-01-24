Welcome <?php echo $_POST["name"]; ?> <br>
Click here to send yourself an <a href="mailto:<?php echo $_POST["email"]; ?>">email</a><br>
Your major is <?php echo $_POST["major"]; ?> <br>
This is your comment <?php echo $_POST["comment"]; ?> <br>
Here are the countries you've visited 
<?php $countries = $_POST['country'];
foreach($countries as $country) {
    if ($country === 'na'){
            echo " North America";
    }elseif ($country === 'sa'){
        echo " South America";
    }elseif ($country === 'eu'){
        echo " Europe";
    }elseif ($country === 'as'){
        echo " Asia";
    }elseif ($country === 'au'){
        echo " Australia";
    }elseif ($country === 'af'){
        echo " Africa";
    }elseif ($country === 'an'){
        echo " Antarctica";
    }
    
} ?>