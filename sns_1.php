<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SNS_1</title>
</head>
<body>
    <h1>– 掲示板サイトへようこそ –</h1>
    <form action="sns_2.php" method="post">
        名前
        <div>
            <input type="text" name="n">
        </div>
        メッセージ
        <div><textarea name="m" placeholder="メッセージ"></textarea></div>
        <input type="submit" value="送信するよ！">
    </form>
    <hr>
    <form action="sns_3.php" method="post">
        検索キーワード
        <div><input type="text" name="s"></div>
        <input type="submit" value="検索するよ！">
    </form>
    <hr>
    <?php
        $db = new PDO("mysql:host=localhost;dbname=db", "root", "root");
        $ps = $db->query("SELECT * FROM tab ORDER BY ban DESC");
        while ($r = $ps->fetch()) {
            print "{$r['ban']} {$r['nam']} {$r['dat']}<br>".nl2br($r['mes'])."<hr>";
        }
    ?>
</body>
</html>