<html>
    <head>
        <title>Form Submission</title>
    </head>
    <body>
        <div class="container" style="margin-top:100px;">
            <h2 class="text-center" style="color:red; font-weight: bold; font-family: Castellar;">Insert Student Record</h2>
            <br>
       
        <div class="row">
        <div class="col-sm-3">

         </div>

         <div class="col-sm-6">
           <div class="form-group">
             <form method="POST">
                 <label><b>Name</b></label>
                 <input type="text" required name="studentname" class="form-control">

                    <label><b>Branch</b></label>
                    <select name="branch" class="form-control" required>
                      <option value="Computer Science">Computer Science</option>
                      <option value="Mechanical">Mechanical</option>
                      <option value="Civil">Civil</option>
                      <option value="Electronics">Electronics</option>
                      <option value="Electrical">Electrical</option>
                    </select>

                    <br>

                    <center><input type="submit" name="submit" value="Submit" style="width:200px" class="btn btn-primary">&nbsp;&nbsp;&nbsp;</center>
             </form>
           </div>
         </div>

         <div class="col-sm-3">
           
         </div>
        </div>
        </div>
    </body>
</html>

<?php
include "dbconfigure.php";
if(isset($_POST['submit']))
{
    $studentname = $_POST['studentname'];

    $branch = $_POST['branch'];

    $query = "INSERT INTO student(name, branch) VALUES ('$studentname', '$branch')";
    $n = my_iud($query);

    if($n==1)
    {
       echo '<script>
       alert("Record Inserted Successfully");
       window.location = "index.php";
       </script>';
    }
    else
    {
       echo '<script>alert("Something went wrong,Try Again...")</script>';
    }
}
?>