<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat']))
{
  $add_items=$_POST['cat_title'];
  $insert_query=" insert into categories(categories_title) values ('$add_items')";
  $result=mysqli_query($conn,$insert_query);
  if($result)
{
  echo "<Script>alert('It has been added Successfully')</Script>";
}
}
?>

 

<h2 class="text-center">insert_categories</h2>
<form action="" method="POST" class="mb-2">


    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Inset Categories" aria-label="Username" aria-describedby="basic-addon1">
      </div>



      <div class="input-group w-10 mb-2 m-auto">
        <input type="Submit" class="bg-info boder-0 p-2 my-5" name="insert_cat"  value="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">


      </div>




</form>