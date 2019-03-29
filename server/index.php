<?php
/**
 * Main file for routing calls to the server
 * 
 * @author Jared Martinez
 * @version 4/25/2019
 */

 // Make sure we are recieving a post request with a request type
if($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['request_type'])) {
    die(json_encode(
            array(
                'status' => 500,
                'message' => 'Invalid Request'
            )
        )
    );
}

class Finance {
    public static function instance()
    {
        session_start(); // Getting session information

        switch($_POST['request_type']){
            case 'user_logged_in':
                self::output(200, 'user_logged_in', self::is_user_logged_in()); 
                break;
            case 'income_cards':
                self::get_income_cards();
                break;
            case 'expense_cards':
                self::get_finance_cards();
                break;
        }
    }

    /**
     * Function to see if the user is logged in
     * 
     * @return bool
     */
    private static function is_user_logged_in()
    {
        return isset($_SESSION['user_id']);
    }

    /**
     * Function to output information the the requester
     */
    private static function output($status, $key, $value)
    {   
        exit(
            json_encode(
                array(
                    'status' => $status,
                    $key => $value
                )
            )
        );
    }
}

// And away we go
Finance::instance();