<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$pageTitle?></title>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.3.2/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="/usr/common.css">
</head>
<body>
  <div class="site-wrap">
  <header class="top-bar bg-black text-white h-10">
      <div class="container mx-auto h-full flex">
        <a href="/" class="top-bar__logo px-5 flex items-center">
          <span><i class="fas fa-lemon"></i></span>
          <span class="ml-2 font-bold">블로그 </span>
        </a>

        <div class="flex-grow"></div>

        <nav class="menu-box-1">
          <ul class="flex h-full">
            <li class="hover:bg-white hover:text-black">
              <a href="/usr/article/list.php" class="h-full flex items-center px-5">
                <span><i class="fas fa-home"></i></span>
                <span class="ml-2 font-bold">리스트</span>
              </a>
            </li>
            <li class="hover:bg-white hover:text-black">
              <a href="/usr/home/home.php" class="h-full flex items-center px-5">
                <span><i class="far fa-id-card"></i></span>
                <span class="ml-2 font-bold">나의 페이지</span>
              </a>
            </li>
            <li class="hover:bg-white hover:text-black">
              <a href="/usr/member/login.php" class="h-full flex items-center px-5">
                <span><i class="fas fa-sign-in-alt"></i></span>
                <span class="ml-2 font-bold">로그인</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

    <h1><?=$pageTitle?></h1>
    <hr>
    <?php if ( $isLogined ) { ?>
      <a href="../member/mypage"><?=$loginedMember['nickname']?> 마이페이지</a>
      <a href="../member/doLogout">로그아웃</a>
      <a href="../member/doSecession">탈퇴</a>
    <!-- unset($_SESSION); -->
    <?php } else { ?>
      <a href="../member/login">로그인</a>
      <a href="../member/join">회원가입</a>
    <?php } ?>
  </div>

 