<!DOCTYPE html>
    <html>
        <head>            
      <link rel="stylesheet" href="../style/datepicker/css/datepicker.css">
      <script src="../style/datepicker/js/bootstrap.js"></script>
      <script src="../style/datepicker/js/jquery.js"></script>
<script type="text/javascript">
function confirm() {
var msg;
msg = alert('Yakin Ingin Menghapus Data ? ');
var agree=confirm(msg);
if (agree){
	return true ;
}else{
	return false ;
}
</script>
      <style>
    .datepicker{z-index:1151;}
      </style>
      <script>
    $(function(){
        $(".tanggal").datepicker({
      format:'yyyy/mm/dd'
        });
        
 });
      </script>
      
  <style>
         .feli{
             background:#078cd8;
             padding:2px 5px 2px 5px;
             margin-right:5px;
             color:#fff;
             border-radius:3px;
        }
        .feli:hover{
             background:#33aef4;
             padding:2px 5px 2px 5px;
             margin-right:5px;
             color:#000;
             line:none;
             border-radius:3px;
        }
        </style>
        </head><body>
<?php
include "config/koneksi.php";


 

 echo "<a href='#myModal4' role='button' data-toggle='modal' class='btn btn-primary'>Tambah</a>

<div id='myModal4' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-header'>
                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                            <h3 class='judul'>Data user</h3>
                    </div>
                    <div class='modal-body'>
                        <form method='POST' action='file/proses.php'>
	                    <table>
	                    	
                        <tr> <td>Username</td>		<td><input type='text' name='username' required></td></tr>
                        <tr> <td>Password</td>   <td><input type='text' name='password' required></td></tr>
                        
                      	<tr><td colspan='2'><input type='submit' class='btn btn-primary' value='Tambah' name='user'></td></tr>
                        </table>
                        </form>
                    </div>
                    
                </div>
  <table cellpadding=0 cellspacing=0 border=0 class='table table-striped table-bordered' id=example>
  <thead>
   <tr>
     <th>No</th>
     <th>user</th>
     <th>Aksi</th>
     </tr>
   </thead><tbody>
        ";
         $que = "SELECT * FROM user";
        $run1 = mysqli_query($con,$que);
        $no = 1;
        while($ha = mysqli_fetch_array($run1)){
        echo "<tr>
              <td>$no</td>
              <td>$ha[username]</td>
              <td>
              <a href='file/proses.php?userhapus=hapus&id_user=$ha[id_user]' class='btn btn-danger btn-big'><i class='icon-remove icon-white'></i>Hapus</a>
              <a href='#myModal7$ha[id_user]' role='button' data-toggle='modal' class='btn btn-primary'>
              <i class='icon-pencil icon-white'></i>&nbsp;Update</a>
              </td>
      <div id='myModal7$ha[id_user]' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-header'>
                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                            <h3 class='judul'>Update Data user</h3>
                    </div>
                    <div class='modal-body'>
                      
                        <form method='POST' action='file/proses.php'>
                        	<input type='hidden' name='id_user' value='$ha[id_user]'>
	                      	Username <input type='text' name='username' value='$ha[username]'><br>
                          Password &nbsp;<input type='text' name='password'><br>

                          
                        	<input type='submit' class='btn btn-primary' value='Update' name='userupdate'>                        
                        </form>
                    
                    </div>
          </div>
          </tr>
          ";
        $no++;

      }
      echo "
        </body>
  </table>";
 
?>

<div class="container-fluid">
                
            </div>
            
            <!--javascript here-->
            <script src="../style/datepicker/js/bootstrap-modal.js"></script>
            <script src="../style/datepicker/js/bootstrap-transition.js"></script>
            <script src="../style/datepicker/js/bootstrap-datepicker.js"></script> 


