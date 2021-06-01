<?php  include "includes/admin_header.php" ?>
<?php 

if(isset($_POST['checkBoxArray'] )){
    foreach($_POST['checkBoxArray'] as $postValueId){
        
     $bulk_options = $_POST['bulk_options'];
        
        switch($bulk_options){
                case 'Resolved';
                $query = "UPDATE posts SET post_status= '{$bulk_options}' WHERE post_id= {$postValueId} ";
                $update_to_published_status = mysqli_query($connection,$query);
                break;
                
                case 'draft';
                $query = "UPDATE posts SET post_status= '{$bulk_options}' WHERE post_id= {$postValueId} ";
                $update_to_draft_status = mysqli_query($connection,$query);
                break;
                
                case 'delete';
                $query = "DELETE FROM posts WHERE post_id= {$postValueId} ";
                $update_to_delete_status = mysqli_query($connection,$query);
                break;
                
                // case 'clone';
                
                // $query= "SELECT * FROM posts WHERE post_id = '{$postValueId}'";
                // $select_post_query= mysqli_query($connection,$query);
                
                // while($row=mysqli_fetch_array($select_post_query)){
                //             $post_title=$row['post_title'];
                //             $post_category_id=$row['post_category_id'];
                //             $post_status=$row['post_status'];
                //             $post_author=$row['post_author'];
                //             $post_user=$row['post_user'];
                //             $post_image=$row['post_image'];
                //             $post_tags=$row['post_tags'];
                //             $post_date=$row['post_date'];
                //             $post_content=$row['post_content'];

                //             if(empty($post_tags)){
                //                 $post_tags = "No Tags";
                //             }

                //         }
                
                // $query = "INSERT INTO posts (post_category_id, post_title,post_author,post_user,post_date,post_image,post_content,post_tags,post_status)";

                // $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}','{$post_user}','now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}')";

                // $copy_query=mysqli_query($connection,$query);

                // confirm(!$copy_query);
                
                break;
                
               
        }
    }
}

?>


<div id="wrapper">

<?php include "includes/admin_navigation.php" ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Query Section
                    <small>Query Section</small>
                </h1>
        
        
<form action="" method="post">
                   
                    <table class="table table-bordered table-hover">
                    <div id="bulkOptionsContainer" class="col-xs-4">
                        <select class="form-control" name="bulk_options" id="">
                            <option value="published">Publish</option>
                            <option value="draft">Draft</option>
                            <option value="delete">Delete</option>
                          
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <input type="submit" name="submit" class="btn btn-success" value="Apply">
                        <a class="btn btn-primary" href="posts.php?source=add_post">Add New</a>
                    </div>
                     <thead>
                         <tr>
                             <th><input type="checkbox" id="selectAllBoxes"></th>
                             <th>Id</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Subject</th>
                             <th>Message</th>
                             <th>Time</th>
                             <th>Delete</th>
                             
                         </tr>
                     </thead>
                     <tbody>
                         <?php 
                         
                        //  $query= "SELECT * FROM posts ORDER BY post_id DESC ";
                        $query = "SELECT contactus.id,contactus.time,contactus.name,contactus.email,contactus.subject,contactus.message, ";
                        $query .= "contactus.id,contactus.time,contactus.name,contactus.email,contactus.subject,contactus.message ";
                        $query .= " FROM contactus ";
                        $query .= "ORDER BY contactus.time DESC";
                        $select_posts=mysqli_query($connection,$query);

                        while($row=mysqli_fetch_assoc($select_posts)){
                            $query_id=$row['id'];
                            $user_name=$row['name'];
                            $user_email=$row['email'];
                            $query_subject=$row['subject'];
                            $query_message=$row['message'];
                            $query_time = $row['time'];
                            
                            
                            
                            echo "<tr>";
                            
                            ?>
                            
                            <td><input type="checkbox" class="checkBoxes" name="checkBoxArray[]" value="<?php echo $query_id ?>"></td>
                            
                            <?php
                            
                            echo "<td>{$query_id}</td>";

                          
                            echo "<td>{$user_name}</td>";
                            

                            // echo "<td>{$post_author}</td>";


                            echo "<td>{$user_email}</td>";
                            
                            // $query= "SELECT * FROM categories WHERE cat_id= {$post_category} ";
                            // $the_updated_cat=mysqli_query($connection,$query);
                                
                                
                            // while($row=mysqli_fetch_assoc($the_updated_cat)){


                            // $cat_id=$row['cat_id'];
                            // $cat_title=$row['cat_title'];
                            
                            echo "<td>{$query_subject}</td>";
                            
                            
                        
                            echo "<td>{$query_message}</td>";
                            
                            echo "<td>{$query_time}</td>";


                            
                      

                           



                            ?>

                            <form method="post">

                            <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">

                            <?php

                            echo '<td><input class="btn btn-danger" type="submit" name="delete" value="Delete"></td>';

                            ?>

                            </form>

                            <?php 

                            

                            // echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                            // echo "</tr>";      
                        }
                    ?>
                     </tbody>
                 </table>
                 
</form>


</div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
                 
<?php 
if(isset($_POST['delete'])){
    
    $the_post_id = $_POST['post_id'];
    
    $query= "DELETE FROM posts WHERE post_id = {$the_post_id} ";
    
    $delete_query=mysqli_query($connection,$query);
    
    header("Location:posts.php");
}
?>