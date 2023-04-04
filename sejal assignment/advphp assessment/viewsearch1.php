<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12" align="center">
                <h3 class="header-line">BOOK DETAILS</h3>
                
                            </div>

        </div>
            <div class="row" >
                <div class="col-md-5" >
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                          
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                        if(!empty($book_arr))
                                        {
                                            foreach($book_arr as $data)
                                            {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td>ID : <?php echo $data->bid?></td>                                            
                                        </tr>
										<tr class="odd gradeX">
                                              <td>Name : <?php echo $data->bname?>  </td>                                         
                                        </tr>
										<tr class="odd gradeX">
                                            <td>Author : <?php echo $data->name?> </td>                                           
                                        </tr>
										<tr class="odd gradeX">
                                            <td>Qty :  <?php echo $data->quan?> </td>                                           
                                        </tr>
										<tr class="odd gradeX">
                                            <td>Price : <?php echo $data->price?> </td>                                            
                                        </tr>	
					
                                       <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
							
                        </div>
						
                    </div>
                    <!--End Advanced Tables -->
					
                </div>
				 <div class="col-md-5">
              <form action="" method="post">
			  
				 <div class="form-group">
					<label>Try Another Book Search(Y/N)?</label>
					<input class="form-control" type="text" name="text"  />
				</div>
				<div class="form-group">
							
					<input type="submit" name="submit7" class="btn btn-primary" />
					
				</div>
			</form>	
            </div>
			<?php
			if(isset($_REQUEST['submit7']))
			{			
				$text=$_REQUEST['text'];
				if($text=='y')
				{
					echo "<script>
					window.location='search1';
					</script>";
				}
				elseif($text=='n')
				{
					echo "<script>
					window.location='main_menu';
					</script>";	
				}
			}?>
            </div>
           
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    