<?php
   require 'all_desh/Header.php';

   require 'db.php';
   //$sqli = "SHOW TABLES FROM shawon";
   // $sqli = "SHOW COLUMNS FROM menu";
   // $result = mysqli_query($connectionQuery,$sqli);
   // $i=1;
   $dropdownname=$_POST['menuName'];
   // $bannerdata="SELECT * FROM '$dropdownname'";
   // $bannerresult=mysqli_query($connectionQuery,$bannerdata);
   // $bd=mysqli_fetch_assoc($bannerresult);
 ?>







 <h1>Menu Inner Item</h1>
 <form action="city2.php" method="post" enctype="multipart/form-data">
      <input type="text" name="menuName" value="<?php echo $dropdownname ?>" style="display:none;">
   <table class="table mt-5 " id="table_id">
     <thead class="thead-dark">
       <tr>
         <th>Title</th>
         <th>Descreption</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td> <input type="text" name="one" placeholder="Write " > </td>
         <td> <input type="text" name="tow" placeholder="Write" > </td>
       </tr>
     </tbody>
   </table>
   <label>Choose an Image</label>
   <div class="form-control">
        <input type="file" name="photo" value="">
   </div><br>
   <button type="submit" name="button" class="btn btn-success form-control">Add Item</button>
 </form>







 <?php
  require 'all_desh/footer.php';
  ?>
