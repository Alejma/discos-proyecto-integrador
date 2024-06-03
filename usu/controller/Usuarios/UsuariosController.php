<?php
    include_once '../model/Usuarios/UsuariosModel.php';
    class UsuariosController{

        public function profile(){
            $obj=new UsuariosModel;
            $id=$_SESSION['user_id'];
            $sql="SELECT u.usu_nombre, u.usu_nombre2, u.usu_id, u.usu_apellido,  r.desc_rol, u.usu_ntelefono, u.usu_correo FROM t_usuario u,  t_rol r WHERE usu_id=$id  AND r.cod_rol=u.cod_rol ";
            $usuario=$obj->consult($sql);
            include_once '../view/usuarios/modalProfile.php';
        }

        public function getUpdateModal(){
            $obj=new UsuariosModel;
            $id=$_GET['id'];
            $sql="SELECT u.usu_nombre, u.usu_nombre2, u.usu_id, u.usu_apellido, u.usu_ntelefono, u.usu_correo FROM t_usuario u, t_tipodocumento td, WHERE usu_id=$id  AND r.cod_rol=u.cod_rol ";
            $usuarios=$obj->consult($sql);
            include_once '../view/usuarios/modalUpdate.php';
        }
        public function postUpdateProfile(){
            $obj=new UsuariosModel;
            $id=$_SESSION['user_id'];
            $nombre1=$_GET['usu_nombre'];
            $nombre2=$_GET['usu_nombre2'];
            $apellido=$_GET['usu_apellido'];
            $ntel=$_GET['usu_ntelefono'];
            $correo=$_POST['usu_correo'];
            $sql="SELECT usu_id, usu_correo FROM t_usuario WHERE usu_id=$id";
            $validar=$obj->consult($sql);
            if($validar){
                $datos=mysqli_fetch_array($validar);
                if($correo==$datos['usu_correo'] && $id=$datos['usu_id']){
                    $sql="UPDATE t_usuario SET usu_nombre='$nombre1',usu_nombre2='$nombre2',usu_apellido='$apellido',usu_ntelefono='$ntel' WHERE usu_id=$id";
                    $actualizar=$obj->update($sql);
                    if($actualizar){
                        
                    }else{
                        echo "Error al actualizar";
                        dd($_GET);
                    }
                }else{
                    $sql="SELECT usu_id FROM t_usuario WHERE usu_correo=$correo";
                    $validación=$obj->consult($sql);
                    if($validación){
                        echo "Duplicidad";
                    }
                }
            }
    }
}
?>