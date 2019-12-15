<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All order details</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Price</th>
								<th scope="col">Total</th>
                              
							</tr>
                </thead>
                <tbody>
                
                <?php 
						
						
						
                        $detailes = json_decode($rows->order_detailes);
                        $product_names = explode(',',$detailes->product_name[0]);
                        $product_qnt = explode(',',$detailes->product_count[0]);
                        $product_price = explode(',',$detailes->product_price[0]);
                        $product_id= explode(',',$detailes->product_id[0]);
                        




                        
                         for($i = 0; $i < count($product_names); $i++):
                       ?>

                       <tr>
                           <td>
                               <?php 
                       
                               
                               
                               echo $product_names[$i] ?></p>
                           </td>
                           <td>
                               <h5><?php echo $product_qnt[$i]?></h5>
                           </td>
                           <td>
                               <h5><?php echo $product_price[$i]?></h5>
                           </td>
                           <td>
                               <p>$ <?php echo $product_price[$i] * $product_qnt[$i] ?></p>
                           </td>
                       </tr>
                   <?php endfor;?>
                </tbody>
            </table>
          
           

        </div>
    </div>
    
    
                        
                    
    

