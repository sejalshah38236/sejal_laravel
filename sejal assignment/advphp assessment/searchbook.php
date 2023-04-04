<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12" align="center">
                <h3 class="header-line">SEARCH BOOK</h3>
                
                            </div>

        </div>
            <div class="row" >
                <div class="col-md-5" align="center" >
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="col-md-12">
								  <form action="" method="post">
								   
									 <div class="form-group">
										<label>1.Search By ID</label>
									 </div>
									 
									 <div class="form-group">
										<label>2.Search By Name</label>
									 </div>
									 
									 <div class="form-group">
										<label>*Enter Your Choice*</label>
										<input class="form-control" type="text" name="n"  />
									 </div>
									<div class="form-group">		
										<input type="submit" name="submit4" class="btn btn-primary" />
									</div>
								</form>	
								</div>
                            </div>
							
                        </div>
						
                    </div>
                    <!--End Advanced Tables -->
					
                </div>
				<?php
				if(isset($_REQUEST['submit4']))
			{			
				$n=$_REQUEST['n'];
				if($n==1)
				{
					echo "<script>
					window.location='search1';
					</script>";
				}
				elseif($n==2)
				{
					echo "<script>
					window.location='search2';
					</script>";	
				}
			}	?>
            </div>
            
            
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    