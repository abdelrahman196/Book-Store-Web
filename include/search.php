<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  session_start();
  $_SESSION["S_T"]=$_POST["s_t"];
}
else{
  print $_SERVER["REQUEST_METHOD"];
}
