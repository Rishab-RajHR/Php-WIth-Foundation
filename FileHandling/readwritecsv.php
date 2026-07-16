<html>
    <head>
        <title>Handling CSV Files</title>
    </head>
    <body>
        <h2 align="center">Enter Student Data</h2>
        <form method="post">
            Enter Roll Number <input type="text" name="rollno">
            <br>
            Enter Name <input type="text" name="sname">
            <br>
            Enter Semester <input type="text" name="sem">
            <br>
            Enter Branch <input type="text" name="branch">
            <br>
            Enter Marks <input type="text" name="marks">
            <br>
            Enter Roll Number <input type="text" name="rollno">
            <br>
            <input type="submit" name="save" value="Save">
            <input type="submit" name="list" value="List">
            <input type="submit" name="remove" value="Remove">
        </form>
    </body>
</html>
<?php 
if(isset($_POST['save']))
{
    echo "<br>Save is clicked";
    $r = $_POST['rollno'];
    $n = $_POST['sname'];
    $s = $_POST['sem'];
    $b = $_POST['branch'];
    $m = $_POST['marks'];
    $line = "$r,$n,$s,$b,$m\n";
    $fp = fopen("student.csv","a");  // a = append mode
    fwrite($fp,$line);
    fclose($fp);
}

if(isset($_POST['list']))
{
    $fp = fopen('student.csv','r');  // r = read mode
    $fs = filesize('student.csv');
    $seperator = ",";
    while($row = fgetcsv($fp,$fs,$seperator))
    {
           echo "<br>";
           echo "<br>Roll No. is $row[0]";
           echo "<br>Name is $row[1]";
           echo "<br>Sem is $row[2]";
           echo "<br>Branch is $row[3]";
           echo "<br>Marks is $row[4]";
    }

}

if(isset($_POST['remove']))
{
unlink('student.csv');   // removes file from harddisk
echo "File is removed";
}
?>