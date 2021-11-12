<?php
    // echo 'Un texto de una linea
    // varias lineas
    // comilla simple\' backslash \\continuar con mas texto';

    // $name='italo';
    // echo "mi nombre es $name <br>";


    // $courses=['backend'=>'PHP'];




    // class User {
    //     public $name ='gustavo';
    // }
    // $User=new User;

    // //echo "$User->name quiere aprender $courses['backend']";
    
    // $teacher='italo';
    // $italo= 'Profesor de PHP';
    // echo "$teacher es {$teacher}";


    function getTeacher(){
        return  'teacher';
    }

    $teacher ='italo';


    echo "{${getTeacher()}} enseña php";