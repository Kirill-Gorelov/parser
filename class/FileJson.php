<?php 

class FileJson{

    /**
     * читаем содержимое 
     * В будущем можно переделать на fopen
     */
    static public function get(string $url):?array
    {
        if (file_exists($url)) {
            return json_decode(file_get_contents($url), true);
        }

        return [];
        
        /*else{
            file_put_contents($url, '');
            if (file_exists($url)) {
                return json_decode(file_get_contents($url));
            }else{
                throw new Exception('Не удалось создать файл');
            }
        }*/

    }

    /**
     * записывает массив
     */
    static public function putArray(string $url, array $array):bool
    {
        if(file_put_contents($url, json_encode($array, JSON_PRETTY_PRINT))){
            return true;
        }

        return false;
    }

    /**
     * записывает массив
     */
    static public function appendItem(string $url, string $string):bool
    {
        $arr = self::get($url);
        $arr[] = $string;

        return self::putArray($url, $arr);
    }

}

?>