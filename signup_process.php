<?php
session_start();
require_once 'config.php';

header('Content-Type: application/json');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $terms = isset($_POST['terms']) ? $_POST['terms'] : '';
    
    // Initialize response array
    $response = array();
    
    // Validate input
    if (empty($fullname) || strlen($fullname) < 2) {
        $response['success'] = false;
        $response['message'] = 'Please enter a valid name (at least 2 characters)';
        echo json_encode($response);
        exit();
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['success'] = false;
        $response['message'] = 'Please enter a valid email address';
        echo json_encode($response);
        exit();
    }
    
    if (empty($password) || strlen($password) < 8) {
        $response['success'] = false;
        $response['message'] = 'Password must be at least 8 characters long';
        echo json_encode($response);
        exit();
    }
    
    if ($password !== $confirmPassword) {
        $response['success'] = false;
        $response['message'] = 'Passwords do not match';
        echo json_encode($response);
        exit();
    }
    
    if ($terms !== 'on') {
        $response['success'] = false;
        $response['message'] = 'Please agree to the Terms of Service';
        echo json_encode($response);
        exit();
    }
    
    // Check if email already exists
    $check_email = $conn->prepare("SELECT id FROM login WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $result = $check_email->get_result();
    
    if ($result->num_rows > 0) {
        $response['success'] = false;
        $response['message'] = 'Email already registered. Please login or use a different email.';
        echo json_encode($response);
        exit();
    }
    
    // Insert into database (plain text password)
    $stmt = $conn->prepare("INSERT INTO login (fullname, email, password, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sss", $fullname, $email, $password);
    
    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = 'Account created successfully!';
        $response['redirect'] = 'login.php';
        
        // Set session
        $_SESSION['user_id'] = $stmt->insert_id;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $fullname;
    } else {
        $response['success'] = false;
        $response['message'] = 'Error creating account. Please try again.';
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
