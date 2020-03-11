<?php  
$query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 6";
$result = mysqli_query($connection, $query);
?>
            
            
            <div class="sidebar-box">
                <h3 class="heading">Tags</h3>
                <ul class="tags">
                <?php
           
           while ($row = mysqli_fetch_array($result)) {

            $tags = $row['post_tags'];          
              echo "<li><a href=''> $tags </a></li>";
            }     
                
     ?>        
                  <!-- <li><a href="#">Travel</a></li> -->
                </ul>
              </div>