<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FontAwesome6 -->
    <script src="https://kit.fontawesome.com/dade034416.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
</head>
    
    <body><?php 

// your code here...

// <div class="container"></div>

// echo '<div class="container">Hello World</div>';

$login_title = 'Member Login';

function getLoginTitle($title) {
    echo '<h1 class="label" style="color:red; opacity: 0.36;">'.$title.'</h1>';
};

function getLoginForm($uname, $upass, $login) {
//Heredoc
$result = <<<LEAN
    <form action="#" class="login-form" method="post" name="form" onsubmit="return validate()">
      <div class="mt-3">$uname *</div>
      <input type="email" name="email" autocomplete="off" required>
      <div id="email_error" class="visually-hidden">Please fill up your Email or Phone</div>

      <div class="mt-3">$upass *</div>
      <input type="password" name="password" required>
      <div id="password_error" class="visually-hidden">Please fill up your Password</div>

      <div class="mt-3">
        <button type="submit" name="submit" class="btn btn-primary">$login</button>
      </div>
    </form> 
LEAN;
echo $result;
}

// insert var in long string
// $var = 'var';
// echo 'string1'.$var.'string2';

echo '<div class="container text-center">';
getLoginTitle($login_title);
getLoginForm('Email:', 'Password:', 'Login Now!');
echo '</div>';

?>


<!-- Bootstrap 5 -->
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
</body></html>