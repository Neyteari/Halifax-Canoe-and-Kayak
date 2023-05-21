<?php

$mysqli = mysqli("localhost","id20615892_hkac","hkac1!MORE", "id20615892_hkac");

// Check connection
if ($mysqli -> connect_errno) 
{
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}