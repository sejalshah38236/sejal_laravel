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

			case '/index':
					$employee_arr=$this->select('employee');
					include_once('index.php');
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

	

					case '/login':
						if(isset($_REQUEST['submit']))
						{
							$email=$_REQUEST['email'];
							$pass=$_REQUEST['pass'];
							
							$where=array("email"=>$email,"pass"=>$pass);
							$run=$this->select_where('admin',$where);
		
							echo $chk=$run->num_rows; // check rowswise condition =>in true or false
							if($chk==1)
							{
								 $fetch=$run->fetch_object(); // if only for single data
								
								 $_SESSION['a_id']=$fetch->a_id;
								 $_SESSION['email']=$fetch->email;
								echo "<script>
								alert('Login Success');
								window.location='index';
								</script>";
							}
							else
							{
								echo "<script>
								alert('Login failed');
								</script>";
							}	
							
						}
						include_once('login.php');
						break;
			
			case '/adminlogout':
				unset($_SESSION['email']);
				unset($_SESSION['a_id']);
				echo "<script>
					alert('Logout Success');
					window.location='login';
					</script>";
			break;
			
			case '/dashboard':
				include_once('dashboard.php');
				break;

      
				case '/editemployee':
				if(isset($_REQUEST['btnedit']))
				{
					$emp_id=$_REQUEST['btnedit'];
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
						$enc_password=md5($pass);
		
						
	
						$data=array("emp_fname"=>$emp_fname,"emp_lname"=>$emp_lname, "emp_email"=>$emp_email, "emp_mobile"=>$emp_mobile,
						"emp_gen"=>$emp_gen,"emp_pass"=>$enc_password);
						
							
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
								alert('Employee Updated Failed');
								</script>";
							}
						}
						
					
					}						
				
				include_once('editemployee.php');
				break;

           

			
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
            include_once('login.php');
        }
    }
}

$obj=new control;
?>