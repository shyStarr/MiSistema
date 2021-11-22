<?php
require_once(__DIR__ . '/../Models/ClienteModel.php');
require_once(__DIR__ . '/../Db/db.php');
require_once(__DIR__ . '/../Controllers/ClienteController.php');

use \PHPUnit\Framework\TestCase;

class ClienteModelTest extends TestCase
{

    public function testListar()
    {
        $test = new ClienteModel();
        $this->assertNotEmpty($test->listar());
    }

    public function puntosProveedor(){
        return [
            'Caso 1' => [500, 'Bronce'],
            'Caso 2' => [501, 'Silver'],
            'Caso 3' => [1000, 'Silver'],
            'Caso 4' => [1001, 'Gold']
        ];
    }

    /**
     * @dataProvider puntosProveedor
     */
    public function testCalcularCategoria($puntos, $categoria){
        $mockClienteModel = $this -> getMockBuilder('ClienteModel')
                            -> onlyMethods (array('obtenerTotalPuntos'))
                            -> getMock();
        $mockClienteModel -> expects($this -> once())
                            -> method ('obtenerTotalPuntos')
                            -> will ($this -> returnValue ($puntos));
        $this -> assertEquals ($categoria, $mockClienteModel-> calcularCategoria(1));
    }
}

