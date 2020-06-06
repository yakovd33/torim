<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="assets/css/account.css">

<div class="site-wrap">
    <div id="container">
        <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1">התחברות</li>
            <li class="tab-link" data-tab="tab-2">הרשמה</li>
        </ul>

        <div id="tab-1" class="login tab-content current">

            <form>
                <div class="form-section">
                    <span class="fas fa-envelope input-icon"></span>
                    <input type="email" name="email" placeholder="אימייל">
                </div>

                <div class="form-section">
                    <span class="fa fa-unlock-alt input-icon"></span>
                    <input type="password" name="password" placeholder="סיסמא">
                </div>

                <div class="form-section btn-container">
                    <input type="submit" value="התחברות">
                </div>
            </form>

        </div>
            
        <div id="tab-2" class="register tab-content">
                <form>
                    <div class="form-section">
                        <span class="fas fa-user input-icon"></span>
                        <input type="text" name="name" placeholder="שם" class="שם">
                    </div>

                    <div class="form-section">
                        <span class="fas fa-user input-icon"></span>
                        <input type="text" name="name" placeholder="שם משפחה" class="שם משפחה">
                    </div>

                    <div class="form-section">
                        <span class="fas fa-envelope input-icon"></span>
                        <input type="email" name="name" placeholder="אימייל" class="אימייל">
                    </div>

                    <div class="form-section">
                        <span class="fa fa-unlock-alt input-icon"></span>
                        <input type="password" name="password" placeholder="סיסמא">
                    </div>

                    <div class="form-section">
                        <span class="fa fa-unlock-alt input-icon"></span>
                        <input type="password" name="re-password" placeholder="אימות סיסמא">
                    </div>

                    <div class="form-section btn-container">
                        <input type="submit" value="הרשמה">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script>
        /* Creator of this Jquery https://codepen.io/cssjockey/pen/jGzuK */
            $(document).ready(function(){
                $('ul.tabs li').click(function(){
                    var tab_id = $(this).attr('data-tab');

                    $('ul.tabs li').removeClass('current');
                    $('.tab-content').removeClass('current');

                    $(this).addClass('current');
                    $("#"+tab_id).addClass('current');
                })
            })
    </script>

<?php include 'includes/footer.php'; ?>