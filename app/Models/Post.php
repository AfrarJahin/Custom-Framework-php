<?php

namespace Afra\App\Models;

use Afra\App\Models\BaseModel;

class Post extends BaseModel{

    public function findAll(){

        $query = "SELECT * FROM posts";
        $result = $this->connection->query($query);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                // Output each row's data
                echo "Post ID: " . $row['id'] . "<br>";
                echo "Title: " . $row['title'] . "<br>";
                echo "Content: " . $row['description'] . "<br>";
                // ... and so on for other columns

                echo "<br>"; // Adding a line break between posts
            }
        } else {
            echo "No posts found";
        }


        return "[]";

    }
}
