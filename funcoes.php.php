<?php

function formataData($data)
{
    $data = $_POST["data"];
    // $data = str_replace('/', '-', $data);
    $data = date('d-m-Y', strtotime($data));

    $data = explode("-", $data);
    // var_dump($data);
    return $data;
}


function signo($dia, $mes)
{
    if ($mes == "3"  && $dia >= "20") {
        $signo = "Áries";
    }   //Áries       20/03 a 20/04
    elseif ($mes == "4"  && $dia <= "20") {
        $signo = "Áries";
    }   //Áries       20/03 a 20/04
    elseif ($mes == "4"  && $dia >= "21") {
        $signo = "Touro";
    }   //Touro       21/04 a 20/05
    elseif ($mes == "5"  && $dia <= "20") {
        $signo = "Touro";
    }   //Touro       21/04 a 20/05
    elseif ($mes == "5"  && $dia >= "21") {
        $signo = "Gêmeos";
    }   //Gêmeos      21/05 a 20/06
    elseif ($mes == "6"  && $dia <= "20") {
        $signo = "Gêmeos";
    }   //Gêmeos      21/05 a 20/06
    elseif ($mes == "6"  && $dia >= "21") {
        $signo = "Câncer";
    }   //Câncer      21/06 a 21/07
    elseif ($mes == "7"  && $dia <= "21") {
        $signo = "Câncer";
    }   //Câncer      21/06 a 21/07
    elseif ($mes == "7"  && $dia >= "22") {
        $signo = "Leão";
    }   //Leão        22/07 a 22/08
    elseif ($mes == "8"  && $dia <= "22") {
        $signo = "Leão";
    }   //Leão        22/07 a 22/08
    elseif ($mes == "8"  && $dia >= "23") {
        $signo = "Virgem";
    }   //Virgem      23/08 a 22/09
    elseif ($mes == "9"  && $dia <= "22") {
        $signo = "Virgem";
    }   //Virgem      23/08 a 22/09
    elseif ($mes == "9"  && $dia >= "23") {
        $signo = "Libra";
    }   //Libra       23/09 a 22/10
    elseif ($mes == "10" && $dia <= "22") {
        $signo = "Libra";
    }   //Libra       23/09 a 22/10
    elseif ($mes == "10" && $dia >= "23") {
        $signo = "Escorpião";
    }   //Escorpião   23/10 a 21/11
    elseif ($mes == "11" && $dia <= "21") {
        $signo = "Escorpião";
    }   //Escorpião   23/10 a 21/11
    elseif ($mes == "11" && $dia >= "22") {
        $signo = "Sagitário";
    }   //Sagitário   22/11 a 21/12
    elseif ($mes == "12" && $dia <= "21") {
        $signo = "Sagitário";
    }   //Sagitário   22/11 a 21/12
    elseif ($mes == "12" && $dia >= "22") {
        $signo = "Capricórnio";
    }   //Capricórnio 22/12 a 21/01
    elseif ($mes == "1"  && $dia <= "21") {
        $signo = "Capricórnio";
    }   //Capricórnio 22/12 a 21/01
    elseif ($mes == "1"  && $dia >= "21") {
        $signo = "Aquário";
    }   //Aquário     21/01 a 18/02
    elseif ($mes == "2"  && $dia <= "18") {
        $signo = "Aquário";
    }   //Aquário     21/01 a 18/02    
    elseif ($mes == "2"  && $dia >= "19") {
        $signo = "Peixes";
    }   //Peixes      19/02 a 19/03
    elseif ($mes == "3"  && $dia <= "19") {
        $signo = "Peixes";
    }   //Peixes      19/02 a 19/03
    else {
        $signo = "Não Encontrado";
    }
    return $signo;
}

function lerXml($signo)
{
    // echo $signo . "<br><br>";
    // die();
    $xml = simplexml_load_file('signo.xml');

    $dtInicio = "";
    $dtFim = "";
    // $signo = "";
    $descricao = "";

    // echo $signo;
    echo "<br><br>";
    foreach ($xml as $key => $value) { // pega o intervalo de datas dos possíveis signos

        $dtInicio = $value->dataInicio;
        $dtFim = $value->dataFim;
        $signoXml = $value->signoNome;
        $descricao = $value->descricao;

        // echo $signoXml . "<br><br>";
        if ($signo == $signoXml) {
            
            echo "Signo: " . $signoXml . "<br><br>";
            echo "Data: " . $dtInicio . " - " . $dtFim . "<br><br>";
            echo "Descrição: " . $descricao . "<br><br>";
            return;
        }
    }
}