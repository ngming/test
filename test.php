<!DOCTYPE html>
<?php 
public function __construct(){
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = 'root';
        $dbName  = 'test';
 
        try{
 
                //DB connection using PDO
                $this->_myDB = new PDO("mysql:host=".$dbHost.";dbname=".$dbName, $dbUser, $dbPass); // PDO = PHP data objects
                $this->_myDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }catch(Exception $e){
                //incase of errors
                die("ERROR: " . $e->getMessage());
            }
        } 

        public gett(){
        	$query = $this->_myDB->prepare('SELECT * FROM test');
            $query ->execute();
            $data = $query->fetch();
            return $data;
        }

        $data = gett();
        var_dump($data);

 ?>
<html>
<head>
	<title>this</title>
</head>
<body>
<div>testing</div>
<?php  
foreach ($data as $key => $value) {
?>
<div><p>A</p><?php echo $key ?></div>

<?php }

 ?>
 <div><li>lilili</li></div>
 <div>hahahahah</div>
 123sdqw
 wesd
 qwe33333
 333333
</body>
</html>