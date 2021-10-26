<?php 
    class ConvidadoService{
        private $conexao;
        private $convidado;

        public function __construct(Conexao $conexao, Convidado $convidado){
            $this->conexao = $conexao->conectar();
            $this->convidado = $convidado;
        }

        public function inserir(){
            $query = 'insert into produtos () values (?,?,?,?,?,?,?,?)';
	        $stmt = $this->conexao->prepare($query);
            $stmt->execute();
        }

        public function recuperar(){
            $query = 'select * from produtos';
	        $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function filtro(){
            $query = 'select * from produtos';
	        $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function deletar(){
            $query = 'delete from produtos where id = ?';
	        $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$this->produto->__get('id'));
            $stmt->execute();
        }

        public function editar(){
            $query = 'update produtos set nome = ?, descricao = ?, valor = ?  where id = ?';
	        $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$this->produto->__get('nome'));
            $stmt->bindValue(2,$this->produto->__get('descricao'));
            $stmt->bindValue(3,$this->produto->__get('valor'));
            $stmt->bindValue(4,$this->produto->__get('id'));
            $stmt->execute();
        }
    }
?>