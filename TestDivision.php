<?php
require ("division.php");
use PHPUnit\Framework\TestCase;


class TestDivision extends TestCase
{

     function testOKDivision(){

        $resultat = division(10,5);

        $this->assertEquals($resultat,3, "Le resultat devrait etre 2");
       
    }
//fbfdfdf

    
     /*function testdiviserPar0 (){
        try{
            $resultat = division(10,0);
            echo "ça aurait du planter";
        }
        
        catch(Exception $e){
            if($e != "Division par 0 impossible")
            echo "Pas la bonne erreur";
        }
    }*/
    

}

?>
