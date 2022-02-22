<?php 

class CurlRequest{

    /**
     * Отправляет по умолчанию GET запрос.
     */
    static public function send(string $url, array $params = [], array $headers = [])
    {
        return self::sendRequest($url, $params, false, $headers);
    }

    /**
     * Отправляет по POST запрос.
     */
    static public function sendPost(string $url, array $params = [], array $headers = [])
    {
        return self::sendRequest($url, $params, true, $headers);
    }

    //В будущем можно сделать базик авторизацию

    static private function sendRequest(string $url, array $params = [], bool $post = false, array $headers)
    {
        $curl = curl_init();
        
        if ($post == true) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        } else {
            if (!empty($params)) {
                $url = $url . '?' . http_build_query($params);
            }
        }

        if (!empty($headers)) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        // curl_setopt($curl, CURLOPT_USERPWD, self::login . ":" . self::password);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_ENCODING, 'gzip, deflate');

        $result = curl_exec($curl);
        curl_close($curl);

        return $result;
    }

}

?>