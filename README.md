# TH-Captcha

![TH-Captcha preview](http://www.mx7.com/i/a2f/Gw41j3.png)

## Required
* PHP5 ขึ่นไป
* PHP GD Extension

###### การตั้งค่าทั้งหมดสามารถตั้งค่าได้ใน captcha.php
```
$config = array(
  	// ความกว้าง
	'width' => 200,
	// ความสูง
	'height' => 75,
	// จะให้สุ่มตำแหน่งของพื้นหลังหรือไม่
	'random_bg_position' => true,
	// เปิดพื้นหลังหรือไม่
	'background' => true,
	// ภาษา มี 2 ภาษา en กับ th
	'lang' => 'th',
	// ขนาดเส้น
	'line_size' => 2,
	// เปิดเส้นหรือไม่
	'line_enabled' => true,
	// จำนวนเส้น
	'line_amount' => 3,
);
```
