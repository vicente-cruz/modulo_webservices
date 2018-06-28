<?php
Class Model
{
    protected $db;
    
    public function __construct()
    {
        global $config;
        $this->db = new PDO
                ($config['dbtype'].":dbname=".$config['dbname'].";host=".$config['dbhost']
                ,$config['dbuser']
                ,$config['dbpass']);
    }
}
?>