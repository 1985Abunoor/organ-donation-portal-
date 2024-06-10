<?php

$db = new mysqli("localhost","root","","organs_donors");

if ($db->connect_error) {
  echo "Failed to connect to MySQL: " . $db->connect_error;
  exit();
}