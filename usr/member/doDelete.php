<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");


if (isset($_GET['loginId']) == false ) {
  echo "loginId를 입력해주세요.";
  exit;
}

$loginId = $_GET['loginId'];


$sql = "
DELETE FROM `member` WHERE loginId = '${loginId}'
";
mysqli_query($dbConn, $sql);

?>
<div><?=$id?>번 게시물이 삭제되었습니다.</div>
location.replace('detail.php?id=<?=$id?>');
<div><a href="list.php">리스트</a></div>