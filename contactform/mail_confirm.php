<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8"> 
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h1>お問い合わせ内容確認</h1>

<div>
    
    お問い合わせ内容はこちらで宜しいでしょうか?<br>
    よろしければ「送信する」ボタンを押して下さい。
</div>
    
<div>
    名前<br>
    <?php echo $_POST['name'];?>
</div>
    
<div>
    メールアドレス<br>
    <?php echo $_POST['mail'];?> 
</div>

<div>
    年齢<br>
    <?php echo $_POST['age'];?>
</div>

<div>
    コメント<br>
    <?php echo $_POST['comments'];?>
</div>
    

    
<form action="index.html">
    <input type="submit" class="button1" value="戻って修正する">
</form>
    
<form action="insert.php" method="post">
    <input type="submit" class="button2" value="登録する">
    <input type="hidden" value="<?php echo $_POST['name'];?>"name="name">
    <input type="hidden" value="<?php echo $_POST['mail'];?>"name="mail">
    <input type="hidden" value="<?php echo $_POST['age'];?>"name="age">
    <input type="hidden" value="<?php echo $_POST['comments'];?>"name="comments">
</form>
    
</body>




</html>