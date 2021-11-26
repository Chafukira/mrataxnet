<?php
class User {
    
    function login($email, $password) {
        $login_link = '/programming/challenge/webservice/auth/login';
        $endpoint = WEB_SERVICE;

        //body parameters
        $credentials =array(
            'Email' => $email,
            'Password' => $password
        );

        $headers = HEADERS;

        //$ch = curl_init();
        $ch = curl_init($endpoint.$login_link);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($credentials));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    
        $content = curl_exec($ch);

        curl_close($ch);

        //echo $content.PHP_EOL;
        $response = json_decode($content);
        //print_r($response);
        if($response->Authenticated == 1){
            return true;
        }else{
            return false;
        }
       
    }

    function logout(){
        $login_out = '/programming/challenge/webservice/auth/logout';
        $endpoint = WEB_SERVICE;
        
        //body_parameter
        $credentials = [
            'Email'=>$_SESSION['email']
        ];

        $headers = HEADERS;

        //curl init
        $out = curl_init($endpoint.$login_out);
        
        curl_setopt($out, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($out, CURLOPT_POST, true);
        curl_setopt($out, CURLOPT_POSTFIELDS, $credentials);
        curl_setopt($out, CURLOPT_HTTPHEADER, $headers);

        $content = curl_exec($out);
         curl_close($out);

        $response = json_decode($content);
        if($response-> ResultCode == 0){
            return false;
        }else{
            return true;
            header('location:' . URLROOT . '/users/login');
        }


    }


}
