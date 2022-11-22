<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNS_1</title>
</head>
<body>
    <form action="sns2.php" method="post">
        名前
        <div>
            <input type="text" name="n">
        </div>
        メッセージ
        <div><textarea name="m" placeholder="メッセージ"></textarea></div>
        <input type="submit" value="送信するよ！">
    </form>
    <hr>
    <form action="sns3.php" method="post">
        検索キーワード
        <div><input type="text" name="s"></div>
        <input type="submit" value="検索するよ！">
    </form>
    <hr>
    <?php
        $db = new PDO("mysql:host=localhost;dbname=db", "root", "root");
        $ps = $db->query("SELECT * FROM tb ORDER BY ban DESC");
        while ($r = $ps->fetch()) {
            print "{$r['ban']} {$r['nam']} {$r['dat']}<br>" .nl2br($r['mes'])."<hr>";
        }
    ?>
</body>
</html>