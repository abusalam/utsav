<?php
class database 
{

 function get(){
	 echo "hello";
 }
 function get_rec($table, $fields, $where='', $order='' , $by='')
    {
        $q = "select $fields from $table";
        if($where)
        $q .= " where $where";
        if($order)
            $q .= " order by $order";
		if($by)
            $q .= " $by";
			 $result = mysql_query($q);
            if($result)
			{
                $rec = mysql_fetch_object($result);
				
			}
            else
                return false;
     
       return $rec;
    } // get_rec()
    //    +-----------------------------------------+
	
	
	function get_recs($table, $fields, $where='', $order='', $group='', $limit='')
    {
         $q = "select $fields from $table";
        if($where)
		{
			
     	  $q .= " where $where";
		}
		 if($group)
          $q .= " group by $group";
	  
		if($order)
           $q .= " order by $order";
            //echo $q.'<br />';
     	if($limit)
          $q .= " $limit";
			
            $result = mysql_query($q);
      
       // return $result;
	  
	 $rec_count = mysql_num_rows($result);
	  if($rec_count>0)
	  { 
	  	while($rec = mysql_fetch_object($result))
            {
				
                $recs[] = $rec;
            }
		  
		  return $recs;
	  }
	  else{
		  
		  return 0;
		  }
	}
	// get_recs()
	

		function db_insert($table, $fields, $values)
    {
		//ssecho "insert";
		//echo '<br />';
		  $q = "insert into $table ($fields) values ($values)";
        
            $result = mysql_query($q);
          $id = mysql_insert_id();
        $msg="Successfully Enterd";
        //echo $q;
		return $id;
    } // db_insert()

 function db_update($table, $pairs, $where)
    {
        if(is_array($pairs))
            $fields = implode(", ", $pairs);
        else
            $fields = $pairs;
    
 $q = "update $table set $fields where $where";
		  $result = mysql_query($q);
        
    //echo $q;
        if($result || $result != 0)
            return true;
        else
            return false;
    } // db_update()


    function db_delete($table, $where)
    {
     $q = "delete from $table where $where";
        
            $result = mysql_query($q);
       
        if($result)
            return true;
        else
            return false;
    } // db_delete()

} // class Database


?>
