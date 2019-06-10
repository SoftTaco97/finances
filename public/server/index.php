<?php
/**
 * Main file for routing calls to the server
 * 
 * @author Jared Martinez
 * @version 6/9/2019
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

// Loading main application file
require_once (  dirname( __FILE__ ) . '/app/Finance.php' );

// Away we go
new Finance ($_POST['request_type']);