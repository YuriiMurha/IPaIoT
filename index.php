<!doctype html> 
 
<html lang = "en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <title>Registration</title> 
    <link rel = "stylesheet" href="style.css"> 
</head> 
 
<body> 
        <?php 
 
        $name_and_surname = $_POST['name_and_surname']; 
        $сountry = $_POST['сountry']; 
        $city = $_POST['city']; 
        $email = $_POST['email']; 
        $conf_email = $_POST['conf_email']; 
        $password= $_POST['password'];      
        $f = fopen("info.txt", 'w'); 
        fwrite($f, $name_and_surname."\n"); 
        fwrite($f, $country."\n"); 
        fwrite($f, $city."\n"); 
        fwrite($f, $email."\n"); 
        fwrite($f, $conf_email."\n"); 
        fwrite($f, $password."\n");    
        ?> 
 
        <form action = "" method = "post"> 
            <label>Name and Surname</label> 
            <input type="text" name="name_and_surname"> 
             
            <label>Сountry</label> 
            <input type="text" name="сountry"> 
             
            <label>City</label> 
            <input type="text" name="city"> 
             
            <label>Email</label> 
            <input type="email" name="email"> 
 
            <label>Confirm the email</label> 
            <input type="email" name="conf_email"> 
 
            <label>Password</label> 
            <input type="password" name="password"> 
 
            <button type="submit">OK</button> 
        </form>  
 
    </body> 
 
    </html>