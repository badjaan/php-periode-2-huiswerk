<?php
include('dbstart.php'); // Include the database connection file


class User
    {
        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function getAllUsers() {
            $query = "SELECT * FROM user_id";
            $result = $this->conn->query($query);

            if (!$result) {
                die("Query failed: " . $this->conn->error);
            }

            $users = array();

            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }

            return $users;
        }

        public function addUser($voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $telefoon) {
            $insertQuery = "INSERT INTO user_id (voornaam, tussenvoegsel, achternaam, adres, postcode, telefoon) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($insertQuery);
            $stmt->bind_param("ssssss", $voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $telefoon);
            $insertResult = $stmt->execute();
    
            if ($insertResult) {
                echo 'User successfully added.';
            } else {
                echo 'An error occurred while adding the user.';
            }
    
            $stmt->close();
        }

        public function deleteUser($conn) {
            if (isset($_POST['user_id'])) {
                $user_id = $_POST['user_id'];
            
                $query = "DELETE FROM user_id WHERE user_id = $user_id";
            
                if ($conn->query($query) === TRUE) {
                    echo "user succesfully deleted";
                } else {
                    echo "Error deleting user: " . $conn->error;
                }
            } else {
                echo "Invalid request.";
            }
        }

        public function updateUser($user_id, $voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $telefoon) {
            $sql = "UPDATE user_id SET voornaam = ?, tussenvoegsel = ?, achternaam = ?, adres = ?, postcode = ?, telefoon = ? WHERE user_id = ?";
            
            $statement = $this->conn->prepare($sql);
            
            $statement->bind_param("ssssssi", $voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $telefoon, $user_id);
            
            if ($statement->execute()) {
                echo 'Gebruiker succesvol bijgewerkt.';
            } else {
                echo 'Er is een fout opgetreden bij het bijwerken van de gebruiker: ' . $statement->error;
            }
            
            $statement->close();
        }
    }