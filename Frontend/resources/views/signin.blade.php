
<!DOCTYPE html>
<html>
<head>
    <title>Sign In Form</title>
    <style>
        /* CSS for the form */
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign In</h2>
        <form id="signInForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <div id="emailError" class="error-message"></div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <div id="passwordError" class="error-message"></div>
            </div>
            <button type="submit">Sign In</button>
        </form>
    </div>

    <script>
        // JavaScript for form validation
        document.getElementById('signInForm').addEventListener('submit', function(event) {
            var emailInput = document.getElementById('email');
            var passwordInput = document.getElementById('password');
            var emailError = document.getElementById('emailError');
            var passwordError = document.getElementById('passwordError');

            // Reset error messages
            emailError.textContent = '';
            passwordError.textContent = '';

            // Check email
            if (emailInput.value.trim() === '') {
                event.preventDefault();
                emailError.textContent = 'Email is required';
            }

            // Check password
            if (passwordInput.value.trim() === '') {
                event.preventDefault();
                passwordError.textContent = 'Password is required';
            }
        });
    </script>
</body>
</html>