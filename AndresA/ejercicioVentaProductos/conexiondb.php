<?php
    function save_data( $table, $columns, $values ) {
        $servername = "db";
        $dbname = "db";
        $username = "db";
        $password = "db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo $values;
        // Prepare SQL query
        $sql = "INSERT INTO $table $columns VALUES $values";

        // Execute query
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();

    }

    function delete_data($table, $id) {
        $servername = "db";
        $dbname = "db";
        $username = "db";
        $password = "db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL query
        $sql = "DELETE FROM $table WHERE id = $id";

        // Execute query
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();

    }

    function update_data($table, $id, $values) {
        $servername = "db";
        $dbname = "db";
        $username = "db";
        $password = "db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL query
        $sql = "UPDATE $table SET $values WHERE id = $id";

        // Execute query
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
        
    }

    function get_data($query) {
        $servername = "db";
        $dbname = "db";
        $username = "db";
        $password = "db";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Execute query
        $result = $conn->query($query);
        
        // Check if there are results
        if ($result->num_rows > 0) {
            // Return the data
            $data = [];
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return [];
        }
        
        // Close connection
        $conn->close();
    }

?>