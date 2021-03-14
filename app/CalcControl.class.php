<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcVariables.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcControl {

    private $msgs;
    private $variables;
    private $result;

    public function __construct() {
        $this -> msgs = new Messages();
        $this -> variables = new CalcVariables();
        $this -> result = new CalcResult();
    }

    public function getVariables() {
        $this -> variables -> amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this -> variables -> percentage = isset($_REQUEST['percentage']) ? $_REQUEST['percentage'] : null;
        $this -> variables -> years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    }

    public function validate() {
        if (! (isset($this -> variables -> amount) && isset($this -> variables -> percentage) && isset($this -> variables -> years))) {
            return false;
        }

        $this -> msgs -> addInfo("Przekazano parametry.");

        if ($this -> variables -> amount == "") {
            $this -> msgs -> addError("Nie podano wysokości kredytu.");
        }
        if ($this -> variables -> percentage == "") {
            $this -> msgs -> addError("Nie podano oprocentowania.");
        }
        if ($this -> variables -> years == "") {
            $this -> msgs -> addError("Nie podano okresu kredytowania.");
        }

        if (! $this -> msgs -> isError()) {
            if (! is_numeric($this -> variables -> amount)) {
                $this -> msgs -> addError("Wysokość kredytu nie jest liczbą!");
            }
            if (! is_numeric($this -> variables -> percentage)) {
                $this -> msgs -> addError("Oprocentowanie nie jest liczbą!");
            }
            if (! is_numeric($this -> variables -> years)) {
                $this -> msgs -> addError("Okres kredytowania nie jest liczbą!");
            }  
        }

        return ! $this -> msgs -> isError();
    }

    public function calculate() {
        
        $this -> getVariables();

        if ($this -> validate()) {

            $this -> msgs -> addInfo("Podane parametry są poprawne. Wykonuję obliczenia.");
            $this -> variables -> amount = intval($this -> variables -> amount);
            $this -> variables -> percentage = intval($this -> variables -> percentage);
            $this -> variables -> years = intval($this -> variables -> years);

            $this -> result -> result = (($this -> variables -> percentage/100 * $this -> variables -> amount) + $this -> variables -> amount) / ($this -> variables -> years*12);

            $this -> result -> result = round($this -> result -> result, 2);
        }

        $this -> generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty -> assign('conf', $conf);

        $smarty -> assign('page_title', 'Kalkulator Kredytowy: Obiektowość');

        $smarty -> assign('variables', $this -> variables);
        $smarty -> assign('msgs', $this -> msgs);
        $smarty -> assign('result', $this -> result);


        $smarty -> display($conf->root_path.'/app/credit_view.tpl');
    }
}