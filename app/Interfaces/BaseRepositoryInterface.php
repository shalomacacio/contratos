<?php


interface BaseRepositoryInterface 
{


    public function buscaTodos();
    public function buscaPorId($id);
    public function adicionar($request);
    public function editar($request, $id);
    public function deletar();
    

}
