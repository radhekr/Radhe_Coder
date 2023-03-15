<?php
include('../includes/connect.php');
if(isset($_POST['insert_product']))
{
    $product_title=$_POST['product_title'];
    $product_description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_Price=$_POST['product_Price'];
    // accessing images
    // $product_status='true';
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    $product_status='true';
    
    // accesing tmage tmp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    $folder1 = './product_images/' . $product_image1;
    $folder2 = './product_images/' . $product_image2;
    $folder3 = './product_images/' . $product_image3;

    // cheking empty condition

    // if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or
    // $product_brands=='' or $product_Price=='' or $product_image1=='' or $product_image2=='' or $product_image3=='')
    // {
    //     echo "<script> alert('error') </script>";
        
    // }
    
        move_uploaded_file($temp_image1, $folder1);
        move_uploaded_file($temp_image2, $folder2);
        move_uploaded_file($temp_image3, $folder3);

        // insert query
        $insert_products="INSERT INTO products (product_title, product_description,
        product_keywords, categories_id, brnad_id, product_image1, product_image2, product_image3,product_Price, date, status)
         VALUES ('$product_title','$product_description','$product_keywords','$product_category','$product_brands',
         '$product_image1','$product_image2','$product_image3','$product_Price', NOW() ,'$product_status')";
         $result_query=mysqli_query($conn, $insert_products);
         if($result_query)
         {
            echo "<script> alert('Successfully Inserted') </script>";
         }
    
  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin folder </title>
       <!-- BOot strap css link -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
         crossorigin="anonymous">

    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w
     ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- css part  -->
     <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center mt-5">Insert Product</h1>
        <!-- Form -->
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_title" class="form-lable">Product title</lable>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product title" autocomplete="off" required="required">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <lable for="description" class="form-lable">Product description</lable>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product descriptions" autocomplete="off" required="required">
            </div>

            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_keywords" class="form-lable">Product keywords</lable>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product keywords" autocomplete="off" required="required">
            </div>


            
            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a Category</option>
                       
                    <?php
                     $select_query="Select * from categories";
                     $result_query=mysqli_query($conn,$select_query);
                     while($row=mysqli_fetch_assoc($result_query))
                     {
                        $category_title=$row['categories_title'];
                        $category_id=$row['categories_id'];
                        echo "<option value=''>$category_title</option>";
                     }
                    ?>


                    <!-- <option value="">Fruits</option>
                    <option value="">Ice cream</option>
                    <option value="">Apple</option>
                    <option value="">orange</option>
                    <option value="">Banana</option>
                    <option value="">lolipop</option>
                    <option value="">Select a Category</option>
                    <option value="">Select a Category</option> -->
                </select>
            </div>


               <!-- Brands -->
               <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a Brnads</option>
                    <?php
                     $select_query="Select * from brands";
                     $result_query=mysqli_query($conn,$select_query);
                     while($row=mysqli_fetch_assoc($result_query))
                     {
                        $brnad_title=$row['brands_title'];
                        $brnad_id=$row['brnad_id'];
                        echo "<option value=''>$brnad_title</option>";
                     }
                    ?>
                    <!-- <option value="">Brnads-1</option> -->
                    <!-- <option value="">Ice cream</option>
                    <option value="">Apple</option>
                    <option value="">orange</option>
                    <option value="">Banana</option>
                    <option value="">lolipop</option>
                    <option value="">Select a Category</option>
                    <option value="">Select a Category</option> -->
                </select>
            </div>


             <!-- Image-1 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_image1" class="form-lable">Product image 1</lable>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>



            <!-- Image-2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_keywords" class="form-lable">Product image 2</lable>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>



            <!-- Image-3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_keywords" class="form-lable">Product image 3</lable>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>


             <!-- Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <lable for="product_Price" class="form-lable">Product Price</lable>
                <input type="text" name="product_Price" id="product_Price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>



              <!-- Price -->
              <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit"  name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>







        </form>
    </div>
    



<!-- Script link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous"></script>
</body>
</html>