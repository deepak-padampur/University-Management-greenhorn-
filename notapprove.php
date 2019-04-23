<?php
include "connection.php";
$id=$_GET['id'];
mysqli_query($conn,"update student_registration set STATUS='no' where id=$id");
?>
<script type="text/javascript">
window.location="admin.php";
</script>
<!--user approval of user-->