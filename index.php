<?php
        require './classes/student.class.php' ;
         $student = new Student () ; 
         
         $student -> name = "Steve" ; 
         $student -> sex = "Male" ; 

         echo "Name : " .$student-> name ;
         echo "<br>" ;
         echo "Sex:  " .$student-> sex ;
         echo "Start Date " .$student -> starDate ;
