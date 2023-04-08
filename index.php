<?php
    $broadcastersWithFiltered = array(
        0 => array(
            "photoURL" => "http://localhost/assets/images/broadcasters/osman.jpg",
            "fullName" => "Osman Can CEYLAN",
            "job" => "Podcast & Sohbet"
        )
    );

    $broadcasters = array(
        0 => array(
            "photoURL" => "http://localhost/assets/images/broadcasters/fab.png",
            "fullName" => "Furkan Atakan BOZKURT",
            "job" => "Eğitim & Oyun"
        ),
        1 => array(
            "photoURL" => "http://localhost/assets/images/broadcasters/osman.jpg",
            "fullName" => "Osman Can CEYLAN",
            "job" => "Podcast & Sohbet"
        ),
        2 => array(
            "photoURL" => "https://media.licdn.com/dms/image/C4E03AQF5iwXAJyuj-Q/profile-displayphoto-shrink_800_800/0/1629580585845?e=1686182400&v=beta&t=ACU_JvOi5irzIki5CA_CMseoanDF8jScHLyWk_0JoQg",
            "fullName" => "Mahmut PEKER",
            "job" => "Dislike atmak."
        )
    );

    header("Access-Control-Allow-Origin: *");

    $response = $broadcasters;

    if(isset($_GET["isFiltered"])) {
        $response = $broadcastersWithFiltered;
    }

    echo json_encode($response, JSON_UNESCAPED_SLASHES);
?>
