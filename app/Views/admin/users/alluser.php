<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All user details</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
              
                        
                        <th>customer_details</th>
                        <th>order_number</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
                     <?php      foreach($rows as $row){ ?>  
                    <tr>
                        <td>
                        <a href="<?=  URL?>admin/user/getuser/<?php echo $row->cust_id?>"><?php echo $row->customer_name?></a>
                         </td>
                    <td>
                        <a href="<?=  URL?>admin/user/getOrder/<?php echo $row->order_number?>"><?php echo $row->order_number?></a>
                    </td>
                   
                        <td>
                            <?php if($row->status==1){?> 
                            <a  href="<?= URL ?>admin/user/update/<?php echo $row->id?>&page=0"  class="cancel">cancel</a>
                           <?php }else{?>
                            <a  href="<?=  URL?>admin/user/update/<?php echo $row->id?>&page=1" class ="confirm">confirm</a> 
                          
                            
                        </td>
                    
                      
                    </tr>
                   
                   
                    <?php 
               }}
                    ?>
                </tbody>
            </table>
          
           

        </div>
    </div>
    
    
                        
                    
    

