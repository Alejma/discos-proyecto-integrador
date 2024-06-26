<?php
    include_once '../model/Noticia/NoticiaModel.php';
    class NoticiaController{

        public function getModalInsert(){

            $obj = new NoticiaModel();

            $sql = "SELECT tn.cod_noticia, tn.titulo_noticia, tn.img_noticia, tn.desc_noticia , ttn.desc_tipo_noti , te.desc_estado FROM t_noticia tn, t_tiponoticia ttn, t_estado te";
            $noticias = $obj->consult($sql);

            $sql = "SELECT * FROM t_estado";
            $estados = $obj->consult($sql);

            $sql = "SELECT * FROM t_tiponoticia";
            $tipo_noticias = $obj->consult($sql);

            include_once  '../view/Noticia/ModalInsert.php';
        }

        public function postInsert(){
            $obj = new NoticiaModel();
       
            $desc_noticia=$_POST['desc_noticia'];
            $titulo_noticia = $_POST['titulo_noticia'];
            $fecha_noticia = hora();
            $img_noticia = $_FILES['img_noticia']['name'];
            $usu_id=$_SESSION['user_id']; 
            $cod_tipo_noti= $_POST['cod_tipo_noti'];
            $ruta = "../../usu/web/images/$img_noticia";
        
            move_uploaded_file($_FILES['img_noticia']['tmp_name'], $ruta);
            $id = $obj->autoincrement("t_noticia", "cod_noticia");

            $sql = "INSERT INTO t_noticia VALUES($id, '$desc_noticia', '$titulo_noticia', '$fecha_noticia', '$ruta' , $usu_id, $cod_tipo_noti, 1)";
       
            $ejecutar = $obj->update($sql);

            if ($ejecutar) {
                $_SESSION['mensaje'] = "Se registró la noticia <b>$titulo_noticia</b> exitosamente";
                redirect(getUrl("Noticia", "Noticia", "consult"));
            } else {
                echo "Ops, error al insertar la noticia";
            }
        }

        public function consult(){
            $obj = new NoticiaModel();

            $sql = "SELECT tn.cod_noticia, tn.titulo_noticia, tn.fecha_noticia,tn.img_noticia, tn.desc_noticia , ttn.desc_tipo_noti , te.desc_estado FROM t_noticia tn, t_tiponoticia ttn, t_estado te WHERE ttn.cod_tipo_noti =tn.cod_tipo_noti AND te.id_estado=tn.id_estado";
            $noticias = $obj->consult($sql);

            include_once '../view/Noticia/consult.php';
        }

        public function getModalDelete(){

            $obj = new NoticiaModel();

            $noticia_id=$_GET['id'];
            $sql="SELECT * FROM t_tiponoticia";
            $tipo_noticias=$obj->consult($sql);
            $sql = "SELECT * FROM t_noticia WHERE cod_noticia=$noticia_id";
            $noticias=$obj->consult($sql);

            include_once '../view/Noticia/ModalDelete.php';
        }

        

        public function postDelete(){
            $obj=new NoticiaModel();

            $cod_noticia=$_POST['cod_noticia'];
            $titulo_noticia=$_POST['titulo_noticia'];

            $sql="UPDATE t_noticia SET id_estado=2 WHERE cod_noticia=$cod_noticia";
            
            $ejecutar=$obj->update($sql);

            if ($ejecutar){
                $_SESSION['mensaje']="Se eliminó la noticia <b>$titulo_noticia</b> exitosamente";
                redirect(getUrl("Noticia","Noticia","consult"));
            } else {
                echo "Ops,error al eliminar una noticia";
            }
        }

        public function getView(){

            $obj = new NoticiaModel();

            $noticia_id=$_GET['id'];
            $sql="SELECT * FROM t_tiponoticia";
            $tipo_noticias=$obj->consult($sql);
            $sql = "SELECT * FROM t_noticia WHERE cod_noticia=$noticia_id";
            $noticias=$obj->consult($sql);

            include_once '../view/Noticia/View.php';
        }

        public function postView(){
            $obj=new NoticiaModel();

            $cod_noticia=$_POST['cod_noticia'];
            $titulo_noticia=$_POST['titulo_noticia'];

            $sql="UPDATE t_noticia SET id_estado=1 WHERE cod_noticia=$cod_noticia";
            
            $ejecutar=$obj->update($sql);

            if ($ejecutar){
                $_SESSION['mensaje']="Se habilito la noticia <b>$titulo_noticia</b> exitosamente";
                redirect(getUrl("Noticia","Noticia","consult"));
            } else {
                echo "Ops,error al eliminar una noticia";
            }
        }


        public function getModalUpdate(){

            $obj = new NoticiaModel();
          
            $noticia_id=$_GET['id'];
            $sql = "SELECT * FROM t_noticia WHERE cod_noticia=$noticia_id";
            $noticias = $obj->consult($sql);

            $sql = "SELECT * FROM t_estado";
            $estados = $obj->consult($sql);

            $sql = "SELECT * FROM t_tiponoticia";
            $tipo_noticias = $obj->consult($sql);

       

        include_once '../view/Noticia/ModalUpdate.php';
        }

        public function postUpdate(){
            $obj = new NoticiaModel();

            $cod_noticia = $_POST['cod_noticia'];
            $cod_tipo_noti = $_POST['cod_tipo_noti'];
            $desc_noticia=$_POST['desc_noticia'];
            $fecha_noticia =hora();
            $titulo_noticia=$_POST['titulo_noticia'];

            if (isset($_FILES['img_noticia']['name'])) {
                $img_noticia = $_FILES['img_noticia']['name'];
                $ruta="images/$img_noticia";
                move_uploaded_file($_FILES['img_noticia']['tmp_name'], $ruta);

                if (isset($_POST['img_vieja'])) {
                    $img_vieja = $_POST['img_vieja'];
                    unlink("$img_vieja");
                }
                $sql = "UPDATE t_noticia SET  titulo_noticia='$titulo_noticia', fecha_noticia='$fecha_noticia',desc_noticia='$desc_noticia',cod_tipo_noti=$cod_tipo_noti,
            img_noticia='$ruta' WHERE cod_noticia=$cod_noticia";
            } else {
                $sql = "UPDATE t_noticia SET titulo_noticia='$titulo_noticia', fecha_noticia='$fecha_noticia', desc_noticia='$desc_noticia', cod_tipo_noti=$cod_tipo_noti, 
                WHERE cod_noticia=$cod_noticia";
            }
            $ejecutar = $obj->consult($sql);

            if ($ejecutar) {
                $_SESSION['mensaje']="Se editó la noticia <b>$titulo_noticia</b> exitosamente";
                redirect(getUrl("Noticia", "Noticia", "consult"));
            } else {
                echo "Ops, ha ocurrido un error inesperado";
               /*  echo dd($sql); */
                
            
            }
        }


        public function More(){

            $obj=new NoticiaModel();
            
            $noticia_id=$_GET['id'];
            $sql = "SELECT titulo_noticia,desc_noticia FROM t_noticia WHERE cod_noticia=$noticia_id";
            $detalle = $obj->consult($sql);

            include_once '../view/Noticia/more.php';
            

        }

        
    }     


 
?>








