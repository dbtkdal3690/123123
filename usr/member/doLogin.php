<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if ( isset($_GET['loginId']) == false ) {
  echo "loginId를 입력해주세요.";
  exit;
}

if ( isset($_GET['loginPw']) == false ) {
  echo "loginPw를 입력해주세요.";
  exit;
}
//$loginId = $_GET['loginId'];
//$loginPw = $_GET['loginPw'];
$loginId = mysqli_real_escape_string($dbConn, $_GET['loginId']);
$loginPw = mysqli_real_escape_string($dbConn, $_GET['loginPw']);

$sql = "
SELECT *
FROM `member` AS M
WHERE M.loginId = ?
AND M.loginPw = ?
";

$stmt = $dbConn->prepare($sql);
$stmt->bind_param('ss', $loginId, $loginPw);
$stmt->execute();
$result = $stmt->get_result();
$member = $result->fetch_assoc();

if ( empty($member) ) {
  jsHistoryBackExit("일치하는 회원이 존재하지 않습니다.");

}

if ( $member['loginPw'] != $loginPw ) {
  echo "비밀번호가 일치하지 않습니다.";
  exit;
}

$_SESSION['loginedMemberId'] = $member['id'];
jsLocationReplaceExit("../article/list.php", "{$member['nickname']}님 환영합니다.");