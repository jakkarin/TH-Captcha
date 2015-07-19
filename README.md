# TH-Captcha

![TH-Captcha preview](http://www.mx7.com/i/a2f/Gw41j3.png)

## Required
* PHP5 ขึ่นไป
* PHP GD Extension

#### ทำอะไรได้บ้าง ?
* สามารถสุ่ม font จาก folder fonts [นามสุกลเป็น .ttf เท่านั้น]
* สามารถสุ่มพื้นหลังจาก folder images [นามสกุลเป็น .jpg เท่านั้น]
* แค่นี่ล่ะครัชไม่ได้มีอะไรใหม่เลย T-T

###### การตั้งค่าทั้งหมดสามารถตั้งค่าได้ใน captcha.php
```
$config = array(
	'width' => 200, // ความกว้าง
	'height' => 75, // ความสูง
	'random_bg_position' => true, // จะให้สุ่มตำแหน่งของพื้นหลังหรือไม่
	'background' => true, // เปิดพื้นหลังหรือไม่
	'lang' => 'th', // ภาษา มี 2 ภาษา en กับ th
	'line_size' => 2, // ขนาดเส้น
	'line_enabled' => true, // เปิดเส้นหรือไม่
	'line_amount' => 3, // จำนวนเส้น
);
```

###### แก้ไขสีเส้น
```
$line_color = imagecolorallocate($image, 240,240,240); // rgb
```

###### แก้ไขสีตัวอักษร
```
$text_color = imagecolorallocate($image, 255,255,255); // rgb
```
