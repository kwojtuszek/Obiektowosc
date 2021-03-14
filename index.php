<?php
require_once dirname(__FILE__).'/config_credit.php';

include $conf -> root_path.'/app/calc_credit.php';

// Inny sposób:
//przekierowanie przeglądarki klienta (redirect)
//header("Location: ".$conf->root_path."/app/calc.php");