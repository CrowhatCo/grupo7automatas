<?php
    if(isset($_GET["plantillaAutomatas"])){
        // output headers so that the file is downloaded rather than displayed
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=plantillaAutomatas.csv');

        // create a file pointer connected to the output stream
        $output = fopen('php://output', 'w');

        // output the column headings
        fputcsv($output, array('palabras'),',');
        fputcsv($output, array('acababaca'),',');
        fputcsv($output, array('10001010'),',');
        die();
    }
    if (!function_exists("dd")) {
        function dd($var){

            print "<pre>";
            if($var == "" || !$var){
                var_dump($var);
            }
            else{
                print_r($var);
            }
            print "</pre>";
        }
    }
    $arrLenguaje =array('a','b','c');
    //Paso 1
    $arrPasos[1]['a']=3;
    $arrPasos[1]['b']=4;
    $arrPasos[1]['c']=5;
    //Aceptación 0  = No, 1 = Si
    $arrPasos[1]['0']=0;

    //Paso 2
    $arrPasos[2]['a']=2;
    $arrPasos[2]['b']=2;
    $arrPasos[2]['c']=2;
    //Aceptación 0  = No, 1 = Si
    $arrPasos[2]['0']=1;

    //Paso 3
    $arrPasos[3]['a']=3;
    $arrPasos[3]['b']=6;
    $arrPasos[3]['c']=5;
    //Aceptación 0  = No, 1 = Si
    $arrPasos[3]['0']=0;

    //Paso 4
    $arrPasos[4]['a']=3;
    $arrPasos[4]['b']=4;
    $arrPasos[4]['c']=7;
    //Aceptación 0  = No, 1 = Si
    $arrPasos[4]['0']=0;

    //Paso 5
    $arrPasos[5]['a']=8;
    $arrPasos[5]['b']=4;
    $arrPasos[5]['c']=5;
    //Aceptación 0  = No, 1 = Si
    $arrPasos[5]['0']=0;

    //Paso 6
    $arrPasos[6]['a']=3;
    $arrPasos[6]['b']=4;
    $arrPasos[6]['c']=2;
    //Aceptación 0  = No, 1 = Si
    $arrPasos[6]['0']=0;

    //Paso 7
    $arrPasos[7]['a']=2;
    $arrPasos[7]['b']=4;
    $arrPasos[7]['c']=5;
    //Aceptación 0  = No, 1 = Si
    $arrPasos[7]['0']=0;
    //Paso 8
    $arrPasos[8]['a']=3;
    $arrPasos[8]['b']=2;
    $arrPasos[8]['c']=5;
    //Aceptación 0  = No, 1 = Si
    $arrPasos[8]['0']=0;
    $strWord = 'cab';
    $arrFina=array();
    $strPattern = "/(a|b|c)+$/";
    automata2($arrPasos,$strWord,1,$arrFinal, $strOriginal = $strWord,$strPattern);
    //$arrFinal[$strWord]=$arrFinal;
    //dd($arrFinal);
    function drawResult($arrFinal){
        global $arrPasos;
            ?>
            <li>
            <?php
                $strOrigen="";
                $i = 0;
                $len = count($arrFinal);
                $strColorNormal = '#339AF0';
                $strColorAccepted= '#48A868';
                $strColorNotcepted= '#F48225';
                foreach ($arrFinal as $intKey => $arrValue){
                    //dd($arrValue);
                    print ($strOrigen!=$arrValue['origen'])? "<span style='font-size: 0.5rem;'>{$arrValue['origen']}</span>":"<span style='font-size: 0.5rem;'>{ $strOrigen}</span>";
                    if ($i == $len - 1) {

                        if(!empty($arrPasos[$arrValue['destino']]['0'])){
                            $strColorNormal = $strColorAccepted;
                        }
                        else{
                            $strColorNormal = $strColorNotcepted;
                        }
                    }
                    ?>
                    <span class="fa-layers fa-fw fa-2x">
                        <i class="fas fa-long-arrow-alt-right fa"></i>
                        <span class="fa-layers-counter fa-layers-bottom-right" style="background:<?= $strColorNormal ?>; font-size: 3rem; text-align: center"><?=  $arrValue['cadena'] ?></span>
                    </span>
                    <?php
                    $strOrigen = $arrValue['origen'];
                    $i++;
                }
            ?>
            </li>
        <?php
    }
    drawResult($arrFinal[$strWord]);
    function automata2($arrPasos, $strWord, $intPasoOrigen = 1, &$arrFinal=array(), $strOriginal, $strPattern){
        global $arrPasos;
        if($intPasoOrigen ==1){
            $strOriginal = $strWord;
        }
        $intLen = strlen($strWord);
        //$intKey = ($intLen+1) - $intLen;
        //Valido que sea parte de mi alfabeto
        if(preg_match($strPattern, $strWord)) {
            //$str = $strWord;
            $arrFinal[$strOriginal][$intLen]['origen'] = $intPasoOrigen;
            $arrFinal[$strOriginal][$intLen]['destino'] = $arrPasos[$intPasoOrigen][$strWord[0]];
            $arrFinal[$strOriginal][$intLen]['cadena'] = $strWord[0];
            //dd($arrFinal);
            $str1 = substr($strWord, 1);
            if(strlen($strWord)>1){
                automata2($arrPasos,$str1,$arrPasos[$intPasoOrigen][$strWord[0]],$arrFinal,$strOriginal,$strPattern);
            }
            else{
                return $arrFinal;
            }
        }

    }
