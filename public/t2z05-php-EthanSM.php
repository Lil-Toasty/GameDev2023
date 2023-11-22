<?php
$myCheck = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myInputText01 = $_POST['myText01'];
    // if (strpos($myInputText01, 'fred') !== false ) {
    if ($myInputText01 == 'fred') {
        $myCheck = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Browser Title</Title>
</head>
<body>
<h3 align=center>t2z05-php-EthanSM</h3>
    <form action="index.php" method="post">
        <lable for="myText01">Enter Text:</lable>
        <input type="text" id="mtText01" name="myText01">
        <input type="Submit" value="Submit">
    </form>
    <?php
    if ($myCheck ) {echo "<b style='color:green'> Cool! </b>";}
    else {echo "<span style='color:red'> Try The Magic Word</span>";}
    ?>
</body>
</html>
