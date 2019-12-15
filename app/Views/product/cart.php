<style>.btn-primary {
    background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%);
    border: #ffba00;
    }
    
}</style>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a> 
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
  
    <!--================Cart Area =================-->
    <section class="cart_area" id="cart-item">
    
        <div class="container">
           <div>
              <input type="text" placeholder="Coupon Code"  class="form-control" style="width:20%;display: inline-block;">
                <a class="btn btn-primary" href="#">Apply</a>
               <button type="button" class="clear-cart btn btn-primary" style="float:right;">Clear</button>
          </div>
           
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table cart table-bordered" style="border-top: solid 1px #dee2e6;;
    margin-top: 5px;">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Descreption</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">process</th>
                            </tr>
                        </thead>
                        <tbody id="cartContentt">
                     
                          
             
                        </tbody>
                    </table>
                    <a class="btn btn-primary" id="checkout" href="<?php echo URL . 'product/Checkout'?>">Proceed to checkout</a>
                     <a  style="float: right;color: white;">continue shopping</a>
                </div>
            </div>
        </div>
    </section>

    <!--================End Cart Area =================-->

 