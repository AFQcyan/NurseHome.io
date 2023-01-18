<?php

namespace src\Controller;

use src\App\DB;

class UserController
{
    public function register()
    {
        $_POST = ajaxValidation($_POST);
        extract($_POST);

        if(session()->get("captcha", true) != $captcha)
        {
            returnJSON(["msg" => "자동입력방지문자를 잘 못 입력하셨습니다.", "result" => false]);
        }

        $user = DB::fetch("SELECT * FROM users WHERE id = ?", array($id));
        if($user)
        {
            returnJSON(["msg" => "중복된 아이디입니다. 다른 아이디로 다시 시도해주세요.", "result" => false]);
        }

        $img = upload($_FILES['img']);
        //회원가입 DB 에 정보를 넣어야함.
        DB::execute("INSERT INTO users (id,password,name,img) VALUES (?,?,?,?)", array($id, $password, $name, $img));
        returnJSON(["msg" => "회원가입이 정상적으로 완료되었습니다.", "result" => true]);
    }

    public function login()
    {
        $_POST = ajaxValidation($_POST);
        extract($_POST);
        $user = DB::fetch("SELECT * FROM users WHERE id = ? , password = ?", array($id, $password));
        if(!$user)
        {
            returnJSON(["msg" => " 아이디 혹은 비밀번호가 잘못되었습니다."]);
        }
        session()->set("user", $user);
        returnJSON(["msg" => "정상적으로 로그인 되었습니다.", "result" => true]);
    }

    public function logout()
    {
        session()->remove("user");
        redirect('/', '로그아웃 되었습니다.');
    }
}