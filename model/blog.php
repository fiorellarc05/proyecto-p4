<?php

/**
 * Description of comment of the blog
 *
 * @author Fiorella Rodriguez
 */
    include 'connection.php';

    class blog {
        private $id;
        public $author;
        public $title;
        public $message;

    /**
   * Constructor method
   * @param type $pauthor
   * @param type $ptitle
   * @param type $pmessage
   * @param integer $pid
   */    
        
    public function __construct($pauthor= " ",$ptitle= " ", $pmessage= " ", $pid = 0){

        $this->id = $pid;
        $this->author = $pauthor;
        $this->title = $ptitle;
        $this->message = $pmessage;
    }

    /**
    * Create method: create rows with the entered values in the table of the datebase
    * @return bool false
    */
    
    public function create() {
        try{
        $sql = "INSERT INTO blogs (id, author, title, message) VALUES"
                . " (NULL, '$this->author','$this->title','$this->message')";
        
      $con= new connection();
      $pdo = $con->connect();
      $estado = $pdo->prepare($sql);
      
      $estado->execute();
      
    } catch (PDOException $ex) {
      print_r("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$ex->getMessage());
      error_log("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$ex->getMessage());
    }
    return false;
    }
    
    /**
    * Read method: read the all the rows of the database
    * @return the rows
    */
    
    public function read($id = 0){
        $rows = []; 
        try{
        $sql = "select * from blogs";
        $con = new connection();
        $pdo = $con->connect();
        if($id){
            $sql .=" where id='$id'";
        }
        $result = $pdo->query($sql);
        
        foreach ($result->fetchAll() as $value){
        $rows [] = new blog($value['author'],$value['title'],$value['message'],$value['id']);
        }
        
        }catch(PDOException $ex){
            die($ex->getMessage());
        }
        return $rows;
    }
    
    /**
    * ultimos method: read the las 5 rows of the database
    * @return the rows
    */
    public function ultimos(){
        $rows = []; 
        try{
        $sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 5";
        $con = new connection();
        $pdo = $con->connect();
        $result = $pdo->query($sql);
        
        foreach ($result->fetchAll() as $value){
        $rows [] = new blog($value['author'],$value['title'],$value['message'],$value['id']);
        }
        
        }catch(PDOException $ex){
            die($ex->getMessage());
        }
        return $rows;
    }
    
    /**
    * Gte Attribute method: gets the author from the database
    * @return NULL
    */
    
    public function get_attribute($author){
        try{
          return $this->$author;
        } catch (Exception $ex) {
          return NULL;
        }
    }
    
}
