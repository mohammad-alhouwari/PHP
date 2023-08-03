<?php

// --------------------------------Session Example-----------------------------

// session_start(); //start the PHP_session function 
// if(isset($_SESSION['page_count']))
// {
//      $_SESSION['page_count'] += 1;
// }
// else
// {
//      $_SESSION['page_count'] = 1;
// }
//  echo 'You are visitor number ' . $_SESSION['page_count'];



//  session_destroy(); //destroy entire session 
// unset($_SESSION['page_count']); //destroy product session item







// ---------------------------------Cookie Example----------------------------------




// setcookie(cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure], [httponly]);
//  print_r($_COOKIE);    //output the contents of the cookie array variable 

// setcookie("username", "mohammad", time() + 5,'/'); //  expires after 5 seconds
// echo "Welcome, " . $_COOKIE['username'] . '  the cookie has been set for 5 seconds<br/><br/>';

// print_r($_COOKIE);    //output the contents of the cookie array variable

// setcookie("username", "mohammad", time() - 5,'/');

?>
