<?php
      echo "<br />";
//問1：引数に$score1,$score2,$score3を持ち、合計点が210だったら「合計点はOOなので合格です」、そうではなかったら「合計点はOOなので不合格です」と表示する関数を作りなさい。
$score1 = 60 ;
$score2 = 80 ;
$score3 = 90 ;
$total = $score1 + $score2 + $score3;

if ($total >= 210) {
  print "合計点は($total)なので合格です";
}
else{
  print "合計点は($total)なので不合格です";
}

?>

<?php
//問2：三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。
      echo "<br />";
$width = 3;
$height = 5;
$widthbottom = 3;
$widthtop = 4;

$TriangleArea = $width * $height / 2;
$RectangleArea = $height * $width;
$TrapezoidalArea = ($widthbottom + $widthtop) * $height /2;

print "$TriangleArea";
      echo "<br />";
print "$RectangleArea";
      echo "<br />";
print "$TrapezoidalArea";

?>