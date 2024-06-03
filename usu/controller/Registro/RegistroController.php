<?php
    include_once '../model/Registro/RegistroModel.php';
    class RegistroController{

        public function getRegister(){
            $obj=new RegistroModel;
            $sql="SELECT usu_correo FROM t_usuario";
            $tipos_documentos=$obj->consult($sql);
            include_once '../web/login.php';
            
        }
        public function postRegister(){
            
            $obj=new RegistroModel;
            $id=$obj->autoincrement("t_usuario","usu_id");
            $pnombre=$_POST['usu_nombre'];
             if(!isset($_POST['usu_nombre2'])){
                $snombre=null;
            }else 
            $snombre=$_POST['usu_nombre2'];
            $apellidos=$_POST['usu_apellido'];
            $ntel=$_POST['usu_ntelefono'];
            $correo=$_POST['usu_correo'];
            $contraseña=$_POST['usu_password'];              // se cambió usu_pass
            $confirma_contraseña=$_POST['usu_password2'];    // se cambió confirm
            if(filter_var($correo,FILTER_VALIDATE_EMAIL)){
                if($confirma_contraseña==$contraseña){
                    $sql="SELECT usu_correo FROM t_usuario WHERE usu_correo='$correo'";
                    $consulta=$obj->consult($sql);
                    if(mysqli_num_rows($consulta)>0){
                        echo "Ya existe un usuario registrado con este correo/documento";
                        $_SESSION['mensaje']="Ya existe un usuario registrado con este correo";
                    }else{
                        $encriptada=encrypt($contraseña);
                        $sql="INSERT INTO t_usuario VALUES ($id,'$pnombre','$snombre','$apellidos','$correo','$ntel','$encriptada',2,1)";
                        $registro=$obj->insert($sql);
                        if($registro){
                            echo "Se registró exitosamente";
                            $_SESSION['mensaje']="Se registró exitosamente";
                            redirect("login.php"); 
                        }else{
                            echo "Ocurró un error durante el registro, intenta nuevamente.";
                            $_SESSION['mensaje']="Ocurró un error durante el registro, intenta nuevamente.";
 
                             dd($sql); 
                        }
                    }
                }else{
                    echo "La contraseña es incorrecta";
                    $_SESSION['mensaje']="La contraseña es incorrecta";
                }
            }else{
                echo "Digite un correo válido";
                $_SESSION['mensaje']="Digite un correo válido";

                dd($_POST);
            }
        }
    }
?>