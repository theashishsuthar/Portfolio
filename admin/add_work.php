<?php include "includes/admin_header.php"; ?>

<?php if (!$session->is_signed_in()) {redirect("login.php");}?>


    <div id="wrapper">

   
        <!-- Navigation -->
        
        <?php include "includes/admin_navigation.php"; ?>
        
        <div id="page-wrapper">

           
            <div class="container-fluid">

            <div class="row">

            <div class="col-lg-12">


<?php 


if(isset($_POST['create_work'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $url = $_POST['url'];
    $category = $_POST['category'];
    $tags= $_POST['tags'];
    $work_image=$_FILES['image']['name'];
    $work_image_temp=$_FILES['image']['tmp_name'];

    move_uploaded_file($work_image_temp,"../images/$work_image");

    $sql = "INSERT INTO work (title,description,url,category,imageUrl,tags,time) ";
    $sql .= "VALUES('{$title}','{$description}','{$url}','{$category}','{$work_image}','{$tags}',now())";

    $create_work = mysqli_query($connection,$sql);

    if(!$create_work){
        echo "Something Went wrong!".mysqli_error($create_work);
    }

    echo "Hurray ! Work Created !!";
}


?>
            
            <h1 class="page-header">
            Add your work
            </h1>

            <div class="col-lg-6">
            
            
   <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Work title</label>
        <input type="text" class="form-control" placeholder="Give a suitable title of your work..." name="title">
    </div>

    <div class="form-group">
        <label for="description">Work Description</label>
        <input type="text" class="form-control" placeholder="Description should be short and sweet..." name="description">
    </div>

    <div class="form-group">
        <label for="url">Work URL</label>
        <input type="url" class="form-control" placeholder="Paste git,dribble or website url..." name="url">
    </div>
    
      <div class="form-group">
      <label for="category">Category</label>
        <select name="category" id="">

        <option value="App">Application</option>
        <option value="Design">Design</option>
        <option value="Web">Web</option>
           
            
            
        </select>
    </div>

    
    <div class="form-group">
        <label for="image">Work Image</label>
        <input type="file" name="image">
    </div>
    
    <div class="form-group">
        <label for="tags">Work Tags</label>
        <input type="text" class="form-control" name="tags">
    </div>
    
   
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_work" value="Publish Work">
    </div>
    
</form>

</div>

            </div>

            </div>

            </div>

        </div>
<?php include "includes/admin_footer.php"; ?>