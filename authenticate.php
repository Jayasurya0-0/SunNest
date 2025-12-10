<?php
session_start();
require_once 'config.php';

header('Content-Type: application/json');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $remember = isset($_POST['remember-me']) ? true : false;
    
    // Initialize response array
    $response = array();
    
    // Validate input
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['success'] = false;
        $response['message'] = 'Please enter a valid email address';
        echo json_encode($response);
        exit();
    }
    
    if (empty($password)) {
        $response['success'] = false;
        $response['message'] = 'Please enter your password';
        echo json_encode($response);
        exit();
    }
    
    // Check if user exists
    $stmt = $conn->prepare("SELECT id, fullname, email, password FROM login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        $response['success'] = false;
        $response['message'] = 'Invalid email or password';
        echo json_encode($response);
        exit();
    }
    
    // Get user data
    $user = $result->fetch_assoc();
    
    // Compare password directly (plain text)
    if ($password == $user['password']) {
        // Password is correct
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_name'] = $user['fullname'];
        $_SESSION['logged_in'] = true;
        
        // Set remember me cookie if checked
        if ($remember) {
            // Cookie expires in 30 days
            setcookie('remember_user', $user['id'], time() + (30 * 24 * 60 * 60), '/');
        }
        
        $response['success'] = true;
        $response['message'] = 'Login successful! Welcome back, ' . $user['fullname'] . '!';
        $response['redirect'] = 'index.html';
        $response['user'] = array(
            'name' => $user['fullname'],
            'email' => $user['email']
        );
    } else {
        // Password is incorrect
        $response['success'] = false;
        $response['message'] = 'Invalid email or password';
    }
    
    $stmt->close();
    $conn->close();
    
    echo json_encode($response);
} else {
    $response['success'] = false;
    $response['message'] = 'Invalid request method';
    echo json_encode($response);
}
?>
