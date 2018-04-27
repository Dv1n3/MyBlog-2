<?php

class DataBase
{
    private $pdo;
    protected $db_lol;
    protected $db_name;
    protected $db_host;
    protected $db_user;
    protected $db_pass;

    /**
     * DataBase constructor.
     * @param $db_sgbdr
     * @param $db_name
     * @param $db_host
     * @param $db_user
     * @param $db_pass
     */
    public function __construct($db_lol = "mysql", $db_name, $db_host = "localhost", $db_user = "root", $db_pass = "")
    {
        $this->db_sgbdr =    $db_lol;
        $this->db_name  =    $db_name;
        $this->db_host  =    $db_host;
        $this->db_user  =    $db_user;
        $this->db_pass  =    $db_pass;
    }

    public function getPDO(DataBase $db)
    {
        if ($this->pdo === null) {
            $pdo = new PDO($this->db_lol . ":host=" . $this->db_host . ";dbname=" . $this->db_name . "," . $this->db_user . "," . $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

}

?>
