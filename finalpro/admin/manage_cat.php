<?php
//CREAT
require ('includes/connect.php');
if (isset($_POST['submit'])) {
    $catname  =$_POST['cat_name'];

    $image_name= $_FILES['cat_image']['name'];
    $tmp_name=$_FILES['cat_image']['tmp_name'];
    $path="uploads/";
    move_uploaded_file($tmp_name,$path.$image_name);

    $query="INSERT into category(cat_name,cat_image)
    values('$catname','$image_name') ";
    mysqli_query($conn,$query);
}
?>

<?php
//Delete
if (isset($_POST['delete'])) {
    $catid=$_POST['catidd'];

   
$query ="DELETE from category where cat_id =$catid "; 
mysqli_query($conn,$query) ;
header ("location:manage_cat.php");
}
?>


<?php
//update
if (isset($_POST['subupdate'])) {
    $catid=$_POST['catid'];
    $catname  =$_POST['catnameu'];

    $image_name= $_FILES['catimageu']['name'];
    $tmp_name=$_FILES['catimageu']['tmp_name'];
    $path="uploads/";

    move_uploaded_file($tmp_name,$path.$image_name);


                       
$query="UPDATE category set cat_name ='$catname',
                            cat_image='$image_name'
                        where cat_id =$catid ";  

mysqli_query ($conn,$query);
header("Location:manage_cat.php");
}
?>


<?php include ('includes/header.php') ; ?>
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header"><h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Category</h4> </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Category</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                                <input  name="cat_name" type="text" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label  class="control-label mb-1">Category image</label>
                                                <input  name="cat_image" type="file" class="form-control" >
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info ">save</button>
                                                    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>                                              <!--  end col-lg-12 -- >
                              <!-- Read -->
                              <!-- table -->
    
                     <div class="col-md-12">
                       <div class="card">
                                                      <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead style="background-color: black;">
                                            <tr>
                                                <th>ID</th>
                                                <th>category name</th>
                                                <th>category image</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                     `   </thead>
                                        <tbody >
                                            <!-- READ from database -->
                                           <?php 
                                        $query="select * from category " ; 
                                        $result=mysqli_query($conn,$query) ;
                                        while($cat=mysqli_fetch_assoc($result)){ ?>
                                        <tr>
                                        <td><?php echo "{$cat['cat_id']}" ; ?></td>
                                        <td><?php echo"{$cat['cat_name']} " ;?></td>
                                       
                                        
                                   <?php echo"<td><img src='uploads/{$cat['cat_image']}' width='50' hight='50'></td>"; ?>
 
                                        
                                        <td><button type="submit" class="btn btn-info editbtn" data-id="<?php echo "{$cat['cat_id']}";?>"  data-name="<?php echo "{$cat['cat_name']}";?>"   data-image="<?php echo "{$cat['cat_image']}";?>">
                                            Update  </button></td>
                                       
                                        <td> 
                                        <button type="submit" data-id="<?php echo "{$cat['cat_id']}";?>"  class="btn btn-danger deletebtn" >
                                            Delete 
                                        </button></td>
                                       </tr>
                                           
                                       <?php  } ?>  
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div> 
                        </div>
                           <!-- table --> 
                    </div>
                </div>
            </div>
          </div> 





          <!-- update -->
          <div class="modal " id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticModalLabel">Update Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- form -->

                    <form method="post" action="" enctype="multipart/form-data"> 
                        <div class="modal-body">
                        <!-- id -->  <input type="hidden" name="catid" id="catid">
                            <div class="form-group">
                                <label  class="control-label mb-1">category name</label>
                                <input type="text" name="catnameu" id="catnameu"   class="form-control" >
                            </div>
                            <div class="form-group">
                                <label  class="control-label mb-1">category image</label>
                                <input type="file" name="catimageu" id="catimageu"   class="form-control" >
                            </div>


                            <div class="modal-footer">     
                                <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                <button type="submit"  name="subupdate" class="btn btn-secondary ">update</button>
                            </div>
                        </div>
                    </form>   

                </div>
            </div>
        </div>
        <!-- end update -->




                <!-- Delete -->
            <div class="modal " id="delete" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Delete Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="catidd" id="catidd" >
                            <p> Are you sure you want delete category?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                            <button type="submit"  name="delete" class="btn btn-primary " >Yes,Delete it</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <!-- end delete -->





<!-- script for update -->
<script>
$(document).ready(function(){
  $(".editbtn").click(function(){

            var id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            var image =$(this).attr('data-image')
           
         $('#updatemodal').modal('show');
            $('#catid').val(id);
            $('#catnameu').val(name);
            $('#catimageu').val(image);

        });
    });
</script>

<!-- script for delete -->
<script >
    $(document).ready(function(){
    $('.deletebtn').click(function(){
        var id = $(this).attr('data-id');
         $('#delete').modal('show');
            $('#catidd').val(id);
          


        });
    });
</script>

  

    <?php include ('includes/footer.php') ; ?>