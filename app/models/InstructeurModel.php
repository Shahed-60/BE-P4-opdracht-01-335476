<?php

class InstructeurModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getInstructeurs()
    {
        $sql = "SELECT * FROM  Instructeur
        ORDER BY AantalSterren DESC";

        $this->db->query($sql);


        $result =  $this->db->resultSet();

        var_dump($result);
    }
}
