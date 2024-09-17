<?php
class dbconnection {
    private $connection;
    private $db_type;
    private $db_host;
    private $db_port;
    private $db_user;
    private $db_pass;
    private $db_name;

    // Constructor to initialize the database connection parameters
    public function __construct($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name) {
        $this->db_type = $db_type;
        $this->db_host = $db_host;
        $this->db_port = $db_port;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;

        // Establish the connection
        $this->connection($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name);
    }

    // Function to create a connection based on the database type
    public function connection($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name) {
        switch ($db_type) {
            case 'PDO':
                // Check if the port is set and include it in the host string
                if ($db_port != null) {
                    $db_host .= ":" . $db_port;
                }
                
                try {
                    // Create a new PDO instance with provided database connection details
                    $this->connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

                    // Set PDO error mode to exception
                    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    echo "Connected successfully! :-)";
                } catch (PDOException $e) {
                    // Display connection error
                    echo "Connection failed: " . $e->getMessage();
                }
                break;

            case 'MySQLi':
                // Check if the port is set and include it in the host string
                if ($db_port != null) {
                    $db_host .= ":" . $db_port;
                }

                // Create the MySQLi connection
                $this->connection = new mysqli($db_host, $db_user, $db_pass, $db_name);

                // Check connection
                if ($this->connection->connect_error) {
                    echo "Connection failed: " . $this->connection->connect_error;
                } else {
                    echo "Connected successfully!";
                }
                break;

            // Add more cases for other database types if needed
        }
    }

    // Optional: Function to close the connection
    public function closeConnection() {
        if ($this->db_type === 'PDO') {
            $this->connection = null; // PDO automatically closes the connection
        } elseif ($this->db_type === 'MySQLi') {
            $this->connection->close(); // Close MySQLi connection
        }
    }
}
?>
