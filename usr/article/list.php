<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");

$sql = "
SELECT * 
FROM article AS A 
ORDER BY A.id DESC
";



$rs = mysqli_query($dbConn, $sql);

$articles = [];

while ( $article = mysqli_fetch_assoc($rs) ) {
  $articles[] =$article;
}
?>

<?php 
$pageTitle = "게시물 리스트";
?>
<?php require_once __DIR__ . "/../head.php"; ?>

<div>
<a href="write.php">글 작성하기</a>
<a href="../member/login.php">로그인하기</a>
<a href="../member/join.php">회원가입</a>
<hr>

</div>
<div>
<?php foreach ($articles as $article) { ?>
  <?php
  $detailUri = "detail.php?id=${article['id']}";
  ?>
  <a href="<?=$detailUri?>">번호 : <?=$article['id']?></a><br>
  작성날짜 : <?=$article['regDate']?><br>
  수정날짜 : <?=$article['updateDate']?><br>
  조회수 : <?=$article['hit']?><br>
  <a href="<?=$detailUri?>">제목 : <?=$article['title']?></a><br>
  내용 : <?=$article['body']?><br>
  <hr>
<?php } ?>
</div>
</body>
</html>
