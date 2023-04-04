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
		
			
			case '/edit_profile':
				$edit_profile=$this->select('user');

				include_once('edit_profile.php');
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
			
			
			
			
			
			
		}
		
		
	}
}
$obj=new control;


?>