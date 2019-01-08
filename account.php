<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="assets/css/account.css">

<div class="site-wrap">
    <div id="container">
        <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1">Login</li>
            <li class="tab-link" data-tab="tab-2">Register</li>
        </ul>

        <div id="tab-1" class="login tab-content current">

            <form>
                <div class="form-section">
                    <span class="fa fa-user-o input-icon"></span>
                    <input type="text" name="name" placeholder="אימייל">
                </div>
                <div class="form-section">
                    <span class="fa fa-unlock-alt input-icon"></span>
                    <input type="password" name="password" placeholder="סיסמא">
                </div>
                <div class="form-section btn-container">
                    <input type="submit" value="Login">
                </div>
            </form>

        </div>
            
        <div id="tab-2" class="register tab-content">
                <form>
                    <div class="form-section">
                        <span class="fa fa-user-o input-icon"></span>
                        <input type="text" name="name" placeholder="Username">
                    </div>
                    <div class="form-section">
                        <span class="fa fa-envelope-o input-icon"></span>
                        <input type="email" name="name" placeholder="Email" class="email">
                    </div>
                    <div class="form-section">
                        <span class="fa fa-unlock-alt input-icon"></span>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-section btn-container">
                        <input type="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<?php include 'includes/footer.php'; ?>