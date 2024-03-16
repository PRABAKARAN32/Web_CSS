
<?


$user_name = $_POST['email_input'];
$user_password = $_POST['password_input'];

// echo $user_name ;
// echo $user_password;

$result = check_user($user_name,$user_password);

if($result){

?>

<main>

  <a href="https://www.google.com/" role="button">View</a>
</main>

<?

}


else{


?>



<main class="form-signin w-100 m-auto">
<form method="post" action="login.php">
    <img class="mb-4" src="https://cdn-icons-png.flaticon.com/128/5087/5087579.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="email_input" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password_input" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</main>

<?
}
?>