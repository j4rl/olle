<!DOCTYPE html>
<?php

function writeString($string, $num) {
    for ($i = 0; $i < $num; $i++) {
        echo $string."<br>";
    }
}

?>
<html>
<head>
    <title>My Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>My Page</h1>
    <p>My Page is a page.</p>
     <p><?=writeString("Hello Olle!", 6)?></p>

    <p>My Page is a page.</p>
</body>
</html>
<script>
    console.log("<?=writeString("Hello Olle!", 3)?>");
</script>