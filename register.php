<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    include 'includes/header.php';
    ?>
    <main>
        <div class="container row">
            <div class="col-md-6">
                <h1 class="heading">Register</h1>
                <form id="signupForm" class="customForm" action="actionPages/addUser.php" method="POST"
                    onsubmit="return validateSignupForm()">
                    <span class="error-msg">
                        <?php $apiError ?>
                    </span>
                    <input type="text" placeholder="Name" name="name" id="name" />
                    <span id="nameErrorMsg" class="error-msg"></span>
                    <input type="email" placeholder="Email" name="email" id="email" />
                    <span id="emailErrorMsg" class="error-msg"></span>
                    <input type="number" placeholder="Phone" name="phone" id="phone" />
                    <span id="phoneErrorMsg" class="error-msg"></span>
                    <input type="password" placeholder="Password" name="pwd" id="pwd" />
                    <span id="pwdErrorMsg" class="error-msg"></span>
                    <input type="password" placeholder="Re-password" name="repwd" id="repwd" />
                    <span id="repwdErrorMsg" class="error-msg"></span>
                    <input id="submitBtn" type="submit" value="Sign up" name="signupBtn" />
                    <span class="mt-3">Already have an account? <a class="link" href="login.php">Login</a> here</span>
                </form>
            </div>
           
        </div>
    </main>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>