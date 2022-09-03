<?php

class Fatura {

public $id_produto;
public $descricao;
public $qtdeComprada;
public $precoUnitario;

  
//Construtor
    public function __construct($id, $desc, $qtde, $preco) {
			
			//Atributos juntos	
			$this->id_produto = $id < 1 ? "Erro ao encontrar produto" : $id;
			$this->descricao = $desc == "" ? "Erro ao encontrar descrição" : $desc;
			$this->qtdeComprada = $qtde < 0 ? 0 : $qtde;
			$this->precoUnitario = $preco < 0 ? 0 : $preco;
			
    }

	//Set - Define uma informação no objeto
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

	//Get - verifica informação no objeto
    public function __get($atributo) {
        return $this->$atributo;
    }

	//pegaValorFatura
	public function totalFatura(){
		return $this->qtdeComprada * $this->precoUnitario;
	}

}