<?php
// $id = ($_POST['idofrow']);
// echo $id;
// $id+=200;
// print_r($id);
session_start();
// echo $_POST['fruit'];

class remote{
    public function sound(){
        // $sound=$_POST['sound'];
        // $sound =12131313;
        if($_POST['idofrow'] != NULL){
            $id = ($_POST['idofrow']);
            if($id==20){
                $id=0;
            }
            $sound =$id+1;
            $_SESSION['soundNo'] = $sound;
            echo $sound;
            // print_r(['firstName'=>'Mohan', 'lastName'=>'Prajapati']);

        }

        
    }
    public function brightness(){
        if($_POST['brightnessNoKey'] != NULL){
            $brightnessNo =$_POST['brightnessNoKey'];
            if($brightnessNo==20){
                return;
            }
            else{
                $brightnessNo = $brightnessNo +1;
                $_SESSION['brightnessNo'] = $brightnessNo;
                echo $brightnessNo;
            }
        }
    }
    public function contrast(){
        if($_POST['contrastNoKey'] != NULL){
            $contrastNo =$_POST['contrastNoKey'];
            if($contrastNo==20){
                return;
            }
            else{
                $contrastNo = $contrastNo +1;
                $_SESSION['contrastNo'] = $contrastNo;
                echo $contrastNo;
            }
        }
    }
}

$obj = new remote();
$obj->sound();

$obj->brightness();

$obj->contrast();

?>