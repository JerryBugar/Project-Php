<?php

$name = isset($name) ? $name : ''; 
$email = isset($email) ? $email : ''; 
$website = isset($website) ? $website : ''; 
$comment = isset($comment) ? $comment : ''; 
?>
<style>
    body {
        background-image: url('https://img.freepik.com/free-vector/blue-black-abstract-background_1340-17012.jpg'); 
        background-size: cover; 
        background-repeat: no-repeat; 
        color: white;
    }
</style>
Name: <input type="text" name="name" value="<?php echo $name;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

Website: <input type="text" name="website" value="<?php echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
