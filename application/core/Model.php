<?php

class Model
{

    /*
        Модель обычно включает методы выборки данных, это могут быть:
        > методы нативных библиотек pgsql или mysql;
        > методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
        > методы ORM;
        > методы для работы с NoSQL;
        > и др.
    */
    // Метод подключения к базе данныхs

    public function connect()
    {
        $connect = '';
        try {
            $connect = new Mysqli(HOST, USERNAME, PASSWORD, DATABASE);
            $connect->set_charset(CHARSET);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        return $connect;
    }

    // метод выборки данных
    public function get_data()
    {
        // todo
    }
}