    <?php
        
     $con = new mysqli("localhost","root","","techfusiondb");
     
     $st = $con->prepare("select * from workshops where category = ?");
     
     $st->bind_param("s", $_GET["category"]);
     
     $st->execute();
     
     $rs = $st->get_result();
     
     $arr = array();
     
     while($row = $rs->fetch_assoc()){
         
         array_push($arr, $row);
         
     }
     
     echo json_encode($arr);
     