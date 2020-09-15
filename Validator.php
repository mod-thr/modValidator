<?php
namespace security\validator;

class Validator {

    private static $passwordREGEX = '/^[A-Za-z0-9@-]{8,20}$/';
    private static $usernameREGEX  = '/^[A-Za-z0-9]{5,12}$/';
    private static $phoneREGEX = '/^[0-9]{11}$/';
    private static $emailREGEX = '/^([a-z0-9\.-]+)@([a-z0-9\-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/';


    /**
     * @param $email
     * @return false|int
     */
    public static function isValidEmail ($email) {
        return preg_match(self::$emailREGEX, $email);
    }

    /**
     * @param $password
     * @return false|int
     */
    public static function isValidPassword ($password) {
        return preg_match(self::$passwordREGEX, $password);
    }

    /**
     * @param $username
     * @return false|int
     */
    public static function isValidUsername ($username) {
        return preg_match(self::$usernameREGEX, $username);
    }

    /**
     * @param $phone
     * @return false|int
     */
    public static function isValidPhoneNumber ($phone) {
        return preg_match(self::$phoneREGEX, $phone);
    }

    /**
     * remove any harmful codes from a string
     * @param $text
     * @return string
     */
    public static function removeHarmfulCodes ($text){
        $escaped = htmlspecialchars($text);
        return $escaped;
    }
}