<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Url: <input type="text" name="url">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $url = $_POST['url'];
    if (empty($url)) {
        echo "url is empty";
    } else {
        
    }
}
?>

</body>
</html>