<?php

defined('ENABLE_URL_REWRITE') or define('ENABLE_URL_REWRITE', true);
defined('LOG_DRIVER') or define('LOG_DRIVER', 'system');

# Database configurations
define('DB_DRIVER', 'postgres');
define('DB_USERNAME', 'kanboard_dbuser');
define('DB_PASSWORD', $_ENV['KANBOARD_DBPASS']);
define('DB_HOSTNAME', $_ENV['KANBOARD_DBHOST']);
define('DB_NAME', 'kanboard');

# Email configurations
// define('MAIL_FROM', $_ENV['KANBOARD_EMAIL_FROM']);

