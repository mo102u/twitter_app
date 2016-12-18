<?php
$fp = fopen('data.csv', 'a+b');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    fputcsv($fp, [$_POST['name'], $_POST['content']]);
    rewind($fp);
}
while ($row = fgetcsv($fp)) {
    $rows[] = $row;
}
fclose($fp);
?>

<!DOCTYPE>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>twitter like app</title>
</head>
<body>
    <section>
        <h2>新規投稿</h2>
        <form action="" method="post">
            名前 : <input type="text" name="name"><br>
            投稿内容 : <input type="text" name="content"><br>
            <input type="submit" value="投稿">
        </form>
    </section>
    <section>
        <h2>投稿一覧</h2>
        <?php if (!empty($rows)): ?>
            <?php foreach($rows as $row):?>
                <ul>
                    <li><?= $row[1]; ?>(<?= $row[0] ?>)</li>
                </ul>
            <?php endforeach; ?>
        <?php else: ?>
            <p>投稿はまだありません</p>
        <?php endif; ?>
    </section>
</body>
</html>
