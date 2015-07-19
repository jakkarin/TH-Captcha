<?php
session_start();

if ($_SESSION['captcha'] === strtolower($_POST['captcha'])) {
	echo 'PASS';
	exit();
}
echo 'FAIL';