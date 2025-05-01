<?php

// Database configuration
$host = '127.0.0.1';
$dbname = 'pg_dissertation';
$username = 'root';
$password = '';

try {
    // Create a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Clear existing users
    $pdo->exec("TRUNCATE TABLE users");
    
    // Insert admin user
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())");
    $stmt->execute(['Admin User', 'admin@test.com', password_hash('password123', PASSWORD_DEFAULT), 'admin']);
    
    // Insert student user
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role, registration_number, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())");
    $stmt->execute(['Test Student', 'student@test.com', password_hash('password123', PASSWORD_DEFAULT), 'student', 'STU001']);
    
    // Insert supervisor user
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())");
    $stmt->execute(['Test Supervisor', 'supervisor@test.com', password_hash('password123', PASSWORD_DEFAULT), 'supervisor']);
    
    // Insert evaluator user
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())");
    $stmt->execute(['Test Evaluator', 'evaluator@test.com', password_hash('password123', PASSWORD_DEFAULT), 'evaluator']);
    
    echo "Users inserted successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
} 