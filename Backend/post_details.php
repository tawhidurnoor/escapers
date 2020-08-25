<?php
//include_once "connection.php";
class Database
{

    private $server = "mysql:host=localhost;dbname=webproject";
    private $username = "root";
    private $password = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $conn;

    public function open()
    {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    public function close()
    {
        $this->conn = null;
    }
}

$pdo = new Database();

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT * FROM post_table WHERE post_id=:id");
    $stmt->execute(['id' => $id]);
    $row = $stmt->fetch();

    $pdo->close();

    echo json_encode($row);
}
