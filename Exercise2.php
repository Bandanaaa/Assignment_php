<html>
<head>
    <title>Form</title>
</head>
<body>
 <form method="get" action="Exercise2.php">
   <label>Name:</label><br>
    <input type="textarea" name="txt"><br>

     <input type="submit" name="Submit">
</form>
</body>
</html>
<?php
function countWords(){
    $txt = $_GET['txt'];
    $arr = explode(" ",$txt);

    if(isset($_GET['Submit'])){
        echo"The text you entered is:</br>";
        echo $txt;
        echo"</br>";
        echo"</br>";
        echo"No of time each text occured:</br>";
        $words = array_count_values($arr);
        foreach ($words as $word => $count) {
            printf('%s occurs %u times', $word, $count);
            echo"</br>";
        }}
    }
countWords();

?>

