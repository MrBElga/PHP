<?php
class ApiConsumer
{
    private function api($endpoint, $method = 'GET', $post_field = [])
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://restcountries.com/v3.1/$endpoint",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "$method",
            CURLOPT_HTTPHEADER => [
                    'Accept: */*'
                ]
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo 'CURL Error #: ' .$err;
            die(0);
        } else {
            return json_decode($response,true);
        }

    }

    public function getAllCountries()
    {
        $results = $this->api('all');
        $countries = [];
        foreach ($results as $result) {
            $countries[] = $result['name']['common'];
        
        }
        return $countries;
    }

    public function getCountry($name)
    {
        return $this->api("name/$name");
    } 
}
