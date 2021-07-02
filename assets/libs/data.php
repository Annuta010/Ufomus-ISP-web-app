<?php

    class Data {
        public $header;

        private $surname;
        public $par1;
        public $par2;
        public $par3;
        public $par4;
        public $par5;
        public $par6;
        public $par7;
        public $par8;
        public $arr = array();

        public function setSurname($sname) {
            $this->surname = $sname;
        }

        public function getSurname($sname) {
            $this->surname;
        } 

        public function genRandomString($length = 8) {
            //Набор символов, которые будут использоваться для выборки:
            $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            //Получение длинны строки для использования её в качестве массива:
            $charsLength = strlen($chars);
            //Инициализация пустой строки, в которую будут добавляться символы:
            $randomString = "";
            /* Цикл со счётчиком, где в качестве инициализирующего
            значения создаётся новая переменная i (количество итераций),
            в качестве условия — i строго меньше входного аргумента,
            а также инкрементирующее значение (i возрастает с каждой
            итерацией): */
            for($i = 0; $i < $length; $i++) {
           /*  При выполнении итерации в пустую переменную будут
            добавляться новые символы, которые берутся из набора
            в начале. Набор представлен в качестве массива, а его
            значение берётся случайным образом благодаря
            использованию метода rand(x, y), где x — начальное
            значение выборки (0, так как массивы нумеруются с нуля),
            а y — общая длинна строки минус единица (по той же
            причине): */
            $randomString .= $chars[rand(0, $charsLength - 1)];
            }
            //Возвращение итоговой строки для использования в программном коде:
            return $randomString;
        }
    }

?>