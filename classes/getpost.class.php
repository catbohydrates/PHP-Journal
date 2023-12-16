<?php

class GetPost extends Dbh {
    public function getPosts() {
        $sql = "SELECT * FROM posts";
        $stmt = $this->connect()->prepare($sql);

        // Try and execute the SQL command
        try {
            $stmt->execute();

            // Fetch all rows as an associative array
            $rows = $stmt->fetchAll();

            if(empty($rows)){
                echo "<blockquote><i><mark>No rows found! Please submit a post</mark></i></blockquote>";
            }

            // Iterate through each row and echo the title
            foreach ($rows as $row) {
                echo "<details><summary>" . "#" . $row["id"] . " " . $row["title"] . " - " . $row["submit_date"] ."</summary>" . $row["msg"] . "</details>";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
