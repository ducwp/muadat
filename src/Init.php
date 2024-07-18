<?php

namespace Muda;

use \Nette\Database\Connection;

class Init
{
  private static $_instance = null;
  public static function instance()
  {
    if (!isset(self::$_instance)) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  private function __construct()
  {
    //your code here
    $database = new Connection('host=127.0.0.1;dbname=muadat', 'root', 'root');
    print_r($database);

    $database->query('INSERT INTO bds ?', [ // here can be omitted question mark
      'title' => 'AAA',
      'links' => 'BBB',
    ]);
    // INSERT INTO users (`name`, `year`) VALUES ('Jim', 1978)

    echo $id = $database->getInsertId(); // returns the auto-increment of inserted row

    //$id = $database->getInsertId($sequence); // or sequence value
  }
}
