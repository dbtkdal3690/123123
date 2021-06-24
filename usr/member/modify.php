<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';


if ( isset($_GET['loginId']) == false ) {
  echo "loginId를 입력해주세요.";
  exit;
}
$loginId = intval($_GET['loginId']);
$sql = "
SELECT *
FROM member AS M
WHERE M.loginId = '${loginId}'
";
$member = DB__getRow($sql);

if ( $member == null ) {
  echo "${loginId}번 회원은 존재하지 않습니다.";
  exit;
}
?>
<?php
$pageTitle = "회원 수정";
?>
<?php require_once __DIR__ . "/../head.php"; ?>
<div>
</head>
<body>
  <form action="doModify.php">
  <div>
  <span>아이디</span>
  <input type="text" name="" id="">
  </div>
  <div>
  <span>비밀번호</span>
  <input type="password" name="" id="">
  </div>
  <div>
  <input type="submit" value="회원정보수정"></div>
  </form>
</body>
</html>