<?php
require("Dbh.class.php");

class Editpost extends Dbh {
    private $ID;
    private $title;
    private $msg;

    public function __construct($ID, $title, $msg) {
        $this->ID = $ID;
        $this->title = $title;
        $this->msg = $msg;
    }

    public function editPost() {
        // Check if some fields are empty or not
        if (isset($this->title) && !isset($this->msg)) {
            // Update title only
            $sql = "UPDATE posts SET title = ? WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);

            try {
                $stmt->execute([$this->title, $this->ID]);

                echo '<div class="box"> 
                <div class="success alert">
                    <div class="alert-body">
                        Sucessfully Submitted!
                        <br>
                        <a href="../index.php">Go back?</a>
                    </div>
                </div>
            </div>';
            die();
            } catch (PDOException $e) {
                echo $e->getMessage();
                echo '<div class="error alert">
                <div class="alert-body">
                  Sorry, an error occured
                  <br>
                  '. $e->getMessage() . '
                </div>
            </div>
          </div>';
          die();
            }


        } elseif (isset($this->msg) && !isset($this->title)) {
            // Update message only

            $sql = "UPDATE posts SET msg = ? WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);

            try {
                $stmt->execute([$this->msg, $this->ID]);
                echo '<div class="box"> 
                <div class="success alert">
                    <div class="alert-body">
                        Sucessfully Submitted!
                        <br>
                        <a href="../index.php">Go back?</a>
                    </div>
                </div>
            </div>';
            die();
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                echo '<div class="error alert">
                <div class="alert-body">
                  Sorry, an error occured
                  <br>
                  '. $e->getMessage() . '
                </div>
            </div>
          </div>';
          die();
            }

        } elseif (isset($this->title) && isset($this->msg)) {

            // Update both title and message
            $sql = "UPDATE posts SET title = ?, msg = ? WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);

            try {
                $stmt->execute([$this->title, $this->msg, $this->ID]);
                echo '<div class="box"> 
                <div class="success alert">
                    <div class="alert-body">
                        Sucessfully Submitted!
                        <br>
                        <a href="../index.php">Go back?</a>
                    </div>
                </div>
            </div>';
            die();
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                echo '<div class="error alert">
                <div class="alert-body">
                  Sorry, an error occured
                  <br>
                  '. $e->getMessage() . '
                </div>
            </div>
          </div>';
          die();
            }
        } else {
            echo "NONE ARE SET!";
            die();
        }
    }
}
?>
