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
$pageTitle = "게시물 작성하기";
?>
<?php require_once __DIR__ . "/../head.php"; ?>

<hr>

<form action="doWrite.php">
<div>
<span>제목</span>
<input type="text" name=""><br>
<span>내용</span>
<input type="text"><br>
</div>
<div>
<input type="submit" value="글작성">
</div>
</form>
  
</body>
</html>