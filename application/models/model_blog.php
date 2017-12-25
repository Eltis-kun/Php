<?php
class Model_Blog extends Model
{
    public function getBlog()
    {
        $data = null;
        try {
            $data = $this->connect()->query("SELECT * FROM  blog");
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

    public function getSingleBlog($url)
    {
        $data = null;
        try {
            $data = $this->connect()->query("SELECT title, content  FROM  blog WHERE url='$url'");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        if ($data) {
            $result = [];
            while ($result[] = mysqli_fetch_assoc($data)) {
            }
            return $result[0];
        }
        return $data;
    }
}
?>