<?php
namespace Acme\Build;

class DemoTask extends \Task {

  protected $arg;

  public function setArg($arg) {
    $this->arg = strrev($arg);
  }

  public function main() {
    echo "In " . __METHOD__ . ", arg = " . $this->arg . "\n";
  }
}

?>