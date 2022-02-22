<?php 
include $_SERVER['DOCUMENT_ROOT'].'/digikey/func/htmlLawed.php';

class Parser{

    /**
     * форматирование html через htmlLawed
     */
    public function formatHtml(string $html):string
    {
        if(function_exists('htmLawed')){
            return htmLawed($html, array('tidy'=>'some value'));
        }

        return $html;
    }

    /**
     * ищет содержимое между тегами, возвращает первое вхождение 
     */
    public function extractString($string, $start, $end) 
    {
        $string = " ".$string;
        $ini = strpos($string, $start);
        if ($ini == 0) return "";
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    /**
     * ищет сожержимое между тегами, но возвращает все вхождения, то есть массив
     */
    public function extractAllString(string $string, string $start, string $end):array
    {
        $responsArr = [];
        $tmpString = $string;
        $lastPos = 0;

        while (($lastPos = strpos($tmpString, $start, $lastPos))!== false) {
            $responsArr[] = $this->extractString($tmpString, $start, $end);
            $lastPos = $lastPos + strlen($start);

            $tmpString = " ".$tmpString;
            $ini = strpos($tmpString, $start);
            if ($ini == 0) return "";
            $len = strpos($tmpString, $end, $ini) - $ini;
            $tmpString = substr_replace($tmpString,'',$ini, $len);
        }

        return $responsArr;
    }

    /**
     * удаляю ссылки, оставляю только текст ссылки
     * //TODO: вернуться
     */
    public function removeA($text)
    {
        /* $response = preg_replace('#<a.*?>.*?</a>#i', '', $text); */
        $response = preg_replace('/<(a).*?>(.*?)<\/\1>/ism', '$2', $text);
        // $response = strip_tags($text, 'p');
        // var_dump($response);
        return $response;
    }

    /**
     * удаляю class / id / style / a
     */
    public function removeParam($html)
    {
        $html = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $html);
        $html = preg_replace('/(<[^>]+) class=".*?"/i', '$1', $html);
        $html = preg_replace('/(<[^>]+) id=".*?"/i', '$1', $html);
        $html = preg_replace('/<(a).*?>(.*?)<\/\1>/ism', '$2', $html);

        return $html;
    }

    /**
     * ищем на странице конкретные блоки по регулярному выражению
     * в которых есть другой блок, что бы найти только ныжный
     * и вернуть содердимое блока, тоже по регулярному выражению
     * Нужно, что бы найти на странице только конкретный блок по уникальному имени и вернуть его содержимое
     * 
     * @param $block - где осуществляем поиск
     * @param $findBlok - ищем только конкретные блоки. Массив
     * @param $search - что бы из всех блок вернуть только соответствующий блок. 
     * @param $result - вернуть содержимое
     */
    public function findBlockAndReturnBlock(string $block, array $findBlok, array $search, array $result):string
    {
        $findBlokResult = $this->extractAllString($block, $findBlok['0'], $findBlok['1']);
        // var_dump('findBlokResult');
        // var_dump($findBlokResult);
        if (empty($findBlokResult)) {
            return false;
        }

        $str = '';
        foreach ($findBlokResult as $key => $value) {
            // var_dump($value);
            $searchResultBlock = $this->extractString($value, $search['0'], $search['2']);
            // var_dump('searchResultBlock');
            // var_dump($searchResultBlock);
            if (!empty($searchResultBlock)) {
                // $searchResultString = stripos($searchResultBlock, $search['1']);
                // var_dump('searchResultString');
                // var_dump($searchResultString);
                // var_dump($searchResultString === true);
                if ($searchResultBlock == $search['1']) {
                    // var_dump('searchhhhhh');
                    // $str = $this->extractString($searchResultBlock, $result['0'], $result['1']);
                    return $this->extractString($value, $result['0'], $result['1']);
                }
            }
        }

        return $str;
    }

    /**
     * строку в символьный код
     */
    public function nameToCode($name)
    {
        // $name = 'OIUYFGYHUJ*&^%$%^&*()/*-+lkijuhygt23456';//example string
        // $str = preg_replace('%[^A-Za-zА-Яа-я0-9]%u','',$name);
        $str = preg_replace('%[^A-Za-zА-Яа-я0-9 ]%u','',$name);

        $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', ' ', '');
        $lat = array('a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', '-', '-');
        return strtolower(str_replace($rus, $lat, $str));
    }

    /**
     * достаю картинку
     */
    public function getImageParse($block):string
    {
        $re = '/src="(.*?)[?]/m';
        preg_match_all($re, $block, $matches, PREG_SET_ORDER, 0);
        // var_dump($block);
        // var_dump($matches);
        if (isset($matches['0']['1'])) {
            return $matches['0']['1'];
        }
        return '';
    }

    /**
     * удаляю все параметры текста
     */
    public function removeAllParams()
    {

    }

    /**
     * удаляю параметр по имени
     */
    public function removeByNameParam()
    {

    }
}

?>