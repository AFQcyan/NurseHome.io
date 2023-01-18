<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-¬øCompatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>인삼골 주간 보호 센터 <?= $title . " 페이지" ?></title>
    <link rel="stylesheet" href="./resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="./resources/css/font-awesome.min.css">
    <link rel="stylesheet" href="./resources/css/reset.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="./favicon.png">
</head>
<body>
    <div class="wrap">
        <header class="header row" id="header">
            <div class="logo col-xl-12">
                <a href="/">
                    <img src="./resources/img/insamLogo.png" alt="">
                    <span class="hidden">인삼골 주간 보호 센터</span>
                </a>
            </div>
            <nav class="menus col-12">
                <ul class="menu row" id="menu">
                    <li class="col-1 empty nav"></li>
                    <li class="main nav col-2 active" data-nav="main"><a href="/">홈</a></li>
                    <li class="donate nav col-2 " data-nav="donate"><a href="/donate" >후원</a></li>
                    <li class="notice nav col-2 " data-nav="notice"><a href="/notice" >공지사항</a></li>
                    <li class="equip nav col-2 " data-nav="equip"><a href="/equip" >시설소개</a></li>
                    <li class="gallary nav col-2 " data-nav="gallary"><a href="/gallary" >갤러리</a></li>
                    <li class="col-1 empty nav"></li>
                </ul>
            </nav>
        </header>
        <script>
        function ajax(url, type, data, successFn) {
            $.ajax({
                url: url,
                type: type,
                data: data,
                contentType: false,
                processData: false,
                success: successFn
            });
        }

        function login() {
            let form = document.querySelector('#loginForm');
            let data = new FormData(form);
            $.ajax({
                url: '/user/login',
                type: 'post',
                data: data,
                contentType: false,
                processData: false,
                success: data => {
                    data = JSON.parse(data);
                    alert(data.msg);
                    if (data.result) {
                        location.reload();
                    }
                }
            });
        }

        function register() {
            let form = document.querySelector('#registerForm');
            let data = new FormData(form);
            $.ajax({
                enctype: 'multipart/form-data',
                url: '/user/register',
                type: 'post',
                data: data,
                contentType: false,
                processData: false,
                success: data => {
                    data = JSON.parse(data);
                    alert(data.msg);
                    if (data.result) {
                        location.reload();
                    }
                }
            });
        }

        function openPopup(el) {
            document.querySelector(`#${el}`).value = event.target.dataset.idx;
        }
    </script>