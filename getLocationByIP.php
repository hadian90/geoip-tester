<?php
    require_once 'vendor/autoload.php';
    use GeoIp2\Database\Reader;

    $reader = new Reader('/usr/share/GeoIP/GeoLite2-Country.mmdb');

    $ip_list = array(
        '147.158.176.40',
        '185.203.122.19',
        '139.178.84.217',
    );
    foreach ($ip_list as $ip){
        $record = $reader->country($ip);

        print("Information for IP: $ip\n");

        print("Country Short Code: " . $record->country->isoCode . "\n");
        print("Country Name: " . $record->country->name . "\n");
        print ("====================================\n");
    }
?>
