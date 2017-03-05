<?php
session_start();
require_once 'libs/PHPMailerAutoload.php';
$errors =[];

if(isset($_POST['name'],$_POST['email'],$_POST['nachricht'])){

    $fields=[
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'nachricht'=>$_POST['nachricht']
    ];

    foreach($fields as $field=>$data){
        if(empty($data)){
            $errors[]='Bitte füllen Sie das '.$field . ' aus.';
        }
    }

    if(empty($errors)){
        $m=new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth=true;
        $m->Host='smtp.gmail.com';
        $m->Username='sf4projekt@gmail.com';
        $m->Password='PW1234';//Aus Sicherheitsgründen geändert.
        $m->SMTPSecure='ssl';
        $m->Port=465;
        $m->isHTML();
        $m->Subject ='Aus dem Kontaktformular';
        $m->Body='Von:'.$fields['name'].'('.$fields['email'].')<p>'.$fields['nachricht'].'</p>';
        $m->FromName='Kontakt';
        $m->AddAddress('sf4projekt@gmail.com','TischlereiMustermann');

        if ($m->send()) {
            header('Location:kontaktformular.php?confirm=1');
            die();
        }else{
            $errors[]="Die Nachricht konnte nicht versandt werden; versuchen Sie es bitte später erneut.";
        }
    }

}else{
    $errors[]= 'Etwas ist schief gelaufen. Versuchen Sie es bitte erneut.';
}


$_SESSION['errors']=$errors;
$_SESSION['fields']=$fields;
header('Location: kontaktformular.php');
?>
