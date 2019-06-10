<?php

/**
 * File for housing the main application class
 * 
 * @author Jared Martinez
 * @version 6/9/2019
 */

/**
 * Class Finance
 */
class Finance {

    /**
     * Main function for the application
     * 
     * @access public
     * 
     * @param $request_type
     * 
     * @return void
     */
    public function __construct($request_type)
    {
        // Loading the application files
        require_once('Database.php'); // Database handling
        require_once('Output.php'); // Output handling

        session_start(); // Getting session information

        // Routing the request
        switch($request_type) {
            // Seeing if the user is logged in
            case 'user_logged_in':
                $this->is_user_logged_in();
                break;
            // Getting the income cards
            case 'get_income_cards':
                $this->get_income_cards();
                break;
            default:
                new Output(500, 'message', 'Invalid Request');
        }
    }

    /**
     * Function for handling requests to see if the user is logged in
     * 
     * @access private
     * 
     * @return void
     */

    private function is_user_logged_in() 
    {
        // Outputting if the user is logged in
        new Output(200, 'is_user_logged_in', $this->get_user_logged_in());
    }

    /**
     * Function to handle requests to get the users income cards
     * 
     * @access private
     * 
     * @return array
     */
    private function get_income_cards()
    {
        // Making sure the user is logged in
        if($this->get_user_logged_in()){
            // Structuring query
            $query = "";

            $results = new Database($query);

            if($results !== false){
                new Output(200, 'income_cards', $results);
            }
            new Output(500, 'income_cards', null);
        }
    }
    /**
     * Function to see if the user is logged in
     * 
     * @return bool
     */
    private function get_user_logged_in()
    {
        // Returning if the user is logged in or not
        return ( isset($_SESSION['user_id']) );
    }
}