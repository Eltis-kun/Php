<?php
class Model_Portfolio extends Model
{
	public function getPortfolio()
	{
	        $data = null;
        try {
            $data = $this->connect()->query("SELECT * FROM  portfolio");
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

    public function getSinglePortfolio($url)
    {
            $data = null;
        try {
            $data = $this->connect()->query("SELECT title, content  FROM  portfolio WHERE url='$url'");
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