<?php
/**
 * Description of Usuario
 *
 * @author Henrique Rabadan <rabadan at agaerre.com.br>
 */
class Usuario {
    private $id;
    private $user;
    private $senha;
    private $ativo;
    
    function getId() {
        return $this->id;
    }

    function getUser() {
        return $this->user;
    }

    function getSenha() {
        return $this->senha;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function loadById($id) {
            $sql = new Sql();
            $results = $sql->select("SELECT * FROM usuarios WHERE id = :ID", array(":ID"=>$id));
            
            if (count($results) > 0) {
                $row = $results[0];
                $this->setId($row["id"]);
                $this->setUser($row["user"]);
                $this->setSenha($row["senha"]);
                $this->setAtivo($row["ativo"]);
            }
    }
    
    public function __toString() {
        return json_encode(array(
            "id"=>$this->getId(),
            "user"=>$this->getUser(),
            "senha"=>$this->getSenha(),
            "ativo"=> $this->getAtivo()
        ));
    }
}