<?php

$app = [];

require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';
$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(
  Connection::make($app['config']['database'])
);