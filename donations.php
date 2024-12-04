<link rel="stylesheet" href="style_donations.css">
<nav class=result>
    <?php
        //$port = "localhost";
        //$user = "root";
        //$password = "";

        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $amount=$_POST["amount"];
        $message=$_POST["message"];

        /*$conection = mysqli_connect($port, $user, $password);
        mysqli_select_db($conection, "mydb");
        $insert = "INSERT INTO tabledb VALUES ('$name','$email','$phone','$amount','$message')";
        mysqli_query($conection, $insert);*/

        echo "Name: $name";
        echo "<br><br>";
        echo "E-mail: $email";
        echo "<br><br>";
        echo "Phone: $phone";
        echo "<br><br>";
        echo "Amount: $$amount US";
        echo "<br><br>";
        echo "Your message: $message";
    ?>
</nav>
<script scr=" " async defer></script>