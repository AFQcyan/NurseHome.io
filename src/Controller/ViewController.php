<?php

namespace src\Controller;

use src\App\DB;

class ViewController 
{
    // 메인
    public function index()
    {
        $datas['title'] = "메인";
        view("index", $datas);
    }

    public function notice(){
        $datas['title'] = "공지사항";
        view("notice", $datas);
    }

    public function news(){
        $datas['title'] = "새소식";
        view("news", $datas);
    }
    public function equip(){
        $datas['title'] = "시설소개";
        view("equip", $datas);
    }

    public function donate(){
        $datas['title'] = "후원";
        view("donate", $datas);
    }

    public function volunteer(){
        $datas['title'] = "자원봉사";
        view("volunteer", $datas);
    }

    public function gallary(){
        $datas['title'] = "갤러리";
        view("gallary", $datas);
    }

    // 캡차 이미지
    public function captcha()
    {
        $str = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $code = '';
        for ($i = 0; $i < 5; $i++) {
            $code .= $str[rand(0, strlen($str) - 1)];
        }

        session()->set("captcha", $code);

        $im = imagecreatetruecolor(100, 80);
        $bg = imagecolorallocate($im, 22, 86, 165); // background color blue
        $fg = imagecolorallocate($im, 255, 255, 255); // text color white
        imagefill($im, 0, 0, $bg);
        imagestring($im, 5, 28, 30, $code, $fg);
        header('Content-type: image/png');
        imagepng($im);
        imagedestroy($im);
    }

    // 초기 데이터 삽입
    public static function init()
    {
        if(DB::fetch("show table status like 'users'")->Auto_increment == 1){
            DB::execute("INSERT INTO users (id, password, name, img) VALUES (?, ?, ?, ?)", array("specialist1", "1234", "전문가1", "specialist1.jpg"));
            DB::execute("INSERT INTO users (id, password, name, img) VALUES (?, ?, ?, ?)", array("specialist2", "1234", "전문가2", "specialist2.jpg"));
            DB::execute("INSERT INTO users (id, password, name, img) VALUES (?, ?, ?, ?)", array("specialist3", "1234", "전문가3", "specialist3.jpg"));
            DB::execute("INSERT INTO users (id, password, name, img) VALUES (?, ?, ?, ?)", array("specialist4", "1234", "전문가4", "specialist4.jpg"));
        }
    }
}

ViewController::init();