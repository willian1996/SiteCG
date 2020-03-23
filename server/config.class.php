<?php
define("ENVIRONMENT", "development"); //versão para maquina local
#define("ENVIRONMENT", "production"); //versão para hospedar

abstract class Conexao{    
    protected $pdo;
    
    
    public function __construct(){
        if(ENVIRONMENT == 'development'){
            define("BASE_URL", "http://localhost/SiteCG/");
            $config['dbname'] = 'cgantigo';
            $config['host'] = 'localhost';
            $config['dbuser'] = 'root';
            $config['dbpass'] = '';
        }else{
            define("BASE_URL", "http://clubedosgenerais.mdvirtualsolution.com.br/");
            $config['dbname'] = 'pensebicho3';
            $config['host'] = 'mysql1.pensebicho.com.br';
            $config['dbuser'] = 'pensebicho3';
            $config['dbpass'] = 'Me109_G6';
        }
        try{
            $this->pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
            $this->setStatus("Conectado!");
        }catch(PDOException $e){
            $this->setStatus("Não conectado!");
        }
        
    }
    /*
    * MÉTODO PARA PARA RETORNAR O STATUS DA CONEXAO COM BANCO DE DADOS 
    * @return RETORNA O STATUS DA CONEXAO 
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    public function getStatus(){
        return $this->status;
    }
    /*
    * MÉTODO PARA PARA SETAR O STATUS DA CONEXAO COM BANCO DE DADOS 
    * @param RECEBE O STATUS 
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    public function setStatus($s){
        $this->status = $s;
    }
    
    /*
    * MÉTODO PARA PROTEJER O BANCO DE DADOS DE SQL INJECTION   
    * @param DADO A FILTRAR  
    * @return DADO FILTRADO 
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    protected function filtraEntrada($campo){
        // remove espaços no início e no final
        $campo = trim($campo); 
        // remove tags html
        $campo = strip_tags($campo); 
        // adiciona caractere de escape nas aspas e apostófros
        $campo = addslashes($campo); 
        return $campo;
    }
    
    /*
    * MÉTODO PARA PEGAR A DATA E HORA ATUAL
    * @return DATA E HORA ATUAL EM FORMATO PARA BANCO DE DADOS
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    protected function dataAtual(){
        date_default_timezone_set('America/Sao_Paulo');
        return date("Y-m-d H:i:s");
    }

    
    
}/*FIM CLASSE Conexao*/
