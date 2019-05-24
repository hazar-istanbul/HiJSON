<?php
            $page = $_GET['p'];
            $limit = 8;
            $json = file_get_contents('data.json');
            if( empty($page) ){
                $page = 0;
            }else {
                $page2 = $page * $limit;
            }
            $arr = json_decode($json, true);
	        $arr = array_slice($arr, $page2, $limit);
            $counter = 0;
            $counter2 = 0;        
	       foreach ($arr as $value) {
               if($counter != $limit){
                   $counter = $counter + 1;
               } 
               if($counter == $limit){
                   $counter = 0;
                   $counter2 = 1;
               }
               echo '<div class="posts">
               <div class="post" >
               <h2>'.$value['title'].'</h2>
               </div></div>';      
           }
            ?>
            <div class="page-nav">
            <?php if($counter > 0 and $page != 0){ ?>
            <a href="/?p=<?= $page - 1 ;?>">Back</a>
            <?php } ?>
            <?php if($counter2 == 1){ ?>
            <a href="/?p=<?= $page + 1 ;?>">Next</a>
            <?php } ?>
            </div>
