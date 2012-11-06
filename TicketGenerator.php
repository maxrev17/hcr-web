<?php

class TicketGenerator {
    
    private $db;
    
    public function __construct() 
    {
        $this->db = new PDO('mysql:host=localhost;dbname=hcr;charset=utf8', 'web', 'robot');
    }
    
    public function generateTickets($quantity)
    {
        for($i = 0; $i <= $quantity; $i++){            
            //insert shizzle
        }
    }
}

?>
