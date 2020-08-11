<?php 
    require_once('modelo/carrera_model.php');

    class carrera_controller{

        private $model_c;

        function __construct(){
            $this->model_c=new carrera_model();
        }

        function index(){
            $query =$this->model_c->get();

            include_once('vistas/header.php');
            include_once('vistas/index_carrera.php');
            include_once('vistas/footer.php');
        }
        function carrera(){
            $data=NULL;
            if(isset($_REQUEST['id'])){
                $data=$this->model_c->get_id($_REQUEST['id']);    
            }
            $query=$this->model_c->get();
            include_once('vistas/header.php');
            include_once('vistas/carrera.php');
            include_once('vistas/footer.php');
        }

        function get_datosC(){

            
            $data['id']=$_REQUEST['txt_id'];
            $data['nombre']=$_REQUEST['txt_nombre'];
            $data['id_universidad']=$_REQUEST['txt_id_universidad'];


            if ($_REQUEST['id']=="") {
                $this->model_c->create($data);
            }
            
            if($_REQUEST['id']!=""){
                $date=$_REQUEST['id'];
                $this->model_c->update($data,$date);
            }
            
            header("Location:index_carrera.php");

        }

        function confirmarDelete(){

            $data=NULL;

            if ($_REQUEST['id']!=0) {
               $data=$this->model_c->get_id($_REQUEST['id']);
            }

            if ($_REQUEST['id']==0) {
                $date['id']=$_REQUEST['txt_id'];
                $this->model_c->delete($date['id']);
                header("Location:index_carrera.php");
            }

            include_once('vistas/header.php');
            include_once('vistas/confirm_carrera.php');
            include_once('vistas/footer.php');
            


        }


    }
?>