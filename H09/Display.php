<?php
class Display {
    private $conn;

    function __construct($conn)
    {
        $this->conn = mysqli_connect("localhost", "root", "", "broodjes");
        if ($conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $conn -> connect_error;
            exit();
        }
    }
}