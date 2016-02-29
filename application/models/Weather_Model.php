<?php
class Weather_Model extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();           
    }

    public function getWeather ($lat, $long) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "http://forecast.weather.gov/MapClick.php?lat={$lat}&lon={$long}&FcstType=json",
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));

        $resp = curl_exec($curl);

        curl_close($curl);
        
        return $resp;

    }   
}

?>