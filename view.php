<?php
include "config.php";
?>
<h2 class='page-header'><i class="fa fa-student"></i>Student Details</h2>
                    <table class="table">
                        <tr>
                        
                            <th>Name</th> 
                            <th>Age</th> 
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        $sql="select * from student";
                        $res=$con->query($sql);
                        ($res->num_rows>0);
                        
                          
                            while($row=$res->fetch_assoc())
                            {  $i=0;
                                $i++;
                                echo"<tr>";
                               
                                echo "<td>{$row["Name"]}</td>";
                                echo "<td>{$row["Age"]}</td>";
                                echo "<td>{$row["City"]}</td>";
                                echo "<td><button type='button' class='btn btn-sm btn-info edit' data-id-'{$row["ID"]}><i class=fa fa-edit ></i></td>";
                                echo "<td><button type='button' class='btn btn-sm btn-danger del' data-id-'{$row["ID"]}><i class=fa fa-trash></i></td>";
                                echo "</tr>";
                                

                            };
                    
                       ?>
                    </table> 