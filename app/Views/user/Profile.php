<style>
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff !important;
    /* background-color: #007bff; */
    background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%);
}
    .containtab{box-shadow: 0px 0px 35px -25px rgba(122,118,122,1);padding: 2%;}
    .margintab{margin-top: 5%;}
    .form-control {
        margin-top: 15px;}
</style>	

<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Profile page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">index</a>
					</nav>
				</div>
			</div>
		</div>
    </section>
    <br>
    <!-- End Banner Area -->
<div class="container">
 <div class=" justify-content-around align-items-center">
  <div >
    <div class="nav  nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style=" margin-left: 25%;">
      <a class="nav-link active" id="v-pills-home-tab" style="color: #e38355e8 " data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">My purchases</a>
     
      <a class="nav-link" id="v-pills-messages-tab" style="color: #e38355e8 " data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Favorites lists</a>
      <a class="nav-link" id="v-pills-settings-tab" style="color: #e38355e8 " data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Account settings</a>
    </div>
  </div>

  <div >
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          
          <div style="margin-top:3%;margin-bottom:3%;">My purchases</div>
<div class="containtab">
      <table class="table table-bordered" >
          <thead>
            <tr>
              <th scope="col">Order Number</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
      <?php foreach($settings['prusher'] as $order ) :?>
      <tr>
             <td><a href="<?php echo URL ?>product/Product/order/<?php echo $order->id?>"><?php echo  $order->order_number?></a></td>
             <td>On Shipping</td>
             </tr>
        <?php endforeach; ?>
         </tbody>
        </table>
</div>













      </div>
      <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      

      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        
      
      Favorites lists

      <div>


<table class="table cart table-bordered" style="border-top: solid 1px #dee2e6;;
    margin-top: 5px;">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Descreption</th>
                                <th scope="col">Price</th>
                               <th scope="col">process</th>
                            </tr>
                        </thead>
    <tbody  id="whichListContent"></tbody>
          
          
          
          
          </table>


      </div>




      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"> 
            <div class="row containtab margintab">
                <div class="row title mb-20 pl-3">
                        <h5>Address </h5>
                    </div>
                
                                         <table class="table table-bordered">
 
  <tbody>
       <tr>
      <th scope="col">City </th>
      <th ><?php  echo $settings['address']->city?></th>
    
    </tr>
    <tr>
      <th scope="row">Address 1 </th>
      <td><?php echo $settings['address']->address_1?></td>
      
    </tr>
      <tr>
      <th scope="row">Address 2 </th>
      <td><?php echo $settings['address']->address_2?></td>
      
    </tr>
    <tr>
      <th scope="row">process </th>
      <td><button type="button" class="btn" data-toggle="modal" data-target="#address">
                       <i class="fa fa-edit"></i>
                </button></td>
      
    </tr>
  </tbody>
</table>
                
            </div>
             <div class="row containtab margintab">
                
                    
                    <div class="row title mb-20 pl-3">
                        <h5>Account settings</h5>
                    </div>
                    
                          <table class="table table-bordered">
  
  <tbody>
      <tr>
      <th scope="col">Name  :</th>
      <th ><?php echo $settings['user']->fname ?> <span id="lname"><?php echo $settings['user']->lname ?></span></th>
    
    </tr>
    <tr>
      <th scope="row">Email </th>
      <td><?php echo $settings['user']->email ?></td>
      
    </tr>
      <tr>
      <th scope="row">Phone </th>
      <td><?php echo $settings['user']->phone ?></td>
      
    </tr>
      <tr>
      <th scope="row">Password</th>
      <td><?php echo $settings['user']->password?></td>
      
    </tr>
    <tr>
      <th scope="row">process </th>
      <td> <button type="button" class="btn" data-toggle="modal" data-target="#pesronal">
                       <i class="fa fa-edit"></i>
                </button></td>
      
    </tr>
  </tbody>
                     </table>
             
          </div>
          <br>
                 <div class="row containtab margintab">
              
                    <div class="row title mb-20 pl-3">
                        <h5>personal information</h5>
                    </div>
                                                     <table class="table table-bordered">
  
  <tbody>
       <tr>
      <th scope="col">gender  </th>
      <th ><?php echo $settings['user']->gender?></th>
    
    </tr>
    <tr>
      <th scope="row">Nationality </th>
      <td><?php echo $settings['user']->nationality?></td>
      
    </tr>
      <tr>
      <th scope="row">Birth Day </th>
      <td><?php echo $settings['user']->birthday?></td>
      
    </tr>
    
  </tbody>
</table>  
                    
                    
                    

                    
              
            </div>
    </div>
    </div>
  </div>
</div>

</div>
<br><br><br>





<!-- Button trigger modal -->

<div class="modal fade" id="pesronal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upadte Your Personal Informiation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="Profile/updateUserProfile" method="post" enctype="multipart/form-data">
            <div class="mt-10">
                <input type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'"
                    required  value=" <?php echo $settings['user']->fname ?>"  class="form-control" name="user_firstname">
            </div>
            <div class="mt-10">
                <input type="text"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"
                    required class="form-control" value="<?php echo $settings['user']->lname ?>" id="datepicker" name="user_lastname" >
            </div>
            <div class="mt-10">
                <input type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"
                    required class="form-control"  value=" <?php echo $settings['user']->email ?>" name="user_email">
            </div>
            <div class="mt-10">
                <input type="number" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'"
                    required class="form-control"  value=" <?php echo $settings['user']->phone ?>" name="user_phone">
            </div>
            <div class="mt-10">
                <input type="text" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
                    required class="form-control"  value=" <?php echo $settings['user']->password ?>" name="user_password">
            </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_user" class="btn btn-primary">Save changes</button>
      </div>
     </form>
      </div>
    </div>
</div>
</div>


<div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upadte Your Address Informiation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="Profile/updateUserAddress" method="post" enctype="multipart/form-data">
            <div class="mt-10">
                <input type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'"
                    required class="form-control" value="  <?php echo $settings['address']->city ?>" name="user_city">
            </div>
            <div class="mt-10">
                <input type="text"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address 1'"
                    required class="form-control" value=" <?php $settings['address']->address_1  ?>"  name="user_address_1" >
            </div>
            <div class="mt-10">
                <input type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address 2'"
                    required class="form-control"  value=" <?php echo $settings['address']->address_2 ?>" name="user_address_2">
            </div>
            <div class="mt-10">
                <input type="text" placeholder="Extra" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Extra'"
                    required class="form-control"  value=" <?php echo $settings['address']->extra ?>"  name="user_extra">
            </div>
            
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_address" class="btn btn-primary">Save changes</button>
      </div>
     </form>
      </div>
    </div>
</div>
</div>









