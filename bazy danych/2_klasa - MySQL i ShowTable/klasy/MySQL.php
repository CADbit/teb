<?php

class MySQL {
    private $host, $user, $pass;
    public $databases, $handle;
    public $error;

    const MYSQL_ASSOC = MYSQL_ASSOC;
    const MYSQL_NUM = MYSQL_NUM;
    const MYSQL_BOTH = MYSQL_BOTH;

    public function __construct($data = array()) {
        $this->setData($data);
    }

    public function setData($data = array()) {
        $this->host = $data['host'];
        $this->user = $data['user'];
        $this->pass = $data['pass'];
        if (isset($data['db'])) {
            $this->databases = $data['db'];
        }
    }

    private function setError() {
        $this->error .= mysql_errno() . ": " . mysql_error() . "<br/>";
    }

    private function connect() {
        try {
            $this->handle = mysql_connect($this->host, $this->user, $this->pass);
            mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        } catch (Exception $ex) {
            $this->setError();
            exit($ex->getMessage().'<br/>'.$this->error);
        }
    }

    private function disconnect() {
        mysql_close($this->handle);
    }

    private function select_db($database = null) {
        try {
            if (empty($database) && $this->databases) {
                $database = $this->databases;
            } elseif (empty($database) && !$this->databases) {
                $this->disconnect();
                exit('Brak bazy danych do wyboru!');
            }
            mysql_select_db($database, $this->handle);
        } catch (Exception $ex) {
            $this->setError();
            exit($ex->getMessage().'<br/>'.$this->error);
        }
    }

    public function query($query, $database = null, $type = MySQL::MYSQL_ASSOC) { // Ło ale dziwne!
        $this->connect();
        $this->select_db($database);
        $result = mysql_query($query);
        $this->setError();
        $tab = null;
        if ($result) {
            while ($row = mysql_fetch_array($result, $type)) {
                $tab[] = $row;
            }
        } else {
            $this->disconnect();
            exit("Błąd zapytania SQL do bazy.");
        }
        $this->disconnect();
        return $tab;
    }

    public function specialQuery($query, $database = null) { // CREATE, DELETE, INSERT, UPDATE
        $this->connect();
        $this->select_db($database);
        $result = mysql_query($query);
        $this->setError();
        $this->disconnect();
        return $result;
    }
}

?>

