<?php
   session_set_cookie_params(86400, '/~ei12021'); //86400s = 24h
  session_start();

  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

  $BASE_DIR = '/usr/users2/mieic2012/ei12021/public_html/venn/proj/';
  $BASE_URL = '/~ei12021/venn/proj/';

  $conn = new PDO('pgsql:host=vdbm;dbname=lbaw1446', 'lbaw1446', 'oI506dx5');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec('SET SCHEMA \'Venn\'');

  include_once($BASE_DIR . 'lib/smarty-master/libs/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  
  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
