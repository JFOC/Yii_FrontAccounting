<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Howto';
$this->breadcrumbs=array(
	'Howto',
);
?>
<h1>HOW TO</h1>

<p>
Panduan cara menginstall dan menggunakan aplikasi Yii-FrontAccounting 
</p>
<ul>
<li>download aplikasi Yii-FrontAccounting master.zip</li> 
<li>Ekstrak di direktori di web server</li> 
<li>Buat database baru yii_frontaccounting dan import sqldump yii_frontaccounting.sql dan kemudian yiirights+user+messaging.sql ke database</li> 
<li>konfigurasi /protected/config/main.php untuk menghubungkan dengan database yang dibuat dan Jalankan web server lokal</li> 
<li> Gunakan akun admin/admin atau demo/demo untuk login dan mulai menggunakan Yii_FrontAccounting</li> 
</ul>

