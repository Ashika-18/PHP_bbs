<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNS_3</title>
</head>
<body>
    <?php
    $my_sea = htmlspecialchars($_POST["s"], ENT_QUOTES);
    $db = new PDO("mysql:host = localhost; dbname = db", "root", "root");
    print "<p style='font-size: 20pt'>「{$my_sea}」の検索結果</p>";
    $ps = $db->query("SELECT * FROM tab WHERE mes like '%$my_sea%'");
    while ($r = $ps->fetch()) {
        print "{$r['ban']} {$r['nam']} {$r['dat']}<br>" .nl2br($r['mes'])."<hr>";
    }
        print "<p><a href='sns1.php'>一覧表示へ</a></p>";
    ?>
</body>
</html>