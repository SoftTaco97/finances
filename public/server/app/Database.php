<?php

/**
 * File for handling all connections to the database
 * 
 * @author Jared Martinez
 * @version 6/9/2019
 */

 /**
  * Class Database
  */
  class Database {
      /* Variables */
      private $db;

      /**
       * Constructor function for the class
       * 
       * @access public
       * 
       * @param $query
       * 
       * @return boolean
       */
      public function __construct ($query) 
      {
        // Loading in the database information
        require_once('config.php');

        // Connecting to database
        $this->db = new mysqli(
            SERVER,
            DB_USER,
            DB_PASSWORD,
            DATABASE
        );

        if($this->db->connect_errno){
            return false;
        }

        return ( $this->query($query) );
      }

      /**
       * Function for escaping values
       * 
       * @access public
       * 
       * @param $value
       * 
       * @return mix
       */
      public function sanitize($value)
      {
          // Escaping SQL
          return ( $this->db->real_escape_string($value) );
      }

      /**
       * Function for sending queries to the database
       * 
       * @access private
       * 
       * @param $query
       * 
       * @return boolean
       */
      private function query($query) 
      {
        // Executing query
        return ( $this->db->query($query) );
      }
  }