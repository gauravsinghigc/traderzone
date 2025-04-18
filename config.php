<?php
//check SSL is installed or not
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $link = "https";
} else {
    $link = "http";
}

// Here append the common URL characters.
$link .= "://";

//dir & domain setup
define("HOST", $HOST = $_SERVER['SERVER_NAME']);


define("LOCAL_HOST", [
    "127.0.0.1",
    "192.168.1.7",
    "::1",
    "localhost",
    "192.168.1.9",
    "192.168.43.14",
    "192.168.1.14",
    "192.168.1.10",
    "192.168.1.11",
    "192.168.1.5",
    "192.168.1.10",
    "192.168.1.15",
    "192.168.1.83",
    "192.168.1.18",
    "192.168.1.19",
    "192.168.1.8",
    "192.168.1.4",
    "192.168.1.3",
    "192.168.104.80",
    "192.168.1.6",
    "192.168.77.223"
]);

//filter domain from local or live server
if (in_array("" . HOST . "", LOCAL_HOST)) {
    define("DOMAIN", $link . HOST . "/traderzone");
} else {
    define("DOMAIN", $link . HOST);
}

//Need Full Urls
DEFINE("ASSETS_URL", DOMAIN . "/assets");
DEFINE("STORAGE_URL", DOMAIN . "/storage");
DEFINE("CONTROLLER", DOMAIN . "/controller");


DEFINE("WEBSITE_INFO", [
    "PRIMARY_INFO" => [
        "WEBSITE_NAME" => "Traderz Den",
        "TAGLINE" => "A World For Trading Education",
        "AUTHOR" => "Udit Mahajan",
        "WEBSITE_FULL_NAME" => "Traderz Den @ A world for Trading education",
        "SHORT_DESCRIPTION" => "At Traderz den, we’re dedicated to empowering traders to reach their full potential. ",
        "LONG_DESCRIPTION" => "At Traderz den, we’re dedicated to empowering traders to reach their full potential.",
    ],
    "PHONE_NUMBERS" => [
        "PRIMARY" => "",
        "SECONDARY" => "",
    ],
    "EMAIL_IDS" => [
        "PRIMARY" => "",
        "SECONDARY" => "",
        "SUPPORT" => "",
        "CONTACTS" => "",
        "PAYMENTS" => ""
    ],
    "ADDRESS" => [
        "PRIMARY" => ""
    ],
    "LOGOS" => [
        "SQAURE" => STORAGE_URL . "/logo/traderz-den-logo.png",
        "RECTANGLE" => STORAGE_URL . "/logo/traderz-den-logo.png",
        "FAVICON" => STORAGE_URL . "/logo/traderz-den-logo.png",
        "LOADER" => STORAGE_URL . "/logo/traderz-den-logo-no-bg.png",
    ]
]);
