<?php

/**
 * File for the output class
 * 
 * @author Jared Martinez
 * @version 6/9/2019
 */

/**
 * Class Output
 */
class Output {
    /**
     * Function to output information the requester
     * 
     * @access public
     * 
     * @param $status
     * @param $key
     * @param $value
     * 
     * @return void
     */
    public function __construct($status, $key, $value)
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