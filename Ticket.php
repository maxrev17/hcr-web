<?php

class Ticket {
    
    private $db;
    
    public function __construct() 
    {
        $this->db = new PDO('mysql:host=localhost;dbname=hcr;charset=utf8', 'web', 'robot');
    }
    
    public function checkTicket($code)
    {
        $sql = "SELECT * FROM tickets WHERE code = ? AND expired = ?";
        $q = $this->db->prepare($sql);
        $q->execute(array($code, false));

        if($q->fetch()){
            echo('ticket found and not expired <br>');
        } else {
            echo ('ticket does not exist or has expired <br>');
        }
    }
    
    public function expireTicket($code)
    {
        $sql  = 'UPDATE tickets SET expired = ? WHERE code = ?';
        $q = $this->db->prepare($sql);
        $q->execute(array(true, $code));
        
        $this->checkTicket($code);
    }
    
 
    
}

?>
