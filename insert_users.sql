-- Clear existing users
TRUNCATE TABLE users;

-- Insert admin user
INSERT INTO users (name, email, password, role, created_at, updated_at) 
VALUES ('Admin User', 'admin@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NOW(), NOW());

-- Insert student user
INSERT INTO users (name, email, password, role, registration_number, created_at, updated_at) 
VALUES ('Test Student', 'student@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', 'STU001', NOW(), NOW());

-- Insert supervisor user
INSERT INTO users (name, email, password, role, created_at, updated_at) 
VALUES ('Test Supervisor', 'supervisor@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'supervisor', NOW(), NOW());

-- Insert evaluator user
INSERT INTO users (name, email, password, role, created_at, updated_at) 
VALUES ('Test Evaluator', 'evaluator@test.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'evaluator', NOW(), NOW()); 