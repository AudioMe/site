<?php defined('SYSPATH') or die('No direct script access.');

class Model_Vkontakte  {
    static protected $oAppId       = '3785121';
    static protected $oAppSecret   = 'X5TMJ90xnsHTFP4PoXuH';
    static protected $oRedirectUri = "http://site.ru:8080/callback?action=login";
    static protected $oCode        = NULL;

    static protected $oInstance       = NULL;

    static public function GetInstance() {
        if(self::$oInstance == NULL) {
            self::$oInstance = new self;
        }
        return self::$oInstance;
    }

    protected function getCode() {

        if(isset($_GET["code"])) {
            self::$oCode = $_GET["code"];
        }

    }

    public function getLink() {

        $oDialogUrl = 'http://api.vkontakte.ru/oauth/authorize?client_id='.self::$oAppId.'&scope=photos&redirect_uri='.self::$oRedirectUri.'&display=popup&response_type=code';

        return $oDialogUrl;

    }

    public function logIn() {

        $this->getCode();

        if(self::$oCode) {

            $tokenUrl = "https://api.vkontakte.ru/oauth/access_token?client_id=".self::$oAppId."&client_secret=".self::$oAppSecret."&code=".self::$oCode;
           var_dump($tokenUrl);
            $responce = json_decode(file_get_contents($tokenUrl));

            $oAccessToken = $responce->access_token;
            $uID = $responce->user_id;

            $profileUrl = "https://api.vkontakte.ru/method/getProfiles?uid=".$uID."&access_token=".$oAccessToken;
            $oUser = json_decode(file_get_contents($profileUrl));
            $oUser = $oUser->response[0];

            setcookie('id', $oUser->uid, time() + 2147483647, '/');
//            setcookie('name', $oUser->first_name . ' ' . $user->last_name, time() + 2147483647, '/');

            echo '<script type="text/javascript"> window.opener.location.reload(); window.close(); </script>';

        } else if(isset($_GET['error'])){
            echo '<script type="text/javascript"> window.opener.location.reload(); window.close(); </script>';
        } else {
            echo 'Error. Code not exist or not available';
        }

    }

    public function logOut() {
        setcookie('id', "", time() - 2147483647, '/');
        setcookie('name', "", time() - 2147483647, '/');
        header("Location: /login.php");
    }
}

