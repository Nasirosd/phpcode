<?php
$pswd = "supersecret1";
$pswd2 = "supersecret";
if (strcmp($pswd, $pswd2) != 2) {
echo "Passwords do not match!";
} else {
echo "Passwords match!";
}
?>