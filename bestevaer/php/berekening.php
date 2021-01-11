<?php
    $lading = $_GET['ingenomenLading'];
    $beingLoaded = $_GET['hoeveelGeladen'];
    $seasons = $_GET['seizoenen'];
    $waterType = $_GET['waterType'];
    $shipType = $_GET['shipType'];


    $ships = array(
        array("shipName" => "Bestevaer", "DWT" => "Unknown", "GRT" => "Unknown", "shipType" => "Cargo", "size" => "86 x 10", "MSI" => "244183042", "trackID" => "https://www.myshiptracking.com/vessels/bestevaer-mmsi-244183042-imo-0"),
        array("shipName" => "Trapezitza", "DWT" => "21454", "GRT" => "13965", "shipType" => "Cargo", "size" => "169 x 25", "MMSI" => "249637000", "trackID" => "https://www.myshiptracking.com/vessels/trapezitza-mmsi-249637000-imo-9145231"),
        array("shipName" => "JONNI RITSCHER", "DWT" => "22243", "GRT" => "17360", "shipType" => "Cargo", "size" => "179 x 28", "MMSI" => "636091136", "trackID" => "https://www.myshiptracking.com/vessels/jonni-ritscher-mmsi-636091136-imo-0"),
        array("shipName" => "WILSON FINNFJORD", "DWT" => "4518", "GRT" => "3561", "shipType" => "Cargo", "size" => "90 x 15", "MMSI" => "314398000", "trackID" => "https://www.myshiptracking.com/vessels/wilson-finnfjord-mmsi-314398000-imo-9491769"),
        array("shipName" => "MARY MAERSK", "DWT" => "194252", "GRT" => "194849", "shipType" => "Cargo", "size" => "399 x 60", "MMSI" => "219018692", "trackID" => "https://www.myshiptracking.com/vessels/mary-maersk-mmsi-219018692-imo-9619921"),
        array("shipName" => "CMA CGM TURQUOISE", "DWT" => "52513", "GRT" => "40560", "shipType" => "Cargo", "size" => "258 x 32", "MMSI" => "636014059", "trackID" => "https://www.myshiptracking.com/vessels/cma-cgm-turquoise-mmsi-636014059-imo-9386471"),
    );

    

    $data = array("lading" => $lading, "beingLoaded" => $beingLoaded, "season" => $seasons, "waterType" => $waterType, "shipType" => $shipType, "ships" => $ships);
    echo json_encode($data);
?>