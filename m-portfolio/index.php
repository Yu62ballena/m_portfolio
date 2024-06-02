<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Webアプリ開発向けのプログラミングスクール「RiseNowProgramming」。
  現役のフリーランスエンジニアが講師。
  実際の案件と同じレベルで開発体験ができ、カリキュラムをこなしていくことで実務がこなせる実力をつけることが可能です。" />

  <!-- ↓ URL要確認 -->
  <meta property="og:url" content="#" />
  <meta property="og:site_name" content="RiseNowProgramming" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="RiseNowProgramming" />
  <meta property="og:description" content="Webアプリ開発向けのプログラミングスクール「RiseNowProgramming」。
  実際の案件と同じレベルで開発体験ができ、実務がこなせる実力をつけることが可能です。" />
  <meta property="og:image" content="images/top-image.png" />

  <!-- ↓ twitter情報 要確認 -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@user_name" />

  <!-- favicon -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <!-- css -->
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/cover-slide.css" />
  <link rel="stylesheet" href="css/fadeIn-animation.css" />
  <link rel="stylesheet" type="text/css" href="css/particle.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/pcstyle.css" />

  <title>RiseNowProgramming</title>
</head>



<body>
  <div class="whole-container">
    <div id="particles-js"></div>
    <div id="load-wrapper">
      <div class="load-container">

        <h1 class="load-title fadeIn">こんな悩みを<br class="br-none">抱えていませんか？</h1>
        <p class="prompt fadeIn delay08"><span class="marker">当てはまるものにチェック</span></p>

        <!-- 設問群 -->
        <div class="questions-container">
          <form action="main.php" method="POST">


            <div class="question fadeIn delay10">
              <div class="box-container">
                <input type="checkbox" id="cbtest1" name="question1" />
                <label for="cbtest1" class="check-box"></label>
              </div>
              <p class="question-description">スクールに通ったけど案件が取れない</p>
            </div>

            <div class="question fadeIn delay11">
              <div class="box-container">
                <input type="checkbox" id="cbtest2" name="question2" />
                <label for="cbtest2" class="check-box"></label>
              </div>
              <p class="question-description">こなせるか不安で案件にチャレンジできない</p>
            </div>

            <div class="question fadeIn delay12">
              <div class="box-container">
                <input type="checkbox" id="cbtest3" name="question3" />
                <label for="cbtest3" class="check-box"></label>
              </div>
              <p class="question-description">内容が難しくて学習が進まない</p>
            </div>


            <div class="question fadeIn delay13">
              <div class="box-container">
                <input type="checkbox" id="cbtest4" name="question4" />
                <label for="cbtest4" class="check-box"></label>
              </div>
              <p class="question-description">どうしてもエラーが解決できない</p>
            </div>

            <div class="submit-btn fadeIn delay15">
              <!-- <input class="load-btn" type="submit" value="解決案を見る"> -->
              <button type="submit">解決案を見る</button>
            </div>




          </form>
        </div>



      </div>
      <!--/wrapper-->
    </div>
  </div>
  <script src="js/fadeIn-animation.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="js/particle.js"></script>
</body>

</html>