<?php

include_once('../admin/model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
		
			case '/index':
			$country=$this->select('country');
			$city=$this->select('city');
			$category=$this->select('category');
			include_once('index.php');
			break;
			
			case '/advertisement':	
			$city=$this->select('city');
			$category=$this->select('category');
			if(isset($_REQUEST['submit']))
			{
				$cust_id=$_SESSION['cust_id'];
				$cat_id=$_REQUEST['cat_id'];
				$veh_no=$_REQUEST['veh_no'];
				$veh_title=$_REQUEST['veh_title'];
				$lic_no=$_REQUEST['lic_no'];
				$drive_type=$_REQUEST['drive_type'];
				$fuel_type=$_REQUEST['fuel_type'];
				$rc_book=$_FILES['rc_book']['name'];
				$path='images/upload/rc_book/'.$rc_book;
				$tmp_rc_book=$_FILES['rc_book']['tmp_name'];
				move_uploaded_file($tmp_rc_book,$path);
				$file=$_FILES['file']['name'];
				$path='images/upload/advertisement/'.$file;
				$tmp_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				$rent=$_REQUEST['rent'];
				$rent_des=$_REQUEST['rent_des'];
				$veh_pickup_add=$_REQUEST['veh_pickup_add'];
				$city_id=$_REQUEST['city_id'];
				$area_id=$_REQUEST['area_id'];	
				
				date_default_timezone_set("asia/calcutta");
				$created_date=date("Y-m-d H:i:s");
				
				$data=array("cust_id"=>$cust_id,"cat_id"=>$cat_id,"veh_no"=>$veh_no,"veh_title"=>$veh_title,"lic_no"=>$lic_no,
				"drive_type"=>$drive_type,"fuel_type"=>$fuel_type,"rc_book"=>$rc_book,"file"=>$file,"rent"=>$rent,
				"rent_des"=>$rent_des,"veh_pickup_add"=>$veh_pickup_add,"city_id"=>$city_id,"area_id"=>$area_id,"created_date"=>$created_date);
				
				$res=$this->insert('advertise',$data);	
				if($res)
				{
					echo "<script>
					alert('Bike Added Success');
					window.location='login';
					</script>";
				}
				   else
				{
					echo "Not success";
				}		
			}
			include_once('advertisement.php');
			break;

			case '/categories':
			include_once('categories.php');
			break;

		
			case '/about':
			include_once('about.php');
			break;
			
			case '/contact':
			include_once('contact.php');
			break;

			case '/feedback':
			 if(isset($_REQUEST['submit']))
                        {
                            $cust_id=$_SESSION['cust_id'];
                            $f_desc=$_REQUEST['f_desc'];
							
							 $data = array("cust_id"=>$cust_id,"f_desc"=>$f_desc);
        
                            $res=$this->insert('feedback',$data);
                            if ($res) {
                                 echo "<script>
									alert('Feedback Successfull');
									window.location='index';
									</script>";
                            } 
							else {
                                echo "Not success";
                            }
						}	
			include_once('feedback.php');
			break;

			
			case '/signup':
			$country_arr=$this->select('country');
			if(isset($_REQUEST['submit']))
			{
				$cust_name=$_REQUEST['cust_name'];
				$phone_no=$_REQUEST['phone_no'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				$pincode=$_REQUEST['pincode'];
				$adhaar_no=$_REQUEST['adhaar_no'];
				$driving_no=$_REQUEST['driving_no'];
				$gender=$_REQUEST['gender'];
				$lang_arr=$_REQUEST['lang'];
				$lang=implode(",",$lang_arr);
				$c_id=$_REQUEST['c_id'];
				$city_id=$_REQUEST['city_id'];
				$area_id=$_REQUEST['area_id'];
				$file=$_FILES['file']['name'];
				$path='images/upload/customer/'.$file;
				$tmp_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				
				date_default_timezone_set("asia/calcutta");
				$created_dt=date("Y-m-d H:i:s");
				
				$data=array("cust_name"=>$cust_name,"phone_no"=>$phone_no,"email"=>$email,
					"password"=>$enc_password,"pincode"=>$pincode,"adhaar_no"=>$adhaar_no,"driving_no"=>$driving_no,"gender"=>$gender
				,"lang"=>$lang,"c_id"=>$c_id,"city_id"=>$city_id,"area_id"=>$area_id,"file"=>$file,"created_date"=>$created_date);
				
				$res=$this->insert('customer',$data);	
				if($res)
				{
					echo "<script>
					alert('Register Success');
					window.location='login';
					</script>";
				}
				   else
				{
					echo "Not success";
				}		
			}
			include_once('signup.php');
			break;
						
			case '/citydata':
			if(isset($_REQUEST['btn']))
				{
					$c_id=$_REQUEST['btn'];
					$where=array("c_id"=>$c_id);
					$city_arr=$this->select_where1('city',$where);
					?>
					<option>------Select City----</option>
					<?php
					foreach($city_arr as $f)
					{
					?>
						<option value="<?php echo $f->city_id; ?>">
										<?php echo $f->city_name; ?>
						</option>
					<?php 
					}
				}
			
			break;
			
			case '/areadata':
			if(isset($_REQUEST['btn']))
				{
					$city_id=$_REQUEST['btn'];
					$where=array("city_id"=>$city_id);
					$area_arr=$this->select_where1('area',$where);
					?>
					 <option>----Select Area----</option>
					<?php
					foreach($area_arr as $f)
					{
					?>
						<option value="<?php echo $f->area_id; ?>">
										<?php echo $f->area_name; ?>
						</option>
					<?php 
					}
				}
			
			break;
			
			
			
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				
				$where=array("email"=>$email,"password"=>$enc_password);
				$run=$this->select_where('customer',$where);
				
				$chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
				if($chk==1)
				{
					$fetch=$run->fetch_object(); // if only for single data
					
					$_SESSION['email']=$fetch->email;
					$_SESSION['cust_id']=$fetch->cust_id;
					$_SESSION['cust_name']=$fetch->cust_name;
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

			case '/profile':
			$where=array("customer.cust_id"=>$_SESSION['cust_id']);
			$run=$this->select_where_join('customer','country','customer.c_id=country.c_id',$where);
			$fetch=$run->fetch_object(); // if only for single data
		
			include_once('profile.php');
			break;
			

			case '/edituser':
			$country=$this->select('country');
			if(isset($_REQUEST['btnedit']))
			{
				$cust_id=$_REQUEST['btnedit'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				
				if(isset($_REQUEST['submit']))
				{
					$cust_name=$_REQUEST['cust_name'];
					$phone_no=$_REQUEST['phone_no'];
					$email=$_REQUEST['email'];
					$gender=$_REQUEST['gender'];
					$lang_arr=$_REQUEST['lang'];
					$lang=implode(",",$lang_arr);
					$c_id=$_REQUEST['c_id'];
					
					
					if($_FILES['file']['size']>0)
					{
						$file=$_FILES['file']['name'];
						$path='images/upload/customer/'.$file;
						$tmp_file=$_FILES['file']['tmp_name'];
						move_uploaded_file($tmp_file,$path);
						
						$data=array("cust_name"=>$cust_name,"phone_no"=>$phone_no,"email"=>$email,"gender"=>$gender
					,"lang"=>$lang,"file"=>$file,"c_id"=>$c_id);
						
						$old_file=$fetch->file;
						
						$res=$this->update('customer',$data,$where);	
						if($res)
						{
							unlink('images/upload/customer/'.$old_file);
							echo "<script>
							alert('Update Success');
							window.location='profile';
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
						$data=array("cust_name"=>$cust_name,"phone_no"=>$phone_no,"email"=>$email,"gender"=>$gender,"lang"=>$lang,"c_id"=>$c_id);
						$old_file=$fetch->file;

					
						$res=$this->update('customer',$data,$where);	
						if($res)
						{
							echo "<script>
							alert('Update Success');
							window.location='profile';
							</script>";
						}
						
					}

				}					
				
				
			}
			include_once('edituser.php');
			break;
			
			
			
			case '/logout':
			unset($_SESSION['email']);
			unset($_SESSION['cust_id']);
			unset($_SESSION['cust_name	']);
			echo "<script>
				alert('Logout Success');
				window.location='index';
				</script>";
			break;
			
			
			default:
			include_once('pnf.php');
			break;
			
		}
		
		
	}
}
$obj=new control;


?>