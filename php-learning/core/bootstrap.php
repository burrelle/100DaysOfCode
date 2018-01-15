<?php

App::bind('config', $config = require 'config.php');

App::bind('database', new QueryBuilder(
  Connection::make($config['database'])
));