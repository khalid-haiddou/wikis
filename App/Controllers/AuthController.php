<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class AuthController {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $conn = $this->db->getConnection();

            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$username, $email, $password]);

            header("Location: ../../public/login");
            exit();
        }

        // Load the register view
        include '../views/register.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $conn = $this->db->getConnection();

            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Set session variables for user authentication (you may want to implement this)
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['Role'];

                // Redirect based on the user's role
                if ($user['Role'] == 'admin') {
                    header("Location: ../../Views/dashboard.php");
                    exit();
                } elseif ($user['Role'] == 'author') {
                    header("Location: ../Views/author.php");
                    exit();
                } else {
                    // Handle other roles or provide a default redirection
                    header("Location: default.php");
                    exit();
                }
            } else {
                echo "Invalid email or password";
            }
        }

        // Load the login view
        include '../views/login.php';
    }

    public function logout() {
        // Unset or destroy session variablesrez
        $_SESSION = [];
        session_destroy();

        // Redirect to the login page after logout
        header("Location: index.php?action=login");
        exit();
    }
}

?>
