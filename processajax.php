<?php

        //取值 未用框框，重在交互思想  
        $textk = $_POST["textk"];
        $textv = $_POST['textv'];
        $selk = $_POST['selk'];
        $selv = $_POST['selv'];

      //这里要合并两个数组 //附加到备注和其他字段信息到数组中去,形成键值对         
        $arrfillkey = array_merge($textk,$selk);
        $arrfillval = array_merge($textv,$selv);
        $param = array_map(function($k,$v){
           return [$k=>$v];
        }, $arrfillkey, $arrfillval);

        $con = [];
        foreach ($param as $p) {
            $con[key($p)] = $p[key($p)];
        }

       

        try
         {  

           echo json_encode(['status' => 'ok','msg' => 'Ajax提交成功!','data'=>$con]);          
         }
         catch (Exception $e)
         {
            
             echo json_encode(['status' => 'error','msg' => $e->getMessage()]);
         }       
