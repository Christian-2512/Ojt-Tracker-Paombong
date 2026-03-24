<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Security Setup</title>
    <style>
        body { background-color: #f4f7f6; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; font-family: 'Segoe UI', sans-serif; }
        .setup-card { background: white; width: 100%; max-width: 400px; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); }
        .setup-card h2 { margin: 0 0 10px; color: #2c3e50; }
        .setup-card p { color: #7f8c8d; font-size: 14px; margin-bottom: 25px; line-height: 1.5; }
        .input-group { margin-bottom: 20px; }
        .input-group label { display: block; margin-bottom: 8px; font-weight: 700; color: #34495e; font-size: 13px; }
        .form-control { width: 100%; padding: 12px 15px; border: 2px solid #f1f2f6; border-radius: 10px; box-sizing: border-box; }
        .btn-save { width: 100%; padding: 14px; background: #27ae60; color: white; border: none; border-radius: 10px; font-weight: 700; cursor: pointer; }
    </style>
</head>
<body>
    <div class="setup-card">
        <h2>Update Your Security</h2>
        <p>We've added a new self-service password reset feature! Please select a security question so you can recover your account in the future if you forget your password.</p>
        
        <form action="actions/save_security.php" method="POST">
         <div class="input-group">
                <label>Security Question</label>
                <select name="security_question" class="form-control" required>
                    <option value="" disabled selected>Select a question...</option>
                    
                    <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                    <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                    <option value="In what city were you born?">In what city were you born?</option>
                    
                    <option value="What was the name of your elementary school?">What was the name of your elementary school?</option>
                    <option value="What is your favorite movie or book?">What is your favorite movie or book?</option>
                    <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                    <option value="In what city did your parents meet?">In what city did your parents meet?</option>
                    <option value="What is the name of your favorite teacher?">What is the name of your favorite teacher?</option>
                    <option value="What was the name of the street you grew up on?">What was the name of the street you grew up on?</option>
                    <option value="What was your dream job as a child?">What was your dream job as a child?</option>
                </select>
            </div>

            <div class="input-group">
                <label>Your Answer</label>
                <input type="text" name="security_answer" class="form-control" required placeholder="Type your answer...">
            </div>

            <button type="submit" class="btn-save">Save & Continue to Dashboard</button>
        </form>
    </div>
</body>
</html>