<?php
class homeController extends Controller
{
    public function index()
    {
        $dados = array();
        
        $tarefas = new Tarefas();
        $dados['tarefas'] = $tarefas->listar();
        
        $this->loadTemplate('home',$dados);
    }
    
    public function teste($param1 = 0, $param2 = 0)
    {
        echo "homeContoller::teste -> param1:".$param1." - param2:".$param2;
    }
}
?>