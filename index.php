<?php
$params = $_POST;
if($params){
	if($params['identity'] == 'Admin' && $params['password'] == 'a'){
		echo '1';
	}
	else{
		echo '0';
	}
	exit;
}
?>
<!doctype html><html lang="us"><head><meta charset="utf-8"><title>jcxBase Loading...</title><link href="assets/css/datatables/demo_page.css" rel="stylesheet"><link href="assets/css/datatables/demo_table_jui.css" rel="stylesheet"><link href="assets/css/cupertino/jquery-ui-1.10.3.custom.css" rel="stylesheet"><link href="assets/css/Aristo/Aristo.css" rel="stylesheet"><link href="assets/css/default.css" rel="stylesheet"></head><body></body><script src="assets/js/cupertino/jquery-1.9.1.js"></script><script src="assets/js/cupertino/jquery-ui-1.10.3.custom.min.js"></script><script src="assets/js/jcxBase.js"></script><script src="assets/js/jcxBase.dev.js"></script></html>