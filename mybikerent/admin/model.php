<?php
class model
{
    public $conn="";

    function __construct()
    {
        $this->conn=new mysqli('localhost','root','','mybikerent');
    }
        function select($tbl)
        {
            $sel="select * from $tbl"; //query
            $run=$this->conn->query($sel); //run on db
            while($fetch=$run->fetch_object())
            //fetch all data from query from db
            {
                $arr[]=$fetch;
            }
            
            return $arr;
        }
        
        function select_join2($tbl1,$tbl2,$on)
        {
            $sel="select * from $tbl1 join $tbl2 on $on";
            //query
            $run  = $this->conn->query($sel);   //run on db
            while($fetch=$run->fetch_object()) //fetch all data from query from db
            {
                $arr[]=$fetch;
            
            }
            return $arr;
         }
         
         function select_join3($tbl1 ,$tbl2,$on,$tbl3,$on1)
         {
            $sel ="select * from $tbl1 join $tbl2 on $on join $tbl3 on $on1"; //query
            $run=$this->conn->query($sel); // run on db
            while($fetch=$run->fetch_object()) //fetch all data from query from db
            {
                $arr[]=$fetch;
            }
            return $arr;
         }

		function select_join4($tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3)
		{
			$sel="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3";  // 1=1 means query continue
			$run=$this->conn->query($sel);  // run query
			while($fetch=$run->fetch_object())  // data fetch from query
			{
				$arr[]=$fetch;
			}
			if(!empty($arr))
			{
				return $arr;
			}
		}	
			
		
		function selectSerach($tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3,$col,$value)
		{
			$sel="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3 where $col LIKE '$value%' ; ";  // query
			$run=$this->conn->query($sel);  // run query
			while($fetch=$run->fetch_object())  // data fetch from query
			{
				$arr[]=$fetch;
			}
			if(!empty($arr))
			{
				return $arr;
			}
		}
		
		
         function insert($tbl,$arr)
			{
				$arr_key=array_keys($arr);
				$key=implode(",",$arr_key);
				$arr_value=array_values($arr);
				$value=implode("','",$arr_value); //'rajesh','1234','rajgmail.com'
				
				$ins="insert into $tbl($key) value('$value')"; 
				$run=$this->conn->query($ins);
				return $run;	
			}
		 
		 function select_where($tbl,$arr)
		{
			$sel="select * from $tbl where 1=1"; // query continue
			$i=0;
			$arr_key=array_keys($arr);
			$arr_value=array_values($arr);
			foreach($arr as $w)
			{
				$sel.=" and $arr_key[$i]='$arr_value[$i]'";
				$i++;
			}
			$run=$this->conn->query($sel);  // run on db
			return $run;
		}
		
		function select_where1($tbl,$where)
		{
			$sel="select * from $tbl where 1=1";  // 1=1 means query continue
			$i=0;
			$col=array_keys($where);// array("0"=>"unm","1"=>"pass")  
			$value=array_values($where);// array("0"=>"rajesh","1"=>"1234")  
			foreach($where as $w)
			{
				echo $sel.=" and $col[$i]='$value[$i]'";
				$i++;
			}
			$run=$this->conn->query($sel);
			while($fetch=$run->fetch_object())  // data fetch from query
			{
				$arr[]=$fetch;
			}
			if(!empty($arr))
			{
				return $arr;
			}
		}
		
		
		
		function select_where_join($tbl1,$tbl2,$on,$arr)
		{
			$sel="select * from $tbl1 join $tbl2 on $on where 1=1"; // query continue
			$i=0;
			$arr_key=array_keys($arr);
			$arr_value=array_values($arr);
			foreach($arr as $w)
			{
				$sel.=" and $arr_key[$i]='$arr_value[$i]'";
				$i++;
			}
			$run=$this->conn->query($sel);  // run on db
			return $run;
		}
		
		
		function update($tbl,$data,$where)
		{
			$upd="update $tbl set"; // query continue
			$i=0;
			$arr_key=array_keys($data);
			$arr_value=array_values($data);

			$count=count($data);
			foreach($data as $w)
			{
				if($count==$i+1)
				{
					$upd.=" $arr_key[$i]='$arr_value[$i]'";
				}
				else
				{
					$upd.=" $arr_key[$i]='$arr_value[$i]',";
					$i++;
				}	
				
			}
			$upd.=" where 1=1"; // query continue
			$j=0;
			$warr_key=array_keys($where);
			$warr_value=array_values($where);
			foreach($where as $w)
			{
				$upd.=" and $warr_key[$j]='$warr_value[$j]'";
				$j++;
			}
			$run=$this->conn->query($upd);  // run on db
			return $run;
		}
		
		function delete($tbl,$where)
		{
			$del="delete from $tbl where 1=1"; // query continue
			$i=0;
			$arr_key=array_keys($where);
			$arr_value=array_values($where);
			foreach($where as $w)
			{
				$del.=" and $arr_key[$i]='$arr_value[$i]'";
				$i++;
			}
			$run=$this->conn->query($del);  // run on db
			return $run;
		}
 }
$obj= new model;

?>