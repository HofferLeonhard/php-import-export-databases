<?php
  
  class importBD{
    public $host = "";
    public $user = "";
    public $pass = "";
    public $name = "";
    public $backup_file = "";
    
    // Constructor
    public function __construct($host,$user,$pass,$name){
      $this->host = $host;
      $this->user = $user;
      $this->pass = $pass;
      $this->name = $name;
      // $this->backup_file = $backup_file;
    }
    
    /* backup the db OR just a table */
    public function start($backup_file){
      $host = $this->host;
      $user = $this->user;
      $pass = $this->pass;
      $name = $this->name;
      // $backup_file = $this->backup_file;
      
      $link = mysqli_connect($host,$user,$pass,$name);

      $handle = fopen($backup_file, "r+");
      $contents = fread($handle, filesize($backup_file));

      $sql = explode(";", $contents);

        foreach ($sql as $query) {
            # code...
            
            $result = mysqli_query($link,$query);
        }

        
       fclose($handle);

       return "########## Importation terminée ##########";
    }
    
  }
    

?>