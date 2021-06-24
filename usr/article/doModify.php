<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DB CONNECTION ERROR");

if ( isset($_GET['title']) == false) {
  echo "title을 입력해주세요.";
  exit;
}

if ( isset($_GET['body']) == false) {
  echo "body을 입력해주세요.";
  exit;
}

$id = $_GET['id'];
$title = $_GET['title'];
$body = $_GET['body'];

$sql = "
upDate article
SET updateDate = NOW(),
title = '${title}',
`body` = '${body}'
where id = '${id}'
";
$rs = mysqli_query($dbConn, $sql);

?>

?>
<script>
alert('<?=$id?>번 게시물이 수정되었습니다.');
location.replace('detail.php?id=<?=$id?>');
</script>