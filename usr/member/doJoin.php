<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");


$loginId = $_GET['loginId'];
$loginPw = $_GET['loginPw'];
$name = $_GET['name'];
$nickname = $_GET['nickname'];
$cellphoneNo = $_GET['cellphoneNo'];
$email = $_GET['email'];

$sql = "
INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
loginId = '${loginId}',
loginPw = '${loginPw}',
`name` = '${name}',
nickname = '${nickname}',
cellphoneNo ='${cellphoneNo}',
email = '${email}'
";
mysqli_query($dbConn, $sql);

$loginId = mysqli_insert_id($dbConn);
?>

<script>
alert('회원가입이 완료되었습니다.');
location.replace('login.php');
</script>