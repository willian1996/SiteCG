<?php
require_once 'config.class.php';


class Podcast extends Conexao{

    /*
    * MÉTODO PARA LISTAR OS 15 ULTIMOS PODCASTS   
    * @return DADOS VINDO DO BANCO
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    public function getLista(){
        $sql = "SELECT * FROM neoPodcasts ORDER BY podcastDataHora DESC LIMIT 15";
        $sql = $this->pdo->query($sql);
        
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        }else{
            return array();
        }
    }
    
    
    /*
    * MÉTODO PARA LISTAR INFORMAÇÕES DO PODCAST   
    * @param IDENTIFICADOR
    * @return DADOS VINDO DO BANCO
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    public function getPodcastItem($id){
        $id = $this->filtraEntrada($id);
        
        $sql = "SELECT * FROM neoPodcasts WHERE podcastID = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            return $sql->fetch();
        }else{
            return array();
        } 
    }
    
    /*
    * MÉTODO PARA CADASTRAR PODCAST NO BANCO DE DADOS
    * @param DADOS
    * @return STATUS TRUE OU FALSE DO INSERT
    * @author WILLIAN <williansalesgabriel@hotmail.com>
    */
    public function createPod($dados){
        $podcastTitulo = $this->filtraEntrada($dados['podcastTitulo']);
        $podcastDescricao = addslashes($dados['podcastDescricao']);
        $podcastManchete = $this->filtraEntrada($dados['podcastManchete']);
        $podcastURL = $this->filtraEntrada($dados['podcastURL']);
        $podcastDataHora = $this->dataAtual();

        $sql = "INSERT INTO neopodcasts (podcastTitulo, podcastDescricao, podcastManchete, podcastURL, podcastDataHora)
        VALUES (:podcastTitulo, :podcastDescricao, :podcastManchete, :podcastURL, :podcastDataHora)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":podcastTitulo", $podcastTitulo);
        $sql->bindValue(":podcastDescricao", $podcastDescricao);
        $sql->bindValue(":podcastManchete", $podcastManchete);
        $sql->bindValue(":podcastURL", $podcastURL);
        $sql->bindValue(":podcastDataHora", $podcastDataHora);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }









}
