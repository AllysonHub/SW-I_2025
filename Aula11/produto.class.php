<?php
    class produto {
        private $Nome;
        private $Preco;
        private $Quantidade;

        // construtor para inicializar esses atributos.
        public function __construct($nome, $preco, $quantidade){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade = $quantidade;
        }

        public function getNome(){
            return $this->Nome;
        }
        public function getPreco(){
            return $this->Preco;
        }

        public function SetNome($nome){
            $this->Nome = $nome;
        }
        public function SetPreco($preco){
            $this->Preco = $preco;
        }
        
        public function adicionarEstoque($qtde){
            if ($qtde >= 0 ){
                $this->Quantidade += $qtde;
            }
           
        }
        public function removerEstoque($qtde){
            if ($this->Quantidade - $qtde >= 0 ){
                $this->Quantidade -= $qtde;
            }
        }
        public function mostrarDetalhes(){
            echo"Produto: {$this->Nome} </br>";
            echo"Preço: : {$this->Preco} </br>";
            echo"Quantidade: {$this->Quantidade} </br>";
        }
    
    }
?>