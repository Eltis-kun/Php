<?php
/**
 * Created by PhpStorm.
 * User: stas
 * Date: 25.12.17
 * Time: 1:32
 */

class Model_Contacts extends Model
{
    public function getContacts()
    {
        $data = null;
        try {
            $data = $this->connect()->query("SELECT * FROM  contacts");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        if ($data) {
            $result = [];
            while ($result[] = mysqli_fetch_assoc($data)) {
            }
            return $result;
        }
        return $data;
    }
}