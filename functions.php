<?php
    //debug function
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
    //Descargar para cssv
    if(isset($_GET["plantillaAutomatas"])){
        // output headers so that the file is downloaded rather than displayed
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=plantillaAutomatas.csv');

        // create a file pointer connected to the output stream
        $output = fopen('php://output', 'w');

        // output the column headings
        fputcsv($output, array('acababaca'),',');
        fputcsv($output, array('babacaabca'),',');
        fputcsv($output, array('1001110000110'),',');
        fputcsv($output, array('1001001'),',');
        die();
    }
    /*********AUTOMATA1**********************/
    //Paso 1
    $arrPasos1[1]['0']=2;
    $arrPasos1[1]['1']=3;
    //Paso 2
    $arrPasos1[2]['0']=2;
    $arrPasos1[2]['1']=3;
    $arrPasos1[2]['FINAL']=1;
    //Paso 3
    $arrPasos1[3]['0']=2;
    $arrPasos1[3]['1']=4;
    $arrPasos1[3]['FINAL']=1;

    //Paso 4
    $arrPasos1[4]['0']=4;
    $arrPasos1[4]['1']=4;


    /*********AUTOMATA2**********************/


    //Paso 1
    $arrPasos2[1]['a']=3;
    $arrPasos2[1]['b']=4;
    $arrPasos2[1]['c']=5;

    //Paso 2
    $arrPasos2[2]['a']=2;
    $arrPasos2[2]['b']=2;
    $arrPasos2[2]['c']=2;
    //Aceptación 0  = No, 1 = Si
    $arrPasos2[2]['FINAL']=1;

    //Paso 3
    $arrPasos2[3]['a']=3;
    $arrPasos2[3]['b']=6;
    $arrPasos2[3]['c']=5;

    //Paso 4
    $arrPasos2[4]['a']=3;
    $arrPasos2[4]['b']=4;
    $arrPasos2[4]['c']=7;

    //Paso 5
    $arrPasos2[5]['a']=8;
    $arrPasos2[5]['b']=4;
    $arrPasos2[5]['c']=5;

    //Paso 6
    $arrPasos2[6]['a']=3;
    $arrPasos2[6]['b']=4;
    $arrPasos2[6]['c']=2;

    //Paso 7
    $arrPasos2[7]['a']=2;
    $arrPasos2[7]['b']=4;
    $arrPasos2[7]['c']=5;
    //Paso 8
    $arrPasos2[8]['a']=3;
    $arrPasos2[8]['b']=2;
    $arrPasos2[8]['c']=5;


    if(isset($_GET['operar'])){
        $intOperacion = intval($_GET['operar']);
        $strTerm = $_GET['term']??false;
        //$arrLenguaje2 =array('a','b','c');

        //$strWord = 'cab';
        $arrFinal = array();
        $strPattern2 = "/(a|b|c)+$/";
        $strPattern1 = "/(0|1)+$/";
        digestData($intOperacion,$strTerm);
        die();

    }
    function digestData($operation, $term){
        global ${"arrPasos$operation"}, ${"strPattern$operation"};
        $arrErrors = array();
        $arrFiles = $_FILES[0]??false;
        $row_number = 0;
        $rows = array();
        $boolError = false;
        $arrAnalisis = array();
        if(isset($arrFiles["error"]) && $arrFiles["error"] == 0) {
            $extension = pathinfo($arrFiles['name'], PATHINFO_EXTENSION);
            //dd($arrFiles);
            if (!empty($extension) && $extension == 'csv') {
                if (($objHandle = fopen($arrFiles["tmp_name"], "r")) != false) {
                    $headers = fgetcsv($objHandle, $arrFiles["size"], ',');
                    $rows[] = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $headers[0]);
                    automata(${"arrPasos$operation"},$rows[0],1,$arrAnalisis,$rows[0],${"strPattern$operation"});
                    while ($csv_row = fgetcsv($objHandle, $arrFiles["size"], ',')) {

                        // Increment Row Number
                        $row_number++;
                        //dd($csv_row);
                        //$csv_row[0] = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $csv_row[0]);
                        // Optional
                        $encoded_row = array_map('utf8_encode', $csv_row);

                        // Check for discrepancies between the amount of headers and the amount of rows
                        if (count($encoded_row) !== count($headers)) {
                            return 'Row ' . $row_number . '\'s length does not match the header length: ' . implode(', ', $encoded_row);
                        } else {
                            $encoded_row[0] = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $encoded_row[0]);
                            $rows[] = $encoded_row[0];
                            automata(${"arrPasos$operation"},$encoded_row[0],1,$arrAnalisis,$encoded_row[0],${"strPattern$operation"});
                        }

                        // Optional: limit how many rows can be imported at a time.
                        //if( $row_number === 5 ) break;
                    }
                    //$output['headers'] = $headers;
                    $output['rows'] = $rows;
                } // End if empty file

                //return $output;
            }
            elseif(!empty($extension) && $extension == 'txt'){
                $lines = file($arrFiles["tmp_name"]);
                if(count($lines) == 1){
                    $lines = array_map('trim', explode(',', $lines[0]));
                }
                foreach ($lines as $value){
                    $value = trim($value);
                    automata(${"arrPasos$operation"},$value,1,$arrAnalisis,$value,${"strPattern$operation"});
                }
                //dd($lines);
            }

        }
        elseif(!empty($term)){
            $strTerm = trim($term);
            automata(${"arrPasos$operation"},$strTerm,1,$arrAnalisis,$strTerm,${"strPattern$operation"});
        }
        else {
            $arrErrors[] = "AL LEER EL FICHERO DE CARGADO";
            $boolError = true;
        }
        if(empty($arrErrors)){
            $arrErrors[]="No se encontraron errores!";
        }
        $arrReturn['errores']= $arrErrors;
        $arrReturn['status']= ($boolError)?"fail":"ok";
        ?>
        <ul class="list-group">
        <?php
            foreach ($arrAnalisis as $strOriginal=> $value){
                drawResult($value, $strOriginal,$operation);
            }
        ?>
        </ul>
        <?php
    }

    function drawResult($arrFinal, $strOriginal, $intOperation){
        global ${"arrPasos$intOperation"}, ${"strPattern$intOperation"};
            ?>
            <li class="list-group-item">
                <?=$strOriginal.'</br>'?>
            <?php
                $strOrigen="";
                $i = 0;
                $len = count($arrFinal);
                $strColorNormal = '#339AF0';
                $strColorAccepted= '#48A868';
                $strColorNotcepted= '#F48225';
                $strColorBad= '#E53935';
                $boolFinal = false;
                foreach ($arrFinal as $intKey => $arrValue){
                    //dd($arrValue);
                    print ($strOrigen!=$arrValue['origen'])? "<span style='font-size: 0.5rem; padding: 0px;'>{$arrValue['origen']} →</span>":"<span style='font-size: 0.5rem;padding: 0px;'>$strOrigen →</span>";
                    if ($i == $len - 1) {
                        $boolFinal = true;
                        if(!empty(${"arrPasos$intOperation"}[$arrValue['destino']]['FINAL'])){
                            $strColorNormal = $strColorAccepted;
                        }
                        else{
                            $strColorNormal = $strColorNotcepted;
                        }
                    }
                    if(empty($arrValue['origen'])){
                        $strColorNormal = $strColorBad;
                    }
                    ?>
                    <span class="fa-layers fa-fw ">
                        <i class="fas fa-caret-right"></i>
                        <span class="fa-layers-counter fa-layers-bottom-right" style="background:<?= $strColorNormal ?>; font-size: 3rem; text-align: center"><?=  $arrValue['cadena'] ?></span>
                    </span>
                    <?php
                    if($boolFinal) {
                        print "<span style='font-size: 0.5rem; padding: 0px;'>{$arrValue['destino']} </span>";
                    }
                    $strOrigen = $arrValue['origen'];
                    $i++;
                }
            ?>
            </li>
        <?php
    }

    function automata($arrPasos, $strWord, $intPasoOrigen = 1, &$arrFinal=array(), $strOriginal, $strPattern){

        if($intPasoOrigen ==1){
            $strOriginal = $strWord;
        }
        $intLen = strlen($strWord);
        //Valido que sea parte de mi alfabeto
        if(preg_match($strPattern, $strWord)) {
            $arrFinal[$strOriginal][$intLen]['origen'] = $intPasoOrigen;
            $arrFinal[$strOriginal][$intLen]['destino'] = $arrPasos[$intPasoOrigen][$strWord[0]];
            $arrFinal[$strOriginal][$intLen]['cadena'] = $strWord[0];
            $str1 = substr($strWord, 1);
            if(strlen($strWord)>1){
                automata($arrPasos,$str1,$arrPasos[$intPasoOrigen][$strWord[0]],$arrFinal,$strOriginal,$strPattern);
            }
            else{
                return $arrFinal;
            }
        }
        else{
            $boolIsset = isset($arrPasos[$intPasoOrigen][$strWord[0]])?true:false;
            $arrFinal[$strOriginal][$intLen]['origen'] = ($boolIsset)?$intPasoOrigen:false;
            $arrFinal[$strOriginal][$intLen]['destino'] = ($boolIsset)?$arrPasos[$intPasoOrigen][$strWord[0]]:false;
            $arrFinal[$strOriginal][$intLen]['cadena'] = $strWord[0];
            $str1 = substr($strWord, 1);
            if(strlen($strWord)>1){
                $intPasoOrigen = $arrPasos[$intPasoOrigen][$strWord[0]]??false;
                automata($arrPasos,$str1,$intPasoOrigen,$arrFinal,$strOriginal,$strPattern);
            }
            else{
                return $arrFinal;
            }
        }

    }

    function RemoveSpecialChar($str){
        $res = preg_replace('/[0-9\@\.\;\" "]+/', '', $str);
        return $res;
    }
