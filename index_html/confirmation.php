<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>sample</title>
<link href="../scss/confirmation_style.min.css" rel="stylesheet" type="text/css">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../javascript/javascript.js"></script>
</head>
<body>
  <!-- header -->
  <header id="header">
    <div class="container">
      <div class="header_left">
        <img src="../image/logo.png" class="header_left_logo">
        <P class="header_left_logo txtxs">バンコクのノマドエンジニア育成講座</P>
      </div>
    <div class="clear"></div>
    </div>
  </header>

  <!-- main -->
  <?PHP
  //サニタサイズ
    $clean = array();

    if( !empty($_POST)){
      foreach( $_POST as $key => $value){
        $clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
      }
    }
  ?>

  <main>
    <div class="container">
      <h2 class="txt_1">資料請求</h2>
      <P class="txt_2">ご記入内容を確認の上、送信ボタンをクリックしてください。</P>
      <form method="post">
        <table border="1" class="txtxs">
          <tr>
            <th class="captain" colspan="2">資料請求</th>
          </tr>
          <tr>
            <th >名前</th>
            <td><?php echo $clean["seimei1"]; ?>&emsp;<?php echo $clean["seimei2"]; ?></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><?php echo $clean["mail"]; ?></td>
          </tr>
          <tr>
            <th class="sec_note">備考</th>
            <td class="sec_note_2"><?php echo $clean["note"]; ?></td>
          </tr>
        </table>
        <div class="table_box">
          <button class="submit_button_1" type="button" onclick="submitAction('form.php')" >送信</button>
          <button class="submit_button_2" type="button" onclick="submitAction('index.php')" >キャンセル</button>
        </div>
        <input type="hidden" name="seimei1" value="<?php echo $_POST['seimei1']; ?>">
        <input type="hidden" name="seimei2" value="<?php echo $_POST['seimei2']; ?>">
	      <input type="hidden" name="mail" value="<?php echo $_POST['mail']; ?>">
	      <input type="hidden" name="note" value="<?php echo $_POST['note']; ?>">
      </form>

    </div>
  </main>

  <!-- footer -->
  <footer>
    <div class="container">
      <P class="txtxs">バンコクのノマドエンジニア育成講座、iSara[イサラ]<br>Copyright ©︎ iSara All Rights Reserved.</P>
      <P class="txtxs">Designed by Maya Ogi / Developed by Kentaro Koga</P>
    </div>
  </footer>
</html>
