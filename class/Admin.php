<?php

class Admin {

    private $idadmin;
    private $nome;
    private $usuario;
    private $senha;
    
    function __construct($idadmin, $nome, $usuario, $senha) {
        $this->idadmin = $idadmin;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = md5($senha);
    }

    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }

    public function __toString() {
        return "Código Administrador: [" . $this->idadmin . "]" . '<br />' .
                "Nome: " . $this->nome . '<br />' .  
                "Usuário: " . $this->usuario . '<br />' .  
                "Senha: " . $this->senha . '<br />';
    }
}

?>

