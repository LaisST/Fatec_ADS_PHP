<?php
#passo 1
require_once("init.php");

# definindo a classe para conexão com banco de dados
class Banco {
    #Escopo atributo Public ele pode ser acessado e alterado do lado de fora por qualquer
    #Escopo atributo Private so pode ser acessado de dewntro de classe
    #Escopo atributo Protected pode ser invocado por suas subclasses e em qualquer lugar da classe, sem problemas
    
    protected $mysqli;
    
    # Metodos são as funções existentes somente dentro de cada objeto
    # public function __construct() inicializa quanto a classe é acionada, o __construct() pode ou nao receber valores de entrada 
    public function __construct() {
        echo "Conexão efetuada com sucesso!";
        $this->conexao();
    }
    
    # Métodos criados para iniciar a conexão com o banco de dados
    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }
    
    # passo 2 criar o método para inserir os dados no banco
    public function setLivro($nome, $autor, $quantidade, $preco, $data){
        $stmt = $this->mysqli->prepare("INSERT INTO livraria ('nome','autor,'quantidade', 'preco', 'data') VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss", $nome, $autor, $quantidade, $preco, $data);
        if ($stmt->execute() == TRUE) {
        return true;
        } else {
        return false;
        }
    }
}
?>
