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
            <button id="diff"> Different</button>
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
    </div></div>
<!-- Search form -->


</div>
<table class="table table-bordered " style="width:90%;">
  <thead>
    <tr>
      <th>Specifaction</th>
   
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
    <!-- <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
        
        
/*

alert this data (countries variable)should get from database


*/



var countries = ["Afghanistan","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
autocomplete(document.getElementById("myut"), countries);
 autocomplete(document.getElementById("mut"), countries);
</script>
 -->