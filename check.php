<?php
session_start();

if ($_SESSION['captcha'] === $_POST['captcha']) {
	echo 'PASS';
	unset($_SESSION['captcha']);
	exit();
}
echo 'FAIL';
