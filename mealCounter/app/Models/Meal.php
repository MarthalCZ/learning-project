<?php

namespace App\Models;

class Meal extends BaseModel {
    public function all(int|null $user_id) {
        // Prepare the SQL query to select meals for a specific user_id
        $sql = "SELECT * FROM meals WHERE user_id = '$user_id'";

        // Execute the query with the provided user_id as a parameter
        return $this->database->executeQuery($sql, [$user_id]);
    }
}