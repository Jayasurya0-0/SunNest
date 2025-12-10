# SunNest Sign-Up Database Integration

## Setup Instructions

### 1. Start XAMPP
- Open XAMPP Control Panel
- Start **Apache** server
- Start **MySQL** server

### 2. Create Database
You have two options:

**Option A: Using phpMyAdmin**
1. Open browser and go to: `http://localhost/phpmyadmin`
2. Click on "SQL" tab
3. Copy and paste the content from `create_database.sql`
4. Click "Go" to execute

**Option B: Manual Creation**
1. Open phpMyAdmin: `http://localhost/phpmyadmin`
2. Click "New" to create a database
3. Name it: `Jeyanthan_db`
4. Click "Create"
5. Select the database
6. Click "SQL" tab and run this query:

```sql
CREATE TABLE IF NOT EXISTS login (
    id INT(11) NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

### 3. Configure Database Connection
The database configuration is in `config.php`:
- **Host**: localhost
- **Username**: root
- **Password**: (empty by default)
- **Database**: Jeyanthan_db

If your XAMPP MySQL has a different username or password, update `config.php`.

### 4. File Structure
```
Jeyanthan/
├── config.php              # Database connection
├── signup_process.php      # Sign-up form handler
├── signin.php              # Sign-up page (use this instead of signin.html)
├── signin.html             # Original HTML (keep for reference)
├── create_database.sql     # Database creation script
└── README_SETUP.md         # This file
```

### 5. Usage
1. Access the sign-up page: `http://localhost/Jeyanthan/signin.php`
2. Fill out the form:
   - Full Name (minimum 2 characters)
   - Valid Email
   - Password (minimum 8 characters)
   - Confirm Password
   - Agree to Terms
3. Click "Create Account"
4. On success, you'll be redirected to Login.html

### 6. Features
✅ Form validation (client-side and server-side)
✅ Email uniqueness check
✅ Password hashing (bcrypt)
✅ AJAX form submission (no page reload)
✅ Success/Error messages
✅ Secure SQL queries (prepared statements)
✅ Session management

### 7. Database Fields
- **id**: Auto-increment primary key
- **fullname**: User's full name
- **email**: Unique email address
- **password**: Hashed password
- **created_at**: Account creation timestamp
- **updated_at**: Last update timestamp

### 8. Security Features
- Password hashing using PHP's password_hash()
- SQL injection prevention using prepared statements
- XSS protection with input sanitization
- Email validation
- Terms agreement required

### 9. Testing
To test if everything works:
1. Go to: `http://localhost/Jeyanthan/signin.php`
2. Fill the form with test data
3. Submit the form
4. Check phpMyAdmin to see if the record was inserted
5. Try signing up with the same email (should show error)

### 10. Troubleshooting

**Issue: Page shows PHP code instead of running**
- Solution: Make sure Apache is running in XAMPP

**Issue: Connection error**
- Solution: Check if MySQL is running in XAMPP
- Verify database name is `Jeyanthan_db`
- Check config.php credentials

**Issue: Form not submitting**
- Solution: Check browser console for errors
- Make sure you're using `signin.php` not `signin.html`

**Issue: Blank page after submission**
- Solution: Check PHP error logs in XAMPP control panel
- Enable error display in config.php temporarily

### 11. Login System
The login system is now fully integrated:

**Login Page**: `http://localhost/Jeyanthan/login.php`

**Features**:
- Email and password authentication
- Secure password verification using bcrypt
- Session management for logged-in users
- "Remember Me" functionality (30-day cookie)
- Success message popup on correct credentials
- Automatic redirect to index.html after successful login
- Error messages for invalid credentials
- Logout functionality

**Usage**:
1. Go to: `http://localhost/Jeyanthan/login.php`
2. Enter your registered email and password
3. Click "Sign In"
4. On success, you'll see a welcome message
5. You'll be redirected to the home page (index.html)

**Testing the Login**:
1. First, create an account via `signin.php`
2. Then login using the same credentials at `login.php`
3. Check if you're redirected to index.html

**Logout**:
- To logout, navigate to: `http://localhost/Jeyanthan/logout.php`
- This will destroy the session and redirect to login page

### 12. Next Steps
You may want to:
- Add email verification
- Implement password reset functionality
- Add user profile management
- Create a dashboard for logged-in users
- Protect certain pages (require login to access)
- Add password strength meter
- Implement rate limiting for login attempts

---

## Important Notes
- Always use `signin.php` (not signin.html) for the sign-up page
- Always use `login.php` (not Login.html) for the login page
- Passwords are securely hashed and cannot be retrieved in plain text
- The database stores UTC timestamps by default
- Session is started after successful registration and login
- Remember Me cookie expires in 30 days
