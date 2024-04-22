<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <p>
        <?php
        // 変数に値を代入する
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;
        // 変数の中身を出力する
        $scoretotal = $score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
        $scoreaverage = $scoretotal/10;

        // 変数の中身を出力する
        echo $scoreaverage
        ?>
    </p>
</body>
</html>