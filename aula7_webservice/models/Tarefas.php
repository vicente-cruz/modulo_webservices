<?php
class Tarefas extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function listar()
    {
        $tarefas = array();
        
        $query = $this->db->query("SELECT * FROM tarefas");
        if ($query->rowCount() > 0) {
            $tarefas = $query->fetchAll();
        }
        
        return $tarefas;
    }
    
    public function adicionar($titulo)
    {
        $this->db->query("INSERT INTO tarefas(titulo) VALUES ('".$titulo."')");
    }
    
    public function excluir($id)
    {
        $this->db->query("DELETE FROM tarefas WHERE id = '".$id."'");
    }
    
    public function atualizar($id, $status)
    {
        $this->db->query(
                " UPDATE "
                . "tarefas"
                . " SET "
                . "status = '".$status."'"
                . " WHERE "
                . "id = '".$id."'"
            );
    }
}
?>