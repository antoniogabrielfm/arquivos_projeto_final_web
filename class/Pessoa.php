<?php

class Pessoa {

    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $celular;
    private $categoria; // receberá um objeto da classe categoria

    function __construct($id, $nome, $email, $telefone, $celular, $categoria) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->categoria = $categoria;
    }

    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }

    public function __toString() {
        return "Código pessoa: [" . $this->id . "]" . '<br />' .
                "Nome: " . $this->nome . '<br />' .
                "Email: R$ " . $this->email . '<br />' .
                "Telefone: R$ " . $this->telefone . '<br />' .
                "Celular: R$ " . $this->celular . '<br />' .
                "Categoria: " . $this->categoria . '<br />';
    }

}
?>


