<?php
if (isset($_REQUEST['num'])) {
    $num = $_REQUEST['num'];
}
if (is_numeric($num)) {
    $ans = $num * 1.618;
} else {
    $ans = '-';
}
?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Golden Ratio</title>
    
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" type="text/css" />
</head>
<body>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h1>Golden Ratio - 黄金比</h1>
            
            <p>テキストフィールドに数字を入力すると、黄金比を計算します。</p>
            
            <form action="" method="get">
                <input type="text" name="num" size="5"/>
                <input type="submit" class="btn" value="Send"/>
            </form>
        
            <p>の黄金比は・・・ 約<span><?php echo htmlspecialchars($ans); ?></span></p>
        </div>
    </div>

</body>
</html>
