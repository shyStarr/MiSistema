<?php
class ClienteModel
{
    private $db;
    private $clientes;

    public function __construct()
    {
        $this->db = Conexion::conectar();
        $this->clientes = array();
    }
    public function listar()
    {
        $this->clientes = $this->obtenerClientes();
        $n = 0;
        foreach ($this->clientes as $cliente) {
            $categoria = $this->calcularCategoria($cliente['idcliente']);
            $this->clientes[$n]['categoria'] = $categoria;
            $n++;
        }
        return $this->clientes;
    }

    public function obtenerClientes()
    {
        $consulta = $this->db->query("select * from clientes;");
        while ($filas = $consulta->fetch_assoc()) {
            $clientes[] = $filas;
        }
        return $clientes;
    }

    public function calcularCategoria($cliente)
    {
        $puntos_compra = $this->obtenerTotalPuntos($cliente);
        if ($puntos_compra > 1000) {
            return 'Gold';
        } else {
            if ($puntos_compra > 500) {
                return 'Silver';
            } else {
                return 'Bronce';
            }
        }
    }

    public function obtenerTotalPuntos($cliente)
    {
        $puntos_compra = $this->db->query("select sum(puntos) as puntos from ventas where cliente_id =" . $cliente);
        $puntos = $puntos_compra->fetch_assoc();
        return $puntos['puntos'];
    }



    public function verificarCliente($identificacion_cliente)
    {
        $consulta = $this->db->query("select count(*) as contador from clientes where identificacion = '" . $identificacion_cliente . "';");
        $cantidad_clientes = $consulta->fetch_assoc();
        if ($cantidad_clientes['contador'] > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function registrarCliente($data)
    {
        $consulta = $this->db->query("insert into clientes (identificacion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido)
        values('" . $data['identificacion'] . "','" . $data['primer_nombre'] . "','" . $data['segundo_nombre'] . "','" . $data['primer_apellido'] . "','" . $data['segundo_apellido'] . "');");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }
}
