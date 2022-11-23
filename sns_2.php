<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNS_2</title>
</head>
<body>
    <?php
    $my_nam = htmlspecialchars($_POST['n'], ENT_QUOTES);
    $my_mes = htmlspecialchars($_POST['m'], ENT_QUOTES);
    $db = new PDO("mysql:host=localhost;dbname=db", "root", "root");
    $db->query("INSERT INTO tab (ban, nam, mes, dat) VALUES(NULL, '$my_nam', '$my_mes', NOW())");
    print "書き込みに成功！";
    print"<p><a href='sns_1.php'>一覧表示へ</a></p>";
    ?>
</body>
</html>