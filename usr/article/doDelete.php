<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DB CONNECTION ERROR");

$id = $_GET['id'];

$sql = "
DELETE FROM article WHERE id = '${id}'
";

mysqli_query($dbConn, $sql);


?>
<script>
alert('<?=$id?>번 게시물이 삭제되었습니다.');
location.replace('list.php');
</script>