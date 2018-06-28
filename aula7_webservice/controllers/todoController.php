<?php
class todoController extends Controller
{
    public function index()
    {
        $dados = array();
    }
    
    public function listar()
    {
        $dados = array();
        
        $tarefa = new Tarefas();
        $dados = $tarefa->listar();
        
        header("Content-Type: application/json");
        echo json_encode($dados);
    }
    
    public function adicionar()
    {
        $titulo = addslashes(
                filter_input(INPUT_POST,"titulo", FILTER_SANITIZE_SPECIAL_CHARS)
            );
        if ( ! empty($titulo)) {
            $tarefa = new Tarefas();
            $tarefa->adicionar($titulo);
        }
    }
    
    public function excluir()
    {
        $id = addslashes(filter_input(INPUT_POST,'id'));
        if ( ! empty($id)) {
            $tarefa = new Tarefas();
            $tarefa->excluir($id);
        }
    }
    
    public function atualizar()
    {
        $dados = array();
        
        $id = addslashes(filter_input(INPUT_POST,'id'));
        if ( ! empty($id)) {
            $status = addslashes(filter_input(INPUT_POST,'status'));
            
            $tarefa = new Tarefas();
            $tarefa->atualizar($id,$status);
        }
    }
}
?>