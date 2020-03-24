<?php
require_once 'mvc/class/Server.php';
class Schema
{

    function generate_schema($data, $page)
    {
        $server = new Server();
        $serverName = $server->get_servername();
        $stringSchema = "{";
        if ($page == "main-home") {
            while ($r = mysqli_fetch_array($data)) {}
            $stringSchema = $stringSchema . '"@context":"https://schema.org/",';
            $stringSchema = $stringSchema . '"@type":"Organization",';
            $stringSchema = $stringSchema . '"url":"'.$serverName.'",';
            $stringSchema = $stringSchema . '"logo":"'.$serverName.'/mvc/public/images/logo.png"';
        }
        $stringSchema = $stringSchema . "}";
        return $stringSchema;
    }
}
?>