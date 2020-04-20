<?php
include('connection.php');
if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $query="DELETE FROM `user` WHERE `email`='$email'";
            $data=mysqli_query($conn,$query);
            if($data){
?>
<script>
            alert('Deleted Successfully');
                    window.open('profile.php','_self');
                    </script>
                    <?php
        } else {
          ?>
          <script>
            alert('Not Deleted');
                    window.open('profile.php','_self');

</script>
<?php
}
}
 ?>
