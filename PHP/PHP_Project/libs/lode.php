<?
  function load_tempelate($name){

    // include __DIR__."/../_templets/$name.php";

    include $_SERVER['DOCUMENT_ROOT']."/PHP_Project/_templets/$name.php";

  }

  function check_user($user_email,$user_passward){
    if($user_email == 'pklegend32@gmail.com' && $user_passward== 'PKlegend32'){
      return true;
    }
    return false;
  }
?>