<?php 
$match=$_POST["txtsearch"];
                                              require 'database.php'
                                              $obj=new question;
                                              $result=$obj->searchqs($match);

                                              if($result->num_rows>0)
                                              {
                                                    while($row =$result->fetch_assoc())
                                                    {
                                                        echo  '<div class="question">';
                                                        echo  '<div class="left">';
                                                           ?> <img src="<?php echo $row["user_image"];?>" height="50" width="50" class="avatar avatar-50 photo"><?php
                                                        echo  '</div>';
                                                        echo  '<div class="left questionMain">';                                           
                                                        echo '<h4><font color="blue">'. $row["question_title"].'</h4></font>';                                    
                                                         echo '<p>'. $row["question_desc"].'<p>';    
                                                         echo '<div class="questionByline">';
                                                   echo   '<img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>';
                                                    echo '<span class="answers"><a href="userviewans.php?id='.$row["question_id"].'">view Answers | </a></span>
                                                     <span class="answers"><a href="postans.php?id='.$row["question_id"].'">post Answers | </a></span>
                                                     
                                                    <span>'. $row["date"].'</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div> ';
                                                    }
                                              }


?>

