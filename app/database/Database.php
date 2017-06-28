<?php
namespace app\database;

use app\system\test\Test;

class Database {
    public function test()
    {
        $t= new Test();
        
        return $t->test();
      
    }
}