<?php
class IndexController extends core\MVC\Action {

    public function IndexAction() {
        $this->setView("portada");
        $this->renderView();
        
    }

    public function HistoriaAction() {
        $this->setView("historia");
        $this->renderView();
    }
    public function ProductosAction() {
        $model = $this->getModel('jugadores', 'categorias');
        $data = $model->select();
        echo header('Access-Control-Allow-Origin: *');
        echo \json_encode($data);
    }
    public function ImagenesAction() {
        $model = $this->getModel('jugadores', 'imagenes');
        $data = $model->select();
        echo header('Access-Control-Allow-Origin: *');
        echo \json_encode($data);
    }

    public function JugadoresAction() {
        $model = $this->getModel('jugadores', 'jugadores');
        $data = $model->select('codigo, nombre, foto', 'Nombre_equipo="Lakers"');
        $this->setView("jugadores");
        $this->renderView($data);
    }

    public function JugadoresEquipoAction() {
        $equipo = $this->getParam("idEquipo");
        $model = $this->getModel('jugadores', 'jugadores');
        $data = $model->select('codigo, nombre, foto', 'Nombre_equipo="' . $equipo .  '"');
        echo \json_encode($data);
    }

    public function PartidosAction() {
        $this->setView("partidos");
        $this->renderView();
    }
}