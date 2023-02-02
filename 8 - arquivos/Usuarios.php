<?php
require_once 'Db1.php';

class Usuarios{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getId(){
        return $this->idusuario;
    }
    public function setId($id){
        $this->idusuario = $id;
    }
    public function getDeslogin(){
        return $this->deslogin;
    }
    public function setDeslogin($deslogin){
        $this->deslogin = $deslogin;
    }
    public function getDessenha(){
        return $this->dessenha;
    }
    public function setDessenha($dessenha){
        $this->dessenha = $dessenha;
    }
    public function getDtcadastro(){
        return $this->dtcadastro;
    }
    public function setDtcadastro($dtcadastro){
        $this->dtcadastro = $dtcadastro;
    }
    public function __construct($login = "", $password = ""){
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }
    public function update($login, $senha){
        $this->setDeslogin($login);
        $this->setDessenha($senha);

        $db = new Db1();
        $db->search("UPDATE tb_usuarios SET deslogin = :USER, dessenha = :PASS WHERE idusuario = :ID", array(':USER'=>$this->getDeslogin(), ':PASS'=>$this->getDessenha(), ':ID'=>$this->getId()));

    }
    public function delete(){
        $db = new Db1();
        $db->search("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(':ID'=>$this->getId()));

        $this->setId(0);
        $this->setDeslogin(" ");
        $this->setDessenha(" ");
        $this->setDtcadastro(new Datetime());

    }

    public static function getList(){
        $db = new Db1();
        return $db->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }
    public static function searchUser($deslogin){
        $db = new Db1();
        return $db->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :ID ORDER BY deslogin", array(":ID"=>"%".$deslogin."%"));

    
    }
    public function login($login, $senha){
        $db = new Db1();
        $results = $db->select("SELECT * FROM tb_usuarios WHERE deslogin = :USER AND dessenha = :PASS ", array(":USER"=>$login, ":PASS"=>$senha));
        if (count($results) > 0){
            $this->setData($results[0]);
        }else{
            echo "Erro!!!";
        }
    }
    public function insert(){
        $db = new Db1();
        $results = $db->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(':LOGIN'=>$this->getDeslogin(), ':PASSWORD'=>$this->getDessenha()));
        if (count($results) > 0){
            $this->setData($results[0]);
        }
    }
    public function setData($data){
        $this->setId($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function loadById($id){
        $db = new Db1();
        $results = $db->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));
        if (count($results) > 0){
            $this->setData($results[0]);

        }
    }
    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getId(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }

}







?>