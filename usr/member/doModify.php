<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");


if ( isset($_GET['loginId']) == false ) {
  echo "loginId를 입력해주세요.";
  exit;
}

$loginId = intval($_GET['loginId']);

$sql = "
SELECT *
FROM `member` AS M
WHERE M.loginId = '${loginId}'
";
$rs = mysqli_query($dbConn, $sql);
$member = mysqli_fetch_assoc($rs);

if ( $member == null ) {
  echo "${loginId}번 게시물은 존재하지 않습니다.";
  exit;
}
$title =  $_GET['title'];
$body =  $_GET['body'];

$sql = "
UPDATE `member`
SET update = NOW(),
title = '${title}',
`body` = '${body}'
WHERE id = ${id}
";
mysqli_query($dbConn, $sql);

?>
<script>
alert('<?=$userId?>번 회원정보가 수정되었습니다.');
location.replace('detail.php?userId=<?=$loginId?>');
</script>