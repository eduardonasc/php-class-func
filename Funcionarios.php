<?php

class Funcionarios
{
    private $funcionarios;

    public function __construct()
    {
        $this->funcionarios = [
            ['id' => 4, 'nome' => 'João', 'salario' => 1500],
            ['id' => 21, 'nome' => 'José', 'salario' => 1230.50],
            ['id' => 34, 'nome' => 'Maria', 'salario' => 1678.54]
        ];
    }

    public function all()
    {
        return $this->funcionarios;
    }

    /**
     * Busca um funcionário pelo id
     * 
     * @param int $id
     * 
     * @return array|null
     */
    public function find($id)
    {
        foreach ($this->funcionarios as $func) {
            if ($func['id'] == $id) {
                return $func;
            }
        }
    
        return null;
    }
}

?>