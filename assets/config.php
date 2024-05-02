<?php
define('IS_LOCAL', $_SERVER['SERVER_NAME'] === 'localhost');
define('BASE_URL', IS_LOCAL ? '/marketing/' : '/');
