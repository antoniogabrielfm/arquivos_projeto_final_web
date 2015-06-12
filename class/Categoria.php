<?php

class Categoria {

    private $idcategoria;
    private $tipo;
    private $descricao;
    
    function __construct($idcategoria, $tipo, $descricao) {
        $this->idcategoria = $idcategoria;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
    }

    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }

    public function __toString() {
        return "Código Categoria: [" . $this->idcategoria . "]" . '<br />' .
                "Tipo da Categoria: " . $this->tipo . '<br />' .                
                "Descrição: " . $this->descricao . '<br />';
    }
}

?>

