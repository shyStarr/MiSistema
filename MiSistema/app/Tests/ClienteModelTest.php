<?php
require_once(__DIR__ . '/../Models/ClienteModel.php');
require_once(__DIR__ . '/../Db/db.php');

use \PHPUnit\Framework\TestCase;

class ClienteModelTest extends TestCase
{

    public function testListar()
    {
        $test = new ClienteModel();
        $this->assertNotEmpty($test->listar());
    }
}
