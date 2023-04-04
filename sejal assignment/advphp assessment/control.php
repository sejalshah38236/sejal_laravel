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
				
				$pass=$_REQUEST['pass'];
				
				$where=array("pass"=>$pass);
				$run=$this->select_where('admin',$where);
				
				$chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
				if($chk==1)
				{
					$fetch=$run->fetch_object(); // if only for single data
					
					$_SESSION['aname']=$fetch->aname;
					$_SESSION['aid']=$fetch->aid;
					echo "<script>
					alert('Login Success');
					window.location='main_menu';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Wrong Password');
					</script>";
				}	
			}
			include_once('index.php');
			break;
			
			
			case '/main_menu':
			if(isset($_REQUEST['submit']))
			{			
				$no=$_REQUEST['no'];
				if($no==7)
				{
					unset($_SESSION['aname']);
					unset($_SESSION['aid']);
					echo "<script>
					alert('Logout Success');
					window.location='admin';
					</script>";
				}
				elseif($no==6)
				{
					echo "<script>
					window.location='changepassword';
					</script>";
					
				}	
				elseif($no==1)
				{
					echo "<script>
					window.location='category';
					</script>";
				}
				elseif($no==2)
				{
					echo "<script>
					window.location='delete';
					</script>";
				}
				elseif($no==4)
				{
					echo "<script>
					window.location='viewbook';
					</script>";
				}
				elseif($no==3)
				{
					echo "<script>
					window.location='searchbook';
					</script>";
				}
			}
			include_once('main_menu.php');
			break;
			
			
			case '/searchbook':	 
			include_once('searchbook.php');
			break;
			
			case '/search1':	
				if(isset($_REQUEST['submit5']))
			{		
				$bid=$_REQUEST['bid'];		
				$where=array("bid"=>$bid);
				$run=$this->select_where('book',$where);

					echo $chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
					if($chk==1)
				{
					echo "<script>
					window.location='viewsearch1';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Book Not Available');
					window.location='search1';
					</script>";
				}
			}
			include_once('search1.php');
			break;
			
			case '/search2':	
					if(isset($_REQUEST['submit6']))
			{		
				$bname=$_REQUEST['bname'];		
				$where=array("bname"=>$bname);
				$run=$this->select_where('book',$where);

					echo $chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
					if($chk==1)
				{
					echo "<script>
					window.location='viewsearch1';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Book Not Available');
					window.location='search2';
					</script>";
				}
			}
			include_once('search2.php');
			break;
			
			case '/viewsearch1':	
				$book_arr=$this->select('book');
			include_once('viewsearch1.php');
			break;
			
			case '/delete':
				if(isset($_REQUEST['submit3']))
			{
				$bid=$_REQUEST['bid'];
				$where=array("bid"=>$bid);
				$run=$this->delete('book',$where);
				if($run)
				{
					echo "<script>
						alert('Delete Success');
						window.location='main_menu';
						</script>";
				}
				else{
					echo "not success";
				}
			}
			include_once('delete.php');
			break;
			
			
			case '/viewbook':
			  $book_arr=$this->select_join2('book','category','book.bid=category.cid');
			include_once('viewbook.php');
			break;

			
			case '/category':
			if(isset($_REQUEST['submit1']))
			{
				$num=$_REQUEST['num'];
				if($num==7)
				{
					echo "<script>
					window.location='main_menu';
					</script>";
				}
				elseif($num<=6)
				{
					echo "<script>
					window.location='addbook';
					</script>";
				}
			}	
			include_once('category.php');
			break;	
				
			
			case '/addbook':
			$category_arr=$this->select('category');
			if(isset($_REQUEST['submit2']))
				{
					$cid=$_REQUEST['cid'];
                    $bname=$_REQUEST['bname'];
					$name=$_REQUEST['name'];
					$quan=$_REQUEST['quan'];
                    $price=$_REQUEST['price']; 

                    $data=array("cid"=>$cid,"bname"=>$bname,"name"=>$name,"quan"=>$quan,"price"=>$price);

                    $res=$this->insert('book',$data);
                    if($res)
                    {
						echo "<script>
								alert('Book Added Success');
								window.location='main_menu';
								</script>";
                    }
					else
					{
						echo "Not success";
					}	
				}
			include_once('addbook.php');
			break;

			
			case '/changepassword':
			
					if(isset($_REQUEST['submit']))
					{   
						$pass=$_REQUEST['pass'];
						$data=array("pass"=>$pass);
						$res=$this->update('admin',$data);  
						if($res)	
						{	
						echo "<script>
						alert('Password Successfully Changed!! and press any key to continue...');
						window.location='main_menu';
						</script>";
						}
						else
						{
							echo "<script>
						alert('Update Failed');
						
						</script>";
						}	
					}				
			include_once('changepassword.php');
			break;
			
			
			case '/manage_user':
			$customer_arr=$this->select('customer');
			include_once('manage_user.php');
			break;
			
			case '/delete':
			if(isset($_REQUEST['deluidbtn']))
			{
				$uid=$_REQUEST['deluidbtn'];
				$where=array("uid"=>$uid);
				
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
						window.location='manage_user';
						</script>";
				}
			}
			
			if(isset($_REQUEST['delfeed_idbtn']))
			{
				$feed_id=$_REQUEST['delfeed_idbtn'];
				$where=array("feed_id"=>$feed_id);
				$run=$this->delete('feedback',$where);
				if($run)
				{
					echo "<script>
						alert('Delete Success');
						window.location='manage_feedback';
						</script>";
				}
			}
			break;
			
			
			case '/manage_feedback':
			//$feedback_arr=$this->select('feedback');
			$feedback_arr=$this->select_join2('customer','feedback','customer.uid=feedback.uid');
			include_once('manage_feedback.php');
			break;
			
			default:
			include_once('pnf.php');
			break;
			
		}
		
		
	}
}
$obj=new control;


?>