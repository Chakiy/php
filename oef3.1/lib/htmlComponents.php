<?php

function printHead( $title = "City's"){  // standaart title


    // inlezen van template
   $template = "./templates/head.html";
   $html = file_get_contents($template);

   //merge
   $html = str_replace("@TITLE@", $title,$html );

   print $html;

}



function printTitleStad($template = "head.html", $data){

    // inlezen van template
    $template = "./templates/" .$template;
    $html = file_get_contents($template);

    foreach ($data as $row ) {

        foreach ($row as $key => $value) { // array_keys($row) as $field -> slaat alle keys van ARRAY(uit databank in $row)
            // vb img_id, img_title ....
            $html = str_replace("@TITLE@", $row['img_place'], $html);
        }
    }
    print $html;
}





function printJumbo($jumboTitle = "hello", $jumboSubTitle = "", $template = "jumbo.html"){ // replacing with array


    // inlezen van template
    $template = "./templates/" .$template;
    $html = file_get_contents($template);

    //array replace
    $search = array("@jumboTitle@", "@jumboSubTitle@");
    $replace = array($jumboTitle, $jumboSubTitle);

    //merge
    $html = str_replace($search, $replace , $html );

    print $html;

}



function printJumboStad($template = "jumbo.html", $data){ // replacing with array


    // inlezen van template
    $template = "./templates/" .$template;
    $html = file_get_contents($template);

    //array replace
    $search = array("@jumboTitle@", "@jumboSubTitle@");


    foreach ($data as $row ) {

        foreach ($row as $key => $value) { // array_keys($row) as $field -> slaat alle keys van ARRAY(uit databank in $row)
            // vb img_id, img_title ....
            $replace = array($row['img_place'], $row['img_place_info']);
            $html = str_replace($search, $replace, $html);
        }
    }
    print $html;
}



function margeColumnWithData($template, $data){

    $returnvalue = "";
    // inlezen van template
    $template = "./templates/" .$template;
    $html = file_get_contents($template);

    foreach ($data as $row ) {

        $output = $html;
        foreach ($row as $key => $value) { // array_keys($row) as $field -> slaat alle keys van ARRAY(uit databank in $row)
                                            // vb img_id, img_title ....
            $output = str_replace("@$key@", $value, $output);

        }
        $returnvalue .= $output;

    }

    return $returnvalue;
}


function margeStadForm($template = "stad_form.html", $data){
    // inlezen van template
    $template = "./templates/" .$template;
    $html = file_get_contents($template);

    //zoek
    $search = array("@img_filename@", "@img_id@");

    foreach ($data as $row ) {

        foreach ($row as $key => $value) { // array_keys($row) as $field -> slaat alle keys van ARRAY(uit databank in $row)
            // vb img_id, img_title ....
            $replace = array($row['img_filename'], $row['img_id']);
            $html = str_replace($search, $replace, $html);
        }
    }
    print $html;


//    $html = str_replace(, $title,$html );

//    print $html;
}

