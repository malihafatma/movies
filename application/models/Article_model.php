<?php

class Article_model extends CI_model{

    public function articles(){


       $articles = $this->db->get('articles')->result_array();
        /*$articles[0]= "This is #1 a dummy article title";
        $articles[1]= "This is #2 a dummy article title";
        $articles[2]= "This is #3 a dummy article title";*/
        return $articles;   


    }  

    public function example(){

        //Array format
        //$users=$this->db->query('SELECT * FROM users')->result_array();
        $users= $this->db->select('id,name,email')
                        ->where('id',2)
                        ->get('users')
                        ->result_array();

       /* $this->db->select('id,name');
        $this->db->where('id',2);
        $users=$this->db->get('users')->result_array();*/
        return $users;
        
    }
}


?>