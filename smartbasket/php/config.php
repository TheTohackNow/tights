<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		const HOST = 'smtp.gmail.com';
		const LOGIN = 'tofhaknow3@gmail.com';
		const PASS = 'fqxu mlxk pwth kczg';
		const PORT = '465';

		// *** /SMTP *** //
   
    const SENDER = 'tofhaknow3@gmail.com';
    const CATCHER = 'tofhaknow3@gmail.com';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    