<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $user;
    private $password;

    private $dbname = "gFRodNTslon";
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $connection;

    public function __construct(string $host, string $user, string $password, string $dbname)
    {
        // TODO: Set any user and password information
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;

    }

    public function connect()
    {
        // TODO: make the connection to the database
        try {

            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        //$this->connection = null;
    }

    public function getChallenges(){

        $user = "SELECT * FROM user";
        $stm = $this->connection->query($user);
        $result= $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        $userArray = $result;
        
        return $userArray;
    }
}