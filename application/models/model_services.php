<?php

class Model_Services extends Model
{
    public function getServices()
    {
        $data = null;
        try {
            $data = $this->connect()->query("SELECT * FROM  services");
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