<?php
require_once("Dbh.class.php");
Class insertPost extends Dbh{
    private $title;
    private $msg;

    public function __construct($title, $msg){
        $this->title = $title;
        $this->msg = $msg;
    }
    public function insertPost(){
        $sql = "INSERT INTO posts (title, msg) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);

        try{
            if($stmt->execute([$this->title, $this->msg]) == true){
                echo '<div class="box"> 
                <div class="success alert">
                    <div class="alert-body">
                        Sucessfully Submitted!
                        <br>
                        <a href="../index.php">Go back?</a>
                    </div>
                </div>
            </div>';
            }
        }
        catch(PDOException $e){
            echo '<div class="error alert">
            <div class="alert-body">
              Sorry, an error occured
              <br>
              '. $e->getMessage() . '
            </div>
        </div>
      </div>';
      echo $e->getMessage();
        }
    }
}