<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LUNAゲーム実況者</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
  <div class="header">
    <div class="header-left">LUNA</div>
    <div class="header-right">
      <ul>
        <li>ゲーム実況者LUNAとは</li>
        <li>YouTubeでの活動内容</li>
        <li>好きなゲーム</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message">お問合せいただきありがとうございます。</div>

    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">🔳 生年月日</div>
      
      <?php echo $_POST['age']; ?>
      
      <div class="form-item">🔳 名前</div>

      <?php echo $_POST['name']; ?>

      <div class="form-item">🔳 お問い合わせ内容</div>

      <?php echo $_POST['body']; ?>
    </div>

  </div>

  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>プロフィール</li>
        <li>実績</li>
        <li>コンタクト</li>
      </ul>
    </div>
  </div>

  </div>

</body>

</html>

