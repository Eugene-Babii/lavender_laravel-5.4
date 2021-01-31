    <?php
    // $mysqli = new mysqli("localhost:3306", "root", "root", "lavender_laravel-5.4");
    // if ($mysqli->connect_error) {
    //     exit('Could not connect');
    // }

    // $sql = "select time_begin, time_end from rents where date = ?";

    // $stmt = $mysqli->prepare($sql);
    // $stmt->bind_param("s", $_GET['date']);
    // $stmt->execute();
    // $stmt->store_result();
    // $stmt->bind_result($t_begin, $t_end);
    // $stmt->fetch();
    // $stmt->close();

    // echo "<table>";
    // echo "<tr>";
    // echo "<th>timebegin</th>";
    // echo "<td>" . $t_end . "</td>";
    // echo "<th>timeend</th>";
    // echo "<td>" . $t_end . "</td>";
    // echo "</tr>";
    // echo "</table>";

    function connect(
        $host = "localhost:3306",
        $user = "root",
        $pass = "root",
        $dbname = "lavender_laravel-5.4"
    ) {
        $cs = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8;';
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        );
        try {
            $pdo = new PDO($cs, $user, $pass, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    $pdo = connect();
    $list = $pdo->query('select time_begin, time_end from rents where date = ?');
    while ($row = $list->fetch()) {
        echo $row['id'] . '' . $row['country'] . '<br/>';}
    ?> 
