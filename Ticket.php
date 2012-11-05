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
        $res = $this->db->prepare($sql);
        $res->execute(array($code, false));

        if($res->fetch()){
            echo('ticket found and not expired <br>');
        } else {
            echo ('ticket does not exist or has expired <br>');
        }
    }
    
    public function expireTicket($code)
    {
        $sql  = 'UPDATE tickets SET expired = ? WHERE code = ?';
        $res = $this->db->prepare($sql);
        $res->execute(array(true, $code));
        
        $this->checkTicket($code);
    }
    
 
    
}

?>
