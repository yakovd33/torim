<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>התחברות</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/signup.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div>
      <?php include 'includes/nav.php'; ?>
    </div>

    <div class="container">
      <form class="form-signin">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">הרשמה</h1>
        <label for="Name" class="sr-only">First Name</label>
        <input type="text" id="inputName" class="form-control name" placeholder="שם פרטי" required autofocus>
        <label for="Name" class="sr-only">LastName</label>
        <input type="text" id="inputLastName" class="form-control name" placeholder="שם משפחה" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="אימייל" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="סיסמא" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="אמת סיסמא" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> זכור אותי
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">הרשם</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
      </form>
    </div>
  </body>
</html>
