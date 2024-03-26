<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('th', array (
  'validators' => 
  array (
    'This value should be false.' => 'ค่านี้ควรเป็น false',
    'This value should be true.' => 'ค่านี้ควรเป็น true',
    'This value should be of type {{ type }}.' => 'ค่านี้ควรเป็น {{ type }}',
    'This value should be blank.' => 'ควรเป็นค่าว่าง',
    'The value you selected is not a valid choice.' => 'คุณเลือกค่าที่ไม่ตรงกับตัวเลือก',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'คุณต้องเลือกอย่างน้อย {{ limit }} ตัวเลือก',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'คุณเลือกได้มากที่สุด {{ limit }} ตัวเลือก',
    'One or more of the given values is invalid.' => 'มีบางค่าที่ส่งมาไม่ถูกต้อง',
    'This field was not expected.' => 'ไม่ควรมีฟิลด์นี้',
    'This field is missing.' => 'ฟิลด์นี้หายไป',
    'This value is not a valid date.' => 'ค่าของวันที่ไม่ถูกต้อง',
    'This value is not a valid datetime.' => 'ค่าของวันที่และเวลาไม่ถูกต้อง',
    'This value is not a valid email address.' => 'ค่าของอีเมล์ไม่ถูกต้อง',
    'The file could not be found.' => 'ไม่พบไฟล์',
    'The file is not readable.' => 'ไฟล์ไม่อยู่ในสถานะที่สามารถอ่านได้',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ไฟล์ใหญ่เกิน ({{ size }} {{ suffix }}) อนุญาตให้ใหญ่ที่สุดได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime type ของไฟล์ไม่ถูกต้อง ({{ type }}) Mime types ที่อนุญาตคือ {{ types }}',
    'This value should be {{ limit }} or less.' => 'ค่านี้ควรจะเป็น {{ limit }} หรือน้อยกว่านั้น',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'ค่านี้ยาวเกินไป ควรจะมีแค่ {{ limit }} ตัวอักษรหรือน้อยกว่านั้น',
    'This value should be {{ limit }} or more.' => 'ค่านี้ควรจะมี {{ limit }} หรือมากกว่านั้น',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'ค่านี้สั้นเกินไป ควรจะมี {{ limit }} ตัวอักษรหรือมากกว่านั้น',
    'This value should not be blank.' => 'ค่านี้ไม่ควรเป็นค่าว่าง',
    'This value should not be null.' => 'ค่านี้ไม่ควรเป็นค่า null',
    'This value should be null.' => 'ค่านี้ควรเป็นค่า null',
    'This value is not valid.' => 'ค่านี้ไม่ถูกต้อง',
    'This value is not a valid time.' => 'ค่าของเวลาไม่ถูกต้อง',
    'This value is not a valid URL.' => 'ค่าของ URL ไม่ถูกต้อง',
    'The two values should be equal.' => 'ค่าทั้งสองค่าควรจะเหมือนกัน',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ขนาดไฟล์ใหญ่เกินไป อนุญาตให้ไฟล์ขนาดใหญ่ได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The file is too large.' => 'ขนาดไฟล์ใหญ่เกินไป',
    'The file could not be uploaded.' => 'ไม่สามารถอัปโหลดไฟล์ได้',
    'This value should be a valid number.' => 'ค่าของตัวเลขไม่ถูกต้อง',
    'This file is not a valid image.' => 'ไฟล์นี้ไม่ใช่ไฟล์รูปภาพ',
    'This is not a valid IP address.' => 'ค่าของ IP ไม่ถูกต้อง',
    'This value is not a valid language.' => 'ค่าของภาษาไม่ถูกต้อง',
    'This value is not a valid locale.' => 'ค่าของภูมิภาค (Locale) ไม่ถูกต้อง',
    'This value is not a valid country.' => 'ค่าของประเทศไม่ถูกต้อง',
    'This value is already used.' => 'ค่านี้ถูกใช้งานไปแล้ว',
    'The size of the image could not be detected.' => 'ไม่สามารถตรวจสอบขนาดไฟล์ของภาพได้',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ความกว้างของภาพเกินขนาด ({{ width }}px) อนุญาตให้กว้างได้มากที่สุด {{ max_width }}px',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ความกว้างของภาพต่ำเกินไป ({{ width }}px) อนุญาตให้ความกว้างไม่ต่ำกว่า {{ min_width }}px',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ความสูงของภาพเกินขนาด ({{ height }}px) อนุญาตให้สูงได้มากที่สุด {{ max_height }}px',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ความสูงของภาพเล็กเกินไป ({{ height }}px) อนุญาตให้ความสูงไม่ควรต่ำกว่า {{ min_height }}px',
    'This value should be the user\'s current password.' => 'ค่านี้ควรจะเป็นรหัสผ่านปัจจุบันของผู้ใช้',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ค่านี้ควรจะมีความยาว {{ limit }} ตัวอักษร',
    'The file was only partially uploaded.' => 'อัปโหลดไฟล์ได้เพียงบางส่วนเท่านั้น',
    'No file was uploaded.' => 'ไม่มีไฟล์ใดถูกอัปโหลด',
    'No temporary folder was configured in php.ini.' => 'ไม่พบการตั้งค่าโฟลเดอร์ชั่วคราว (temporary folder) ใน php.ini',
    'Cannot write temporary file to disk.' => 'ไม่สามารถเขียนไฟล์ชั่วคราว (temporary file) ลงดิสก์ได้',
    'A PHP extension caused the upload to fail.' => 'PHP extension ทำให้การอัปโหลดมีปัญหา',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'คอเล็กชั่นนี้ควรจะประกอบไปด้วยอย่างน้อย {{ limit }} สมาชิก',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'คอเล็กชั่นนี้ไม่ควรมีสมาชิกเกิน {{ limit }}',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'คอเล็กชั่นนี้ควรจะมี {{ limit }} สมาชิกเท่านั้น',
    'Invalid card number.' => 'หมายเลขบัตรไม่ถูกต้อง',
    'Unsupported card type or invalid card number.' => 'ไม่รู้จักประเภทของบัตร หรือหมายเลขบัตรไม่ถูกต้อง',
    'This is not a valid International Bank Account Number (IBAN).' => 'ค่านี้ไม่ใช่ International Bank Account Number (IBAN) ที่ถูกต้อง',
    'This value is not a valid ISBN-10.' => 'ค่านี้ไม่ใช่ ISBN-10 ที่ถูกต้อง',
    'This value is not a valid ISBN-13.' => 'ค่านี้ไม่ใช่ ISBN-13 ที่ถูกต้อง',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ค่านี้ไม่ใช่ ISBN-10 หรือ ISBN-13 ที่ถูกต้อง',
    'This value is not a valid ISSN.' => 'ค่านี้ไม่ใช่ ISSN ที่ถูกต้อง',
    'This value is not a valid currency.' => 'ค่านี้ไม่ใช่สกุลเงินที่ถูกต้อง',
    'This value should be equal to {{ compared_value }}.' => 'ค่านี้ควรตรงกับ {{ compared_value }}',
    'This value should be greater than {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่า {{ compared_value }}',
    'This value should be greater than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่าหรือตรงกับ {{ compared_value }}',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ควรจะเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'This value should be less than {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่า {{ compared_value }}',
    'This value should be less than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่าหรือเท่ากับ {{ compared_value }}',
    'This value should not be equal to {{ compared_value }}.' => 'ค่านี้ไม่ควรเท่ากันกับ {{ compared_value }}',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ไม่ควรเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'สัดส่วนของภาพใหญ่เกิน ({{ ratio }}) สัดส่วนใหญ่ที่สุดที่ใช้ได้คือ {{ max_ratio }}',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'สัดส่วนของภาพเล็กเกิน ({{ ratio }}) สัดส่วนเล็กที่สุดที่ใช้ได้คือ {{ min_ratio }}',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'รูปภาพเป็นจุตรัส ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นสี่เหลี่ยมจตุรัส',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'ภาพนี้เป็นแนวนอน ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวนอน',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'ภาพนี้เป็นแนวตั้ง ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวตั้ง',
    'An empty file is not allowed.' => 'ไม่อนุญาตให้ใช้ไฟล์ว่าง',
    'The host could not be resolved.' => 'ไม่สามารถแก้ไขชื่อโฮสต์',
    'This value does not match the expected {{ charset }} charset.' => 'ค่านี้ไม่ตรงกับการเข้ารหัส {{ charset }}',
    'This is not a valid Business Identifier Code (BIC).' => 'นี่ไม่ถูกต้องตามรหัสสำหรับระบุธุรกิจนี้ (BIC)',
    'Error' => 'เกิดข้อผิดพลาด',
    'This is not a valid UUID.' => 'นี่ไม่ใช่ UUID ที่ถูกต้อง',
    'This value should be a multiple of {{ compared_value }}.' => 'ค่านี้ควรเป็น {{ compared_value }} หลายตัว',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'รหัสสำหรับระบุธุรกิจนี้ (BIC) ไม่เกี่ยวข้องกับ IBAN {{ iban }}',
    'This value should be valid JSON.' => 'ค่านี้ควรอยู่ในรูปแบบ JSON ที่ถูกต้อง',
    'This collection should contain only unique elements.' => 'คอเล็กชั่นนี้ควรมีเฉพาะสมาชิกที่ไม่ซ้ำกันเท่านั้น',
    'This value should be positive.' => 'ค่านี้ควรเป็นค่าบวก',
    'This value should be either positive or zero.' => 'ค่านี้ควรเป็นค่าบวกหรือค่าศูนย์',
    'This value should be negative.' => 'ค่านี้ควรเป็นค่าลบ',
    'This value should be either negative or zero.' => 'ค่านี้ควรเป็นค่าลบหรือค่าศูนย์',
    'This value is not a valid timezone.' => 'ค่าเขตเวลาไม่ถูกต้อง',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'รหัสผ่านนี้ได้เคยรั่วไหลออกไปโดยถูกการละเมิดข้อมูล ซึ่งไม่ควรนำกลับมาใช้ กรุณาใช้รหัสผ่านอื่น',
    'This value should be between {{ min }} and {{ max }}.' => 'ค่านี้ควรอยู่ระหว่าง {{ min }} ถึง {{ max }}',
    'This value is not a valid hostname.' => 'ค่าโฮสต์เนมไม่ถูกต้อง',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'จำนวนของสมาชิกในคอเล็กชั่นควรเป็นพหุคูณของ {{ compared_value }}',
    'This value should satisfy at least one of the following constraints:' => 'ค่านี้ควรเป็นไปตามข้อจำกัดอย่างน้อยหนึ่งข้อจากข้อจำกัดเหล่านี้:',
    'Each element of this collection should satisfy its own set of constraints.' => 'สมาชิกแต่ละตัวในคอเล็กชั่นควรเป็นไปตามข้อจำกัดของคอเล็กชั่นนั้นๆ',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'ค่ารหัสหลักทรัพย์สากล (ISIN) ไม่ถูกต้อง',
    'This value should be a valid expression.' => 'ค่านี้ควรเป็นนิพจน์ที่ถูกต้อง',
    'This value is not a valid CSS color.' => 'ค่านี้ไม่ใช่สี CSS ที่ถูกต้อง',
    'This value is not a valid CIDR notation.' => 'ค่านี้ไม่ใช่รูปแบบ CIDR ที่ถูกต้อง',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'ค่าของ netmask ควรมีค่าระหว่าง {{ min }} ถึง {{ max }}',
    'This form should not contain extra fields.' => 'ฟอร์มนี้ไม่ควรมี extra fields',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'ไฟล์ที่อัพโหลดมีขนาดใหญ่เกินไป กรุณาลองอัพโหลดใหม่อีกครั้งด้วยไฟล์ที่มีขนาดเล็กลง',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token ไม่ถูกต้อง กรุณาลองส่งแบบฟอร์มใหม่',
    'This value is not a valid HTML5 color.' => 'ค่านี้ไม่ใช่ค่าที่ถูกต้องของค่าสี HTML5',
    'Please enter a valid birthdate.' => 'กรุณากรอกวันเดือนปีเกิดที่ถูกต้อง',
    'The selected choice is invalid.' => 'ตัวเลือกที่เลิอกไม่ถูกต้อง',
    'The collection is invalid.' => 'คอเล็กชั่นไม่ถูกต้อง',
    'Please select a valid color.' => 'กรุณาเลือกค่าสีที่ถูกต้อง',
    'Please select a valid country.' => 'กรุณาเลือกประเทศที่ถูกต้อง',
    'Please select a valid currency.' => 'กรุุณาเลิอกค่าสกุลเงินที่ถูกต้อง',
    'Please choose a valid date interval.' => 'กรุณณากรอกช่วงวันที่ที่ถูกต้อง',
    'Please enter a valid date and time.' => 'กรุณณากรอกค่าเวลาและวันที่ที่ถูกต้อง',
    'Please enter a valid date.' => 'กรุณณากรอกค่าวันที่ที่ถูกต้อง',
    'Please select a valid file.' => 'กรุณาเลือกไฟล์ที่ถูกต้อง',
    'The hidden field is invalid.' => 'ค่า Hidden field ไม่ถูกต้อง',
    'Please enter an integer.' => 'กรุณากรอกตัวเลขจำนวนเต็ม',
    'Please select a valid language.' => 'กรุณาเลือกภาษาที่ถูกต้อง',
    'Please select a valid locale.' => 'กรุณาเลือกท้องถิ่นที่ถูกต้อง',
    'Please enter a valid money amount.' => 'กรุณากรอกจำนวนเงินที่ถูกต้อง',
    'Please enter a number.' => 'กรุณากรอกตัวเลข',
    'The password is invalid.' => 'รหัสผ่านไม่ถูกต้อง',
    'Please enter a percentage value.' => 'กรุณากรอกค่าเปอร์เซ็นต์',
    'The values do not match.' => 'ค่าทั้งสองไม่ตรงกัน',
    'Please enter a valid time.' => 'กรุณากรอกค่าเวลาที่ถูกต้อง',
    'Please select a valid timezone.' => 'กรุณาเลือกค่าเขตเวลาที่ถูกต้อง',
    'Please enter a valid URL.' => 'กรุณากรอก URL ที่ถูกต้อง',
    'Please enter a valid search term.' => 'กรุณากรอกคำค้นหาที่ถูกต้อง',
    'Please provide a valid phone number.' => 'กรุณากรอกเบอร์โทรศัพท์ที่ถูกต้อง',
    'The checkbox has an invalid value.' => 'Checkbox มีค่าที่ไม่ถูกต้อง',
    'Please enter a valid email address.' => 'กรุณากรอกที่อยู่อีเมล์ที่ถูกต้อง',
    'Please select a valid option.' => 'กรุณาเลือกตัวเลือกที่ถูกต้อง',
    'Please select a valid range.' => 'กรุณาเลือกค่าช่วงที่ถูกต้อง',
    'Please enter a valid week.' => 'กรุณากรอกค่าสัปดาห์ที่ถูกต้อง',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'พบความผิดพลาดในการรับรองตัวตน',
    'Authentication credentials could not be found.' => 'ไม่พบข้อมูลในการรับรองตัวตน (credentials) ',
    'Authentication request could not be processed due to a system problem.' => 'คำร้องในการรับรองตัวตนไม่สามารถดำเนินการได้ เนื่องมาจากปัญหาของระบบ',
    'Invalid credentials.' => 'ข้อมูลการรับรองตัวตนไม่ถูกต้อง',
    'Cookie has already been used by someone else.' => 'Cookie ถูกใช้งานไปแล้วด้วยผู้อื่น',
    'Not privileged to request the resource.' => 'ไม่ได้รับสิทธิ์ให้ใช้งานส่วนนี้ได้',
    'Invalid CSRF token.' => 'CSRF token ไม่ถูกต้อง',
    'No authentication provider found to support the authentication token.' => 'ไม่พบ authentication provider ที่รองรับสำหรับ authentication token',
    'No session available, it either timed out or cookies are not enabled.' => 'ไม่มี session ที่พร้อมใช้งาน, Session หมดอายุไปแล้วหรือ cookies ไม่ถูกเปิดใช้งาน',
    'No token could be found.' => 'ไม่พบ token',
    'Username could not be found.' => 'ไม่พบ Username',
    'Account has expired.' => 'บัญชีหมดอายุไปแล้ว',
    'Credentials have expired.' => 'ข้อมูลการระบุตัวตนหมดอายุแล้ว',
    'Account is disabled.' => 'บัญชีถูกระงับแล้ว',
    'Account is locked.' => 'บัญชีถูกล็อกแล้ว',
    'Too many failed login attempts, please try again later.' => 'มีความพยายามเข้าสู่ระบบล้มเหลวมากเกินไป กรุณาลองใหม่ภายหลัง',
    'Invalid or expired login link.' => 'ลิงค์เข้าสู่ระบบไม่ถูกต้องหรือหมดอายุไปแล้ว',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'มีความพยายามเข้าสู่ระบบล้มเหลวมากเกินไป โปรดลองอีกครั้งใน %minutes% นาที',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'มีความพยายามเข้าสู่ระบบล้มเหลวมากเกินไป โปรดลองอีกครั้งใน %minutes% นาที',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% year|%count% years',
    '%count% month|%count% months' => '%count% month|%count% months',
    '%count% day|%count% days' => '%count% day|%count% days',
    '%count% hour|%count% hours' => '%count% hour|%count% hours',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'The link to verify your email has expired. Please request a new link.' => 'The link to verify your email has expired. Please request a new link.',
    'The link to verify your email is invalid. Please request a new link.' => 'The link to verify your email is invalid. Please request a new link.',
    'The link to verify your email appears to be for a different account or email. Please request a new link.' => 'The link to verify your email appears to be for a different account or email. Please request a new link.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Dashboard',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Edit %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Create %entity_label_singular%',
    'page_title.exception' => 'Error|Errors',
    'datagrid.hidden_results' => 'Some results can\'t be displayed because you don\'t have enough permissions',
    'datagrid.no_results' => 'No results found.',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'paginator.results' => '{0} No results|{1} <strong>1</strong> result|]1,Inf] <strong>%count%</strong> results',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the field is not public',
    'label.form.empty_value' => 'None',
    'field.code_editor.view_code' => 'View code',
    'field.text_editor.view_content' => 'View content',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Add %entity_label_singular%',
    'action.search' => 'Search',
    'action.detail' => 'Show',
    'action.edit' => 'Edit',
    'action.delete' => 'Delete',
    'action.cancel' => 'Cancel',
    'action.index' => 'Back to listing',
    'action.deselect' => 'Deselect',
    'action.add_new_item' => 'Add a new item',
    'action.remove_item' => 'Remove the item',
    'action.choose_file' => 'Choose file',
    'action.close' => 'Close',
    'action.create' => 'Create',
    'action.create_and_add_another' => 'Create and add another',
    'action.create_and_continue' => 'Create and continue editing',
    'action.save' => 'Save changes',
    'action.save_and_continue' => 'Save and continue editing',
    'batch_action_modal.title' => 'You are going to apply the "%action_name%" action to %num_items% item(s).',
    'batch_action_modal.content' => 'There is no undo for this operation.',
    'batch_action_modal.action' => 'Proceed',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Clear',
    'filter.button.apply' => 'Apply',
    'filter.label.is_equal_to' => 'is equal to',
    'filter.label.is_not_equal_to' => 'is not equal to',
    'filter.label.is_greater_than' => 'is greater than',
    'filter.label.is_greater_than_or_equal_to' => 'is greater than or equal to',
    'filter.label.is_less_than' => 'is less than',
    'filter.label.is_less_than_or_equal_to' => 'is less than or equal to',
    'filter.label.is_between' => 'is between',
    'filter.label.contains' => 'contains',
    'filter.label.not_contains' => 'doesn\'t contain',
    'filter.label.starts_with' => 'starts with',
    'filter.label.ends_with' => 'ends with',
    'filter.label.exactly' => 'exactly',
    'filter.label.not_exactly' => 'not exactly',
    'filter.label.is_same' => 'is same',
    'filter.label.is_not_same' => 'is not same',
    'filter.label.is_after' => 'is after',
    'filter.label.is_after_or_same' => 'is after or same',
    'filter.label.is_before' => 'is before',
    'filter.label.is_before_or_same' => 'is before or same',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'form.tab.error_badge_title' => 'One invalid input|%count% invalid inputs',
    'form.slug.confirm_text' => 'If you change the slug, you can break links on other pages.',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.sign_out' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'settings.appearance.label' => 'Appearance',
    'settings.appearance.light' => 'Light',
    'settings.appearance.dark' => 'Dark',
    'settings.appearance.auto' => 'Auto',
    'settings.locale' => 'Language',
    'login_page.username' => 'Username',
    'login_page.password' => 'Password',
    'login_page.sign_in' => 'Sign in',
    'login_page.forgot_password' => 'Forgot Your Password?',
    'login_page.remember_me' => 'Remember me',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.insufficient_entity_permission' => 'You don\'t have permission to access this item.',
    'autocomplete.no-results-found' => 'No results found',
    'autocomplete.no-more-results' => 'No more results',
    'autocomplete.loading-more-results' => 'Loading more results…',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
