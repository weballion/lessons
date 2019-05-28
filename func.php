<?php

    // РЕДАКТИРОВАНИЕ
    function editLine ($edit_line) {
        $data = file_get_contents('links.json');

        // decode json to associative array
        $json_arr = json_decode($data, true);

        //ловим дату
        $timeSet["data"] = $json_arr[$_POST["editline"]]["data"];

        // проверка массива на наличие и удаление http:// и /
        foreach($edit_line as $key => $value) {
            if(strpos($edit_line[$key], "http://") !== false) {
                $edit_line[$key] = str_replace("/", "",  str_replace("http://", "", $edit_line[$key]));
            }
        }

        $edit_line["add_domains"] = array($edit_line["additional_damain_1"], $edit_line["additional_damain_2"]);

        //удаляем ключи в массиве доп доменов и кнопку пустышку
        unset($edit_line["additional_damain_1"], $edit_line["additional_damain_2"], $edit_line["editline"]);

        // передаем массив
        $json_arr[$_POST["editline"]] = $timeSet + $edit_line;

        // кодируем json и сохраняем в файл
        file_put_contents('links.json', json_encode($json_arr));
    };

    // ДОБАВЛЕНИЕ
    function addNew ($add_new) {

        $data = file_get_contents('links.json');

        // decode json to associative array
        $json_arr = json_decode($data, true);

        // берем последний элемент массива
        array_pop($add_new);

        // создание массива с айди и датой
        $curDate = date("d.m.Y");
        $arrDate = array('data'=>$curDate);

        // проверка массива на наличие и удаление http:// и /
        foreach($add_new as $key => $value) {
            if(strpos($add_new[$key], "http://") !== false) {
                $add_new[$key] = str_replace("/", "",  str_replace("http://", "", $add_new[$key]));
            }
        }

        $add_new["add_domains"] = array($add_new["additional_damain_1"], $add_new["additional_damain_2"]);

        //удаляем ключи в массиве доп доменов
        unset($add_new["additional_damain_1"], $add_new["additional_damain_2"]);

        // сложение массивов
        $allArr = $arrDate + $add_new;

        // передаем массив
        $json_arr[] = $allArr;

        // кодируем json и сохраняем в файл
        file_put_contents('links.json', json_encode($json_arr));


        //print_r($allArr);
        //echo "- DONE!";

    };

    // проверка нажатия кнопки добавление данных
    if (isset($_POST["button"])) {
        $error = 0;
        $error_main_name = "";
        $error_main_name_link = "";
        $error_hosting_name = "";
        $error_hosting_link = "";
        if ($_POST["main_name"] == "" || strlen($_POST["main_name"]) == 0) {
            $error_name = "Введите ваше имя!";
            $error_class_name = "uk-form-danger";
            $error = true;
        }
        if (!$error) {
            addNew($_POST);
        }
    }

    // УДАЛЕНИЕ
    if (isset($_POST["deleteline"])) {
        // load file
        $data = file_get_contents('links.json');
        // decode json to associative array
        $json_arr = json_decode($data, true);
        unset($json_arr[($_POST['deleteline'])]);
        // кодируем json и сохраняем в файл
        file_put_contents('links.json', json_encode(array_values($json_arr)));
    }
    // проверка нажатия кнопки редактирования данных
    if (isset($_POST["editline"])) {
        editLine($_POST);
    }

    //ЗАГРУЗКА СПИСКА
    // load file
    $data = file_get_contents('links.json');
    // decode json to associative array
    $json_arr = json_decode($data, true);

    // функция проверки наличия на не пустые значения в массиве
    function array_values_not_empty_check ($array) {
        foreach ($array as $item => $value) {
            if (empty($value)) return false;
        }
        return true;
    }