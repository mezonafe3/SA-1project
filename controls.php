<?php
include "dbcontrol.php";
class control{
    protected $db;
    public function show_category(){

    $this->db=new DBController;

    if( $this->db->openconnection())
    {
        $qry="select * from category ";

        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }

}

?>