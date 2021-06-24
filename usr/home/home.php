<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die("DBCONNECTN ERROR");


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>내 정보</title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:500px; margin-top:30px; }
</style>
</head>
<body>
	<div class="find">
		<form method="post" action="member_update.php">
			<h1>내 정보</h1>
			<p><a href="/page/main.php">홈으로</a></p>
				<fieldset>
					<legend>마이페이지</legend>
						<table>
							<tr>
								<td>아이디</td>
								<td><input type="text" size="35" name="userid" value="<?php echo $_SESSION['userid'];?>" disabled></td>
							</tr>
							<tr>
								<td>비밀번호</td>
								<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
							</tr>
							<tr>
								<td>이름</td>
								<td><input type="text" size="35" name="name" placeholder="이름" value="<?php echo $member['name']; ?>"></td>
							</tr>
							<tr>
								<td>주소</td>
								<td><input type="text" size="35" name="adress" placeholder="주소" value="<?php echo $member['adress']; ?>"></td>
							</tr>
							<tr>
								<td>성별</td>
								<td>남<input type="radio" name="sex" value="남"> 여<input type="radio" name="sex" value="여"></td>
							</tr>
							<tr>
								<td>이메일</td>
								<td><input type="text" size="35" name="email" placeholder="이메일" value="<?php echo $member['email']; ?>"></td>
							</tr>
						</table>
					<input type="submit" value="정보변경" />
			</fieldset>
		</form>
	</div>
</body>
</html>
