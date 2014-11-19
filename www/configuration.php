<?php
class JConfig {

   /*Site Settings*/
   var $offline = 0;
   var $offline_message = '';
   var $sitename = 'Blox';
   var $editor = 'tinymce';

   /*Database Settings*/
   var $dbtype = 'mysqli';
   var $host = '127.0.0.1:3306';
   var $user = 'root';
   var $password = 'root';
   var $db = 'blox';
   var $dbprefix = 'jos_';

   /*Server Settings*/
   var $secret = 'TLnKcBfjXBYLDslnQI5P3ouPPSARq7MS';
   var $error_reporting = 0;
   var $tmp_path = '/root/blox/www/tmp';
   var $log_path = '/root/blox/www/log';
   var $force_ssl = 0;

   /*Session Settings*/
   var $lifetime = 1440;
   var $session_handler = 'database';

   /*Mail Settings*/
   var $mailer = 'mail';
   var $mailfrom = '';
   var $fromname = '';
   var $sendmail = '/usr/sbin/sendmail';
   var $smtpauth = 0;
   var $smtpuser = '';
   var $smtppass = '';
   var $smtphost = 'localhost';

   /*Cache Settings*/
   var $caching = 1;
   var $cachetime = 60;
   var $cache_handler = 'file';

   /*Debug Settings*/
   var $debug = 0;
   var $debug_db = 0;
   var $debug_lang = 0;

   /*Route Settings*/
   var $sef_rewrite = 0;

   /*Legacy. Will be removed*/
   var $list_limit = 20;
   var $gzip = 0;
   var $xmlrpc_server = 0;
   var $ftp_enable = 0;
   var $offset = 0;
   var $MetaAuthor = 1;
   var $MetaTitle = 1;
   var $sef = 0;
   var $sef_suffix = 0;
   var $feed_limit = 10;

   /*Other configurations*/
   var $helpurl = 'http://www.GetAnahita.com';
   var $feed_email = 'author';
   var $live_site = 'http://localhost';
   var $memcache_settings = array();
   var $ftp_host = '';
   var $ftp_port = 0;
   var $ftp_user = '';
   var $ftp_pass = '';
   var $ftp_root = '';
   var $smtpsecure = 'none';
   var $smtpport = 25;
   var $MetaDesc = '';
   var $MetaKeys = '';

}
