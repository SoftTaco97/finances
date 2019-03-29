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

        require_once('config.php'); // Requiring database configuration file

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
     * Function to get the income cards of a user
     * 
     * @return array
     */
    private static function get_income_cards()
    {
        // Making sure the user is logged in
        if(!self::is_user_logged_in) self::output(500, 'message', 'User not logged in.');

        $user_id = $_SESSION['user_id']; // user id

        // Database connections
        $db = new mysqli(
            SERVER,
            DB_USER,
            DB_PASSWORD,
            DATABASE
        );

        if ($db->connect_errno) self::output(500, 'message', 'Can\'t connect to the database'); // Database error

        // Query
        $query = "SELECT    income_cards 
                  FROM      users 
                  WHERE     user_id = $user_id
        ";

        if(!$cards = $db->query($query)) self::output(500, 'message', 'Can\'t retrieve cards from the database'); // Error retrieving cards

        self::output(200, 'income_cards', $cards); // Outputting cards
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