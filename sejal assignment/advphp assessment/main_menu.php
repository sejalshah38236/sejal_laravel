<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12" align="center">
                <h3 class="header-line">MAIN MENU</h3>
                
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
                                            <th>No</th>
                                            <th>Name</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Add Books</td>
                                        </tr>
                                       
										<tr class="odd gradeX">
                                            <td>2</td>
                                            <td>Delete Books</td>
                                        </tr>
										
										<tr class="odd gradeX">
                                            <td>3</td>
                                            <td>Search Books</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>4</td>
                                            <td>view Book List</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>5</td>
                                            <td>Edit Book record</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>6</td>
                                            <td>Change password</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>7</td>
                                            <td>Close Application</td>
                                        </tr>
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
					<label>Enter A Choice</label>
					<input class="form-control" type="text" name="no"  />
					<p class="help-block">Help Number here.</p>
				</div>
				<div class="form-group">
							
					<input type="submit" name="submit" class="btn btn-primary" />
					
				</div>
			</form>	
            </div>
            </div>
            
            
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    