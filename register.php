<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    include 'includes/header.php';
    ?>
    <main>
        <div class="container form-container text-center">
            <div class="col-md-8 m-auto">
                <h3>Register</h3>
                <form id="signupForm" class="form-group" action="action/addUser.php" method="POST"
                    onsubmit="return validateSignupForm()">
                    <span class="error-msg">
                        <?php
                        if (isset($_SESSION['apiError'])) {
                            echo $_SESSION['apiError'];
                            unset($_SESSION['apiError']); 
                        } ?>
                    </span>
                    <input type="text" placeholder="First Name" name="fname" id="fname" class="form-control mb-2" />
                    <span id="fnameErrorMsg" class="error-msg mb-2"></span>
                    <input type="text" placeholder="Last Name" name="lname" id="lname" class="form-control mb-2" />
                    <span id="lnameErrorMsg" class="error-msg mb-2"></span>
                    <input type="email" placeholder="Email" name="email" id="email" class="form-control mb-2" />
                    <span id="emailErrorMsg" class="error-msg mb-2"></span>
                    <input type="number" placeholder="Phone" name="phone" id="phone" class="form-control mb-2" />
                    <span id="phoneErrorMsg" class="error-msg mb-2"></span>
                    <input type="password" placeholder="Password" name="pwd" id="pwd" class="form-control mb-2" />
                    <span id="pwdErrorMsg" class="error-msg mb-2"></span>
                    <input type="password" placeholder="Re-password" name="repwd" id="repwd"
                        class="form-control mb-2" />
                    <span id="repwdErrorMsg" class="error-msg mb-2"></span>
                    <input id="submitBtn" type="submit" value="Sign up" name="signupBtn" class="form-control mb-2" />
                    <span class="mt-4">Already have an account? <a class="link" href="login.php">Login</a> here</span>
                </form>
            </div>

        </div>
    </main>
</body>

</html>