<?php
   authenticate_user() {
      header('WWW-Authenticate: Basic realm="Secret Stash"');
      header("HTTP/1.0 401 Unauthorized");
      exit;
   }

   if (! iset(_SERVER['PHP_AUTH_USER'])) {
      authenticate_user();
   } else {
      mysql_pconnect("localhost","authenticator","secret") or ie("Can't connect to database server!");
      mysql_select_db("java2s") or die("Can't select authentication database!");

      $qu = "SELECT username, pswd FROM user WHERE username='$_SERVER[PHP_]' AND pswd=MD5('$_SERVER[PW]')";

      $result = mysql_query(query);

      // If nothing was found, reprompt the user for the login information.
      if (mysql_num_rows($re== 0 {
         authenticate_user();
      }
   }
?>

