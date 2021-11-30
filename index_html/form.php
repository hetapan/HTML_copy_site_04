<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>sample</title>
<link href="../scss/form.min.css" rel="stylesheet" type="text/css">
</head>
<body>

  <!-- main -->
  <main>
    <div class="container">
      <P class="txts">ノマドエンジニア講座iSaraの資料請求をいただき、ありがとうございます。<br>
        ご登録いただいたメールアドレスに、資料をお送りいたしました。<br><br>
        ※届いていない場合、迷惑メールフォルダに入っていないかご確認ください。<br>
        そちらにも届いていない場合、isarafreelance@gmail.comまでご連絡ください。</P>
    </div>
  </main>

  <?PHP
  // 変数とタイムゾーンを初期化
    $header = null;
    $subject = null;
    $text = null;
    date_default_timezone_set('Asia/Tokyo');
  //サニタサイズ
    $clean = array();

    if( !empty($_POST)){
      foreach( $_POST as $key => $value){
        $clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
      }
    }

  // ヘッダー情報を設定
	  $header = "MIME-Version: 1.0\n";
	  $header .= "From: GRAYCODE <noreply@gray-code.com>\n";
	  $header .= "Reply-To: GRAYCODE <noreply@gray-code.com>\n";

  // タイトル
    $subject = "資料請求ありがとうございます。";

  //本文
    $text = "この度は、資料を請求頂き誠にありがとうございます。資料をお送りいたします。\n\n";
	  $text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
	  $text .= "氏名：" . $clean['seimei1'] . "\n";
	  $text .= "メールアドレス：" . $clean['mail'] . "\n\n";
	  $text .= "事務局";

  // メール送信
    mb_send_mail( $clean['mail'], $subject, $text);

  ?>

</body>
</html>
