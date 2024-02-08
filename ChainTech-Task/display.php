<html>
<head>
    <title>Display Data</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    
<body >    
<?php
include ('connection.php') ;


// $total=mysqli_num_rows($result);
// echo $total;
?>
<h1 align="center" class="mt-4 p-5 bg-white text-black rounded" >DisplayAll Recored</h1>
<center>
<table class="table table-hover table-striped">

                                            <thead>
                                               <tr><th width="5%">ID</th>
                                                    <th width="15%">First Name</th>
                                                    <th width="15%">Last Name</th>
                                                    <th width="25%">Email</th>
                                                    <th width="10%">Gender</th>
                                                    <th width="20%">Address</th>
                                                    
                                                    <th width="10%" colspan="2">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                <?php 
                                    
                                    if(isset($_POST["btndelete"])){
                                    $did = $_POST["deleteid"];
                                    // echo $did;   

                                    $result = mysqli_query($conn,"delete from tbl_city where id = ' $did '");

                                    echo "<script src='window.location='viewcity.php''></script>";
                                    }

                                ?>

                                                <?php
                                                $count=1;
                                                $result = mysqli_query($conn, "select * from register") or
                                                    die(mysqli_error($conn));

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <th><?php echo $count;
                                                            $count++ ?></th>
                                                        <td><?php echo $row["firstname"] ?></td>
                                                        <td><?php echo $row["lastname"] ?></td>
                                                        <td><?php echo $row["email"] ?></td>
                                                        <td><?php echo $row["gender"] ?></td>
                                                        <td><?php echo $row["address"] ?></td>
                                                        <!-- get the update id to update those data and get delete id to delete the data -->
                                                        <td><a href="update.php?id=<?php echo $row["id"]?>" target="_blank"><button type="submit" name="btn" class="btn btn-info">Update</button></a></td>
                                                        <td><a href="display.php?id=<?php echo $row["id"]?>" target="_blank"><button type="submit" name="btndelete" class="btn btn-danger">Delete</button></a></td>                                                    

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
</table>
</center>
<script> 
    
    $(document).ready(function(){
        $(document).on("click","#btndelete", function(){

            // alert("text");

        var id =$(this).attr("data-id");
        // alert(id);

        $("#deleteid").val(id);
        })
})

</script>
   
</body>
</html>
