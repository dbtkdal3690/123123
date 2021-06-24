<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$sql = "
SELECT * 
FROM `member` AS M 
ORDER BY M.logId DESC
";


$pageTitle = "회원가입";
?>
<?php require_once __DIR__ . "/../head.php"; ?>

<form action="doJoin.php">
  <div>
    <span>로그인아이디</span>
    <input required placeholder="로그인아이디를 입력해주세요." type="text" name="loginId"> 
  </div>
  <div>
    <span>로그인비밀번호</span>
    <input required placeholder="로그인비밀번호를 입력해주세요." type="password" name="loginPw"> 
  </div>
  <div>
    <span>이름</span>
    <input required placeholder="이름을 입력해주세요." type="text" name="name"> 
  </div>
  <div>
    <span>닉네임</span>
    <input required placeholder="닉네임을 입력해주세요." type="text" name="nickname"> 
  </div>
  <div>
    <span>전화번호</span>
    <input required placeholder="전화번호를 입력해주세요." type="text" name="cellphoneNo"> 
  </div>
  <div>
    <span>이메일</span>
    <input required placeholder="이메일을 입력해주세요." type="text" name="email"> 
  </div>

  <div>
    <input type="submit" value="회원가입">
  </div>
</form>

<?php require_once __DIR__ . "/../foot.php"; ?>
