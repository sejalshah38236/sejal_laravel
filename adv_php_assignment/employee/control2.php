<?php

include_once('model.php'); // step 1

class control extends model   // step 2
{
    function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
        
        switch($url)
        {
			case '/manage_employee':
				$employee_arr=$this->select('employee');
				include_once('manage_employee.php');
				break;

			case '/add_employee':

					$employee_arr=$this->select('employee');
					if(isset($_REQUEST['submit']))
						{
							$emp_fname=$_REQUEST['emp_fname'];
							$emp_lname=$_REQUEST['emp_lname'];
							$emp_email=$_REQUEST['emp_email'];
							$emp_mobile=$_REQUEST['emp_mobile'];
							$emp_add=$_REQUEST['emp_add	'];
							$emp_pass=$_REQUEST['emp_pass'];
							$enc_password=md5($emp_pass);
					
							$data=array("emp_fname"=>$emp_fname,"emp_lname"=>$emp_lname,"emp_email"=>$emp_email, "emp_mobile"=>$emp_mobile ,"emp_pass"=>$enc_password,
							"emp_add"=>$emp_add);
	
							$res=$this->insert('employee',$data);
							if($res)
							{
								echo "'<script>
								alert('Employee Added Successfully');
								window.location='manage_employee';
								</script>";
	
							}
							else
							{
								echo "Not Success";
							}    
						}
					include_once('add_employee.php');
					break;
	
				

			
	

            case '/admin':
				if(isset($_REQUEST['submit']))
				{
					$anm=$_REQUEST['email'];
					$apass=$_REQUEST['pass'];
					
					$where=array("email"=>$email,"pass"=>$pass);
					$run=$this->select_where('admin',$where);

					echo $chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
					if($chk==1)
					{
						 $fetch=$run->fetch_object(); // if only for single data
						
						 $_SESSION['aid']=$fetch->aid;
						 $_SESSION['anm']=$fetch->anm;
						echo "<script>
						alert('Login Success');
						window.location='dashboard';
						</script>";
					}
					else
					{
						echo "<script>
						alert('Login failed');
						</script>";
					}	
					
				}
				include_once('index.php');
				break;
			
			
			case '/adminlogout':
				unset($_SESSION['email']);
				unset($_SESSION['a_id']);
				echo "<script>
					alert('Logout Success');
					window.location='admin';
					</script>";
			break;
			
			case '/dashboard':
				include_once('dashboard.php');
				break;

      
				case '/edit	employee':
					$employee=$this->select('employee');
					if(isset($_REQUEST['btnedit']))
					{
						$cust_id=$_REQUEST['btnedit'];
						$where=array("emp_id"=>$emp_id);
						$run=$this->select_where('employee',$where);
						$fetch=$run->fetch_object();
						
						
						if(isset($_REQUEST['submit']))
						{
							$emp_fname=$_REQUEST['emp_fname'];
							$emp_lname=$_REQUEST['emp_lname'];
							$emp_email=$_REQUEST['emp_email'];
							$emp_mobile=$_REQUEST['emp_mobile'];
			
							$emp_gen=$_REQUEST['emp_gen'];
							$emp_pass=$_REQUEST['emp_pass'];
							$enc_password=md5($emp_pass);
		

								$data=array("emp_fname"=>$emp_fname,"emp_lname"=>$emp_lname,"emp_email"=>$emp_email,
								"emp_mobile"=>$emp_mobile,"emp_gen"=>$emp_gen	,"emp_pass"=>$enc_password);
		
								$old_file=$fetch->file;
								
								$res=$this->update('employee',$data,$where);	
								if($res)
								{
						
									echo "<script>
									alert('Employee Updated Successfully');
									window.location='manage_employee';
									</script>";
								}
								else{
									echo "<script>
									alert('Employee Update Failed');
									</script>";
								}
							}
							else
							{
								$data=array("emp_fname"=>$emp_fname,"emp_lname"=>$emp_lname,"emp_email"=>$emp_email,
								"emp_mobile"=>$emp_mobile,"emp_gen"=>$emp_gen	,"emp_pass"=>$enc_password);
		
							
								$res=$this->update('customer',$data,$where);	
								if($res)
								{
									echo "<script>
									alert('Employee Update Success');
									window.location='profile';
									</script>";
								}
								
							}
		
						}					
						
						
					
					include_once('editemployee.php');
					break;
           

			
				case '/delete':
				if(isset($_REQUEST['delemp_idbtn']))
				{
					$emp_id=$_REQUEST['delemp_idbtn'];
					$where=array("emp_id"=>$emp_id);
					
					// img del
					$res=$this->select_where('employee',$where);
					$fetch=$res->fetch_object();
					$old_file=$fetch->file;
					
					$run=$this->delete('employee',$where);
					if($run)
					{
						unlink('../website/images/upload/employee/'.$old_file);	
						echo "<script>
							alert('Delete Success');
							window.location='manage_	employee';
							</script>";
					}
				}
			
				if(isset($_REQUEST['delf_idbtn']))
				{
					$f_id=$_REQUEST['delf_idbtn'];
					$where=array("f_id"=>$f_id);
					$run=$this->delete('feedback',$where);
					if($run)
					{
						echo "<script>
							alert('Delete Success');
							window.location='manage-feedback';
							</script>";
					}
				}
				break;	

          
            case '/header':
                include_once('header.php');
                break;

            case '/footer':
                include_once('footer.php');
                break;
                



            default:
            include_once('dashboard.php');
        }
    }
}

$obj=new control;
?>