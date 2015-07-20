<?php
session_start();

if ($_SESSION['captcha'] === strtolower($_POST['captcha'])) {
	echo 'PASS';
	unset($_SESSION['captcha']);
	exit();
}
echo 'FAIL';
