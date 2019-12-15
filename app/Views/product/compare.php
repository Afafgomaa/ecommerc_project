<style>
  .autocomplete-items {
    max-height: 200px;
  
  overflow-y: scroll;
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9;
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important;
  color: #ffffff;
}
    .mainco{height:100px;width:80%;background-color: #f2f1f17d;
    margin: auto;
    padding: 30px;
    margin-top: 25px;
    margin-bottom: 25px;}
    .inputdivv{margin: 0px !important; padding: 0px;}
    .butt{background-color: #2a2929; border: none;border-radius: 5px;padding-right: 13px;
    padding-left: 13px;}
    .widd{width: 12%;}
    #diff{  background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%);
    border-width: .5px;
    padding: 6px;
    color: white;
    border-radius: 3px;}
</style>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Contact Us</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Contact</a>
            
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

<div  class="row mainco">
    
   
    <!--frist search------------>
    <div class="col-4"><div class="row">
     <div class="col-10 inputdivv">
         <!---id of input related to id in javascript --->
        <input class="form-control" type="text" id="product1"  placeholder="Search" aria-label="Search">
        <div id="product1List"></div>  
      </div>
    </div></div>
   
    <!--secound search------------>
     <div class="col-4"><div class="row">
     <div class="col-10 inputdivv">
         <!---id of input related to id in javascript --->
        <input class="form-control" type="text" id="product2"  placeholder="Search" aria-label="Search">
        <div id="product2List"></div>  
      </div>
    </div></div> 
   
     <!--third search------------>
   <div class="col-4"><div class="row">
     <div class="col-10 inputdivv">
         <!---id of input related to id in javascript --->
        <input class="form-control" type="text" id="product3"  placeholder="Search" aria-label="Search">
        <div id="product3List"></div> 
         
      </div>
        <div class="col-2">
          <button id="diff" > Different</button>
          
          <!--class="buttt"-->
        
        </div>
    </div></div>
<!-- Search form -->


</div>
<table class="table table-bordered " style="width:90%;">
  <thead>
    <tr>
      <th class="widd">Specifaction</th>
        <th>product1</th>
        <th>product2</th>
        <th>product3</th>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Image</th>
      <td class="image1"></td>
     <td class="image2"></td>
     <td class="image3"></td>
    </tr>
    <tr>
      <th id="Price" scope="row">Price</th>
      <td class="price1 p"></td>
     <td class="price2 p"></td>
     <td class="price3 p"></td>
    </tr>
    <tr>
      <th id="description" scope="row">description</th>
     <td class="desc1"></td>
     <td class="desc2"></td>
     <td class="desc3"></td>

    </tr>
  </tbody>
</table>
<div>

  
	<!--================Contact Area =================-->
