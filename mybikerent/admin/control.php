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
            case '/admin':
				if(isset($_REQUEST['submit']))
				{
					$anm=$_REQUEST['anm'];
					$apass=$_REQUEST['apass'];
					
					$where=array("anm"=>$anm,"apass"=>$apass);
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
				unset($_SESSION['anm']);
				unset($_SESSION['aid']);
				echo "<script>
					alert('Logout Success');
					window.location='admin';
					</script>";
			break;
			
			case '/dashboard':
				include_once('dashboard.php');
				break;

            case '/manage-booking':
                include_once('manage_booking.php');
				break;

            case '/add-category':
				include_once('add_category.php');
					if(isset($_REQUEST['submit']))
					{
						$cat_name=$_REQUEST['cat_name'];
						$file=$_FILES['file']['name'];
						$path='../website/images/upload/category/'.$file;
						$tmp_file=$_FILES['file']['tmp_name'];
						move_uploaded_file($tmp_file,$path);
						date_default_timezone_set("asia/calcutta");
						$created_date=date("Y-m-d H:i:s");
					
						$data=array("cat_name"=>$cat_name,"file"=>$file,"created_date"=>$created_date);

						$res=$this->insert('category',$data);
						if($res)
						{
							echo "'<script>
							alert('Category Added Successfully');
							window.location='manage-category';
							</script>";

						}
						else
						{
							echo "Not Success";
						}    
					}
				
                break;
			
			case '/editcategory':
				if(isset($_REQUEST['btnedit']))
				{
					$cat_id=$_REQUEST['btnedit'];
					$where=array("cat_id"=>$cat_id);
					$run=$this->select_where('category',$where);
					$fetch=$run->fetch_object();
					
					
					if(isset($_REQUEST['submit']))
					{
						$cat_name=$_REQUEST['cat_name'];
						date_default_timezone_set("asia/calcutta");
						$updated_date=date("Y-m-d H:i:s");
						
						if($_FILES['file']['size']>0)
						{
							$file=$_FILES['file']['name'];
							$path='../website/images/upload/category/'.$file;
							$tmp_file=$_FILES['file']['tmp_name'];
							move_uploaded_file($tmp_file,$path);
							
							$data=array("cat_name"=>$cat_name,"file"=>$file,"updated_date"=>$updated_date);
							
							$old_file=$fetch->file;
							
							$res=$this->update('category',$data,$where);	
							if($res)
							{
								unlink('../website/images/upload/category/'.$old_file);
								echo "<script>
								alert('Update Success');
								window.location='manage-category';
								</script>";
							}
							
						}
						else
						{
							$data=array("cat_name"=>$cat_name,"updated_date"=>$updated_date);
							$res=$this->update('category',$data,$where);	
							if($res)
							{
								echo "<script>
								alert('Update Success');
								window.location='manage-category';
								</script>";
							}	
						}
					}						
				}
				include_once('editcategory.php');
				break;

			 case '/manage-category':
                $category_arr=$this->select('category');
                include_once('manage_category.php');
                break;



             case '/add-employee':
				if(isset($_REQUEST['submit']))
					{
						$emp_name=$_REQUEST['emp_name'];
						$email=$_REQUEST['email'];
						$password=$_REQUEST['password'];
						$enc_password=md5($password);
						$phone_no=$_REQUEST['phone_no'];
						$file=$_FILES['file']['name'];
						$path='../website/images/upload/employee/'.$file;
						$tmp_file=$_FILES['file']['tmp_name'];
						move_uploaded_file($tmp_file, $path);
						date_default_timezone_set("asia/calcutta");
						$created_date=date("Y-m-d H:i:s");

						$data=array("emp_name"=>$emp_name,"email"=>$email,"password"=>$enc_password, "phone_no"=>$phone_no, 
						"file"=>$file, "created_date"=>$created_date);

						$res=$this->insert('employee',$data);
						if($res)
						{
							echo "'<script>
							alert('Employee Added Successfully');
							window.location='manage-employee';
							</script>";

						}
						else
						{
							echo "Not Success";
						}    
					}
                include_once('add_employee.php');
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
						$emp_name=$_REQUEST['emp_name'];
						$email=$_REQUEST['email'];
						$password=$_REQUEST['password'];
						$enc_password=md5($password);
						$phone_no=$_REQUEST['phone_no'];
						date_default_timezone_set("asia/calcutta");
						$updated_date=date("Y-m-d H:i:s");
							
						if($_FILES['file']['size']>0)
						{
							$file=$_FILES['file']['name'];
							$path='../website/images/upload/employee/'.$file;
							$tmp_file=$_FILES['file']['tmp_name'];
							move_uploaded_file($tmp_file,$path);	
							$data=array("emp_name"=>$emp_name, "email"=>$email,"password"=>$enc_password, "phone_no"=>$phone_no,
							"file"=>$file, "updated_date"=>$updated_date);
							
							$old_file=$fetch->file;
                        
							$res=$this->update('employee',$data,$where);    
							if($res)
							{
								unlink('../website/images/upload/employee/'.$old_file);
								echo "<script>
								alert('Update Success');
								window.location='manage-employee';
								</script>";
							}
							else{
								echo "<script>
								alert('Update Failed');
								</script>";
							}
						}
						else
						{
							$data=array("emp_name"=>$emp_name, "email"=>$email,"password"=>$enc_password, "phone_no"=>$phone_no,
							"updated_date"=>$updated_date);
							$res=$this->update('employee',$data,$where);	
							if($res)
							{
								echo "<script>
								alert('Update Success');
								window.location='manage-employee';
								</script>";
							}	
						}
					}						
				}
				include_once('editemployee.php');
				break;

            case '/manage-employee':
                $employee_arr=$this->select('employee');
                include_once('manage_employee.php');
                break;





			case '/add-city':
				$country_arr=$this->select('country');
                if(isset($_REQUEST['submit']))
                {
					$c_id=$_REQUEST['c_id'];
                    $city_name=$_REQUEST['city_name'];
                    $city_code=$_REQUEST['city_code']; 

                    $data=array("c_id"=>$c_id,"city_name"=>$city_name,"city_code"=>$city_code);

                    $res=$this->insert('city',$data);
                    if($res)
                    {
						echo "<script>
								alert('City Added Success');
								window.location='manage-city';
								</script>";
                    }
					else
					{
						echo "Not success";
					}	
                }              
                include_once('add_city.php');
                break;


			case '/editcity':
				$country_arr=$this->select('country');
				if(isset($_REQUEST['editcity_idbtn']))
				{
					$city_id=$_REQUEST['editcity_idbtn'];
					$where=array("city_id"=>$city_id);
					$run=$this->select_where('city',$where);
					$fetch=$run->fetch_object();

					if(isset($_REQUEST['submit']))
					{
						$c_id=$_REQUEST['c_id'];
						$city_name=$_REQUEST['city_name'];
						$city_code=$_REQUEST['city_code'];

						$data=array("c_id"=>$c_id,"city_name"=>$city_name,"city_code"=>$city_code);
						$res=$this->update('city',$data,$where);    
							if($res)
							{
								echo "<script>
								alert('Update Success');
								window.location='manage-city';
								</script>";
							}
							else
							{
								echo "<script>
								alert('Update Failed');
								</script>";
							}
					}
				}
				include_once('editcity.php');
				break;


			
			case '/manage-city':
                $country_arr=$this->select_join2('country','city','city.c_id=country.c_id');
                include_once('manage_city.php');
                break;




            case '/add-area':
				if(isset($_REQUEST['submit']))
			{	
					$city_id=$_REQUEST['city_id'];
					$area_name=$_REQUEST['area_name'];
					date_default_timezone_set("asia/calcutta");
					$created_date=date("Y-m-d H:i:s");
					
					$data=array("city_id"=>$city_id,"area_name"=>$area_name, "created_date"=>$created_date);
					
					$res=$this->insert('area',$data);	
					if($res)
					{
						echo "<script>
						alert('Added Successfully');
						window.location='manage-area';
						</script>";
					}
					else
					{
						echo "Not success";
					}	
					
				}
				$city_arr=$this->select('city');
                include_once('add_area.php');
                break;

			case '/editarea':
				$city_arr=$this->select('city');
				if(isset($_REQUEST['btnedit']))
				{
					$area_id=$_REQUEST['btnedit'];
					$where=array("area_id"=>$area_id);
					$run=$this->select_where('area',$where);
					$fetch=$run->fetch_object();
						
					if(isset($_REQUEST['submit']))
					{
						$area_name=$_REQUEST['area_name'];
						$city_id=$_REQUEST['city_id'];
						date_default_timezone_set("asia/calcutta");
						$updated_date=date("Y-m-d H:i:s");
							
							$data=array("area_name"=>$area_name,"city_id"=>$city_id, "updated_date"=>$updated_date);
							
							$res=$this->update('area',$data,$where);	
							if($res)
							{
								echo "<script>
								alert('Update Success');
								window.location='manage-area';
								</script>";
							}
					}						
				}
				include_once('editarea.php');
				break;
		

            case '/manage-area':
                $location_arr=$this->select_join3('city','area','city.city_id=area.city_id','country','city.c_id=country.c_id');
                include_once('manage_area.php');
                break;

			
		
			

            case '/manage-user':
                $user_arr=$this->select('customer');
                include_once('manage_user.php');
                break;

            case '/manage-advertise':
                $advertise_arr=$this->select_join3('advertise','customer','advertise.cust_id=customer.cust_id','area','advertise.area_id=area.area_id');
                include_once('manage_advertise.php');
                break;

            case '/manage-feedback':
                $feedback_arr=$this->select_join2('customer','feedback','customer.cust_id=feedback.cust_id');
                include_once('manage_feedback.php');
                break;



				
			case '/status':
				if(isset($_REQUEST['statusuidbtn']))
				{
					$cust_id=$_REQUEST['statusuidbtn'];
					$where=array("cust_id"=>$cust_id);
		
					$run=$this->select_where('customer',$where);
					$fetch=$run->fetch_object();
					$status=$fetch->status;
					if($status=="Block")
					{
						$data=array("status"=>"Unblock");
						$res=$this->update('customer',$data,$where);
						if($res)
						{
							echo "<script>
								alert('Unblock Success');
								window.location='manage-user';
								</script>";
						}
					}
					else
					{
						$data=array("status"=>"Block");
						$res=$this->update('customer',$data,$where);
						if($res)
						{
							unset($_SESSION['email']);
							unset($_SESSION['cust_id']);
							unset($_SESSION['cust_name']);
							
							echo "<script>
								alert('Block Success');
								window.location='manage-user';
								</script>";
						}
					}
				}
				break;

			


			case '/delete':
				if(isset($_REQUEST['delcat_idbtn']))
				{
					$cat_id=$_REQUEST['delcat_idbtn'];
					$where=array("cat_id"=>$cat_id);
					
					// img del
					$res=$this->select_where('category',$where);
					$fetch=$res->fetch_object();
					$old_file=$fetch->file;
					
					$run=$this->delete('category',$where);
					if($run)
					{
						unlink('../website/images/upload/category/'.$old_file);	
						echo "<script>
							alert('Delete Success');
							window.location='manage-category';
							</script>";
					}
				}
				
				if(isset($_REQUEST['deluidbtn']))
				{
					$cust_id=$_REQUEST['deluidbtn'];
					$where=array("cust_id"=>$cust_id);
					
					// img del
					$res=$this->select_where('customer',$where);
					$fetch=$res->fetch_object();
					$old_file=$fetch->file;
					
					$run=$this->delete('customer',$where);
					if($run)
					{
						unlink('../website/images/upload/customer/'.$old_file);	
						echo "<script>
							alert('Delete Success');
							window.location='manage-user';
							</script>";
					}
				}
			
				if(isset($_REQUEST['delcity_idbtn']))
				{
					$city_id=$_REQUEST['delcity_idbtn'];
					$where=array("city_id"=>$city_id);
					$run=$this->delete('city',$where);
					if($run)
					{
						echo "<script>
							alert('Delete Success');
							window.location='manage-city';
							</script>";
					}
				}
			
				if(isset($_REQUEST['delarea_idbtn']))
				{
					$area_id=$_REQUEST['delarea_idbtn'];
					$where=array("area_id"=>$area_id);
					$run=$this->delete('area',$where);
					if($run)
					{
						echo "<script>
							alert('Delete Success');
							window.location='manage-location';
							</script>";
					}
				}
			
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
							window.location='manage-employee';
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

           // case '/add-location':
              //  $location_arr=$this->select('location')
               // include_once('add_location.php');
               // break;

            case '/header':
                include_once('header.php');
                break;

            case '/footer':
                include_once('footer.php');
                break;
                



            default:
            include_once('index.php');
        }
    }
}

$obj=new control;
?>