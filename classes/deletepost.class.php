<?php
require("Dbh.class.php");

Class Deletepost extends Dbh{
    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function deletePost(){
        $sql = "DELETE FROM posts WHERE id = ?"; 
        $stmt = $this->connect()->prepare($sql);

        try{
            $stmt->execute([$this->id]);
            echo '<div class="box"> 
            <div class="success alert">
                <div class="alert-body">
                    Sucessfully Deleted!
                    <br>
                    <a href="../index.php">Home page</a>
                </div>
            </div>
        </div>';
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
        }
    }
}