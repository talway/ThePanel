<?php
/*
 * The Panel Configuration file
 * https://github.com/magikpns/ThePanel
 * Author @orvice and modified by @frjalex/@afang01 on Twitter
 * https://magikpns.com for VPN
 */

//Defines the VPN traffic max allowed
$tokb = 1024;
$tomb = 1024*1024;
$togb = $tomb*1024;
//Define DB Connection  数据库信息
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','password');
define('DB_DBNAME','radius');
define('DB_CHARSET','utf8');
define('DB_TYPE','mysql'); 
/*
 * Change in order to suit your needs
 */

//define Plan
//注册用户的初始化流量
//默认5GiB
$a_transfer = $togb*5;

//签到设置 签到活的的最低最高流量,单位MB
$check_min = 1;
$check_max = 100;

//name
$site_name = "ThePanel";
$site_url  = "https://magikpns.com/";
$salt = "ThePanel";

//用户注册后获得的邀请码最低最高
//都设置为0用户就不能邀请
$user_invite_min = '1';
$user_invite_max = '1';


//
//选择邮件服务
// smtp未完成，现在只能用mailgun
//mail-gun
//mail-smtp
$Selectmailservice = "mail-gun";
//邮件发件人
$sender = "xxx@xxx.xx";

//mail-gun
// Get your key from https://mailgun.com
$mailgun_key = "";
$mailgun_domain = "";


//
//mail-smtp
// smtp发件方式暂时无法使用
//设置smtp服务器连接方式:  
//加密连接(ssl) = "1"
//普通连接 = "0"
$mail_smtp_Connection = "1";
//smtp服务器端口 25 , 465 ...
$mail_smtp_Port = 465;
//smtp服务器
$mail_smtp_Server = "smtp.gmail.com";
//邮件帐号
$mail_smtp_Account = "xxxx@gmail.com";
//邮件密码
$mail_smtp_password = "密码";



//
require_once 'do.php';
