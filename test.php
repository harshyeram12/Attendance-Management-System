<?php
    include_once "admin/connect.php";
 
        $cid = "TYCO"; 
        $query="SELECT * FROM subject WHERE course='$cid'";
        $results = mysqli_query($conn, $query);

        foreach ($results as $subject){
?>
            <option value="<?php echo $subject["subject_name"];?>"><?php echo $subject["subject_name"];?>
    </option>       
<?php
        }
   
?>  