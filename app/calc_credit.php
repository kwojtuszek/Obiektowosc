<?php

require_once dirname(__FILE__).'/../config_credit.php';

require_once $conf -> root_path.'/app/CalcControl.class.php';

$control = new CalcControl();
$control -> calculate();