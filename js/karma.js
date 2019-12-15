// function cartAction(action,product_id,msg){
//     var queryString = "";
//          if(action !== ''){
//            switch(action){
//              case 'add':
//                queryString = "action="+action +'&productId='+product_id+'&quantity='+$('#quantity').val()+ '&msg='+msg;
//                break;
//             case "remove":
//                 queryString = "action="+action+'&productId='+product_id + '&msg='+msg;
//             break;
               
//            }
//          }
        
//          jQuery.ajax({
//            url: '/estore/product/Cart/addToCart',
//            data:queryString,
//            type:"POST",
//            success:function(data){
//               // msg = 'item added successfuly';
//             // $('.alert-success').html(msg);
//             // console.log(data);
            
//            },
//            error:function(){
//                console.log('error')
//            }

//          });
         

    
//   }

  // $('.addItemTocart').click(function(){
  //   cartAction('add', $(this).data('id'), 'added to cart');
  // });
$(document).ready(function(){

 $('#pay').click(function(){
     $.ajax({
         url:'Checkout/CheckoutStatus',
         method:"POST",
         data:{action:'order'},
         success:function(data){

         localStorage.removeItem('cart');
         window.location = 'Product/confirm';
        
        
         },
         error:function(data){
             alert(data);
             console.log(data);
         }
     })
  
 })

                function filter_data()
                {
                    var lowerValue =   document.getElementById('lower-value').innerText;
                    var upperValue =   document.getElementById('upper-value').innerText;
                    var brands     =   get_filter('brand');
                    var categorys  =   get_filter('tag');

                    
                    $.ajax({
                        url:'Catagory/search',
                        method:"POST",
                        data:{lowerValue:lowerValue, upperValue :upperValue , brands:brands, categorys :categorys,action:'search' },
                        success:function(data){
                         $('.category-list .row').html(data);
                        },
                        error:function(error){
                            console.log(error);
                        }
                        

                    })


                }
                $('.common_selector').click(function(){
                    filter_data();
                });
                $('#sortBy').change(function(){
                    $.ajax({
                        url:'Catagory/search',
                        method:'POST',
                        data:{sorter:this.value,action:'search'},
                        success:function(data){
                            
                            $('.category-list .row').html(data);
                            
                        },
                        error:function(error){
                            console.log(error);
                        }
                    })
                  
                });
                $('#show').change(function(){
                    $.ajax({
                        url:'Catagory/search',
                        method:'POST',
                        data:{show:this.value,action:'search'},
                        success:function(data){
                            
                            $('.category-list .row').html(data);
                            
                        },
                        error:function(error){
                            console.log(error);
                        }
                    })
                  
                });
                
                $('#s').on('keyup', function (e){
                    // alert($('#s').val());
                    e.preventDefault();
                    $.ajax({
                        url:'Catagory/serachByProduct',
                        method:'GET',
                        data:{s:$('#s').val()},
                        success:function(data){
                            
                            $('.category-list .row').html(data);
                            
                            
                        },
                        error:function(error){
                            console.log(error);
                        }
                    })
                  
                });











                // abstreact function 

                    function get_filter(class_name)
                    {
                        var filter = [];
                        $('.'+class_name+':checked').each(function(){
                            filter.push($(this).val());
                        });
                        return filter;
                    }
                   


                   // compare products functions  

           $('#product1').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  

                $.ajax({  
                     url:"getProductToComapre",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#product1List').fadeIn();  
                          $('#product1List').html(data);  
                     }  
                });  
           }
           $(document).on('click', '#product1List ul li', function(){  
           $('#product1').val($(this).text());  
           $('#product1List').fadeOut();
           sendRequest1($(this).data('id'));
      });  
      });  



      
        $('#product2').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  

                $.ajax({  
                     url:"getProductToComapre",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#product2List').fadeIn();  
                          $('#product2List').html(data);  
                     }  
                });  
           }
           $(document).on('click', '#product2List ul li', function(){  
           $('#product2').val($(this).text());  
           $('#product2List').fadeOut();
           sendRequest2($(this).data('id'));
      });  
      });  
      



          $('#product3').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  

                $.ajax({  
                     url:"getProductToComapre",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#product3List').fadeIn();  
                          $('#product3List').html(data);  
                     }  
                });  
           } 
           $(document).on('click', '#product3List ul li', function(){  
           $('#product3').val($(this).text());  
           $('#product3List').fadeOut();
           sendRequest3($(this).data('id') );
      }); 
      });  
     


    function sendRequest1($value){
       

         $.ajax({  
                     url:"getProduct",  
                     method:"POST",
                     dataType:"JSON", 
                     data:{query:$value},  
                     success:function(data)  
                     {  
                       
                          $('.image1' ).html(`<td><img width="50px" src="http://localhost/estore/${data.image}"> </td>`);
                          $('.price1' ).html(`${data.price}`);
                          $('.desc1' ).html(`<td>${data.desc_s}</td>`);

                     }  
                }); 

    }

    function sendRequest2($value){
       
         $.ajax({  
                     url:"getProduct",  
                     method:"POST",
                     dataType:"JSON", 
                     data:{query:$value},  
                     success:function(data)  
                     {  
                        // var price = parseFloat(data.price);
                       
                          $('.image2' ).html(`<td><img width="50px" src="http://localhost/estore/${data.image}"> </td>`);
                          $('.price2' ).html(`${data.price}`);
                          $('.desc2' ).html(`<td>${data.desc_s}</td>`);

                     }  
                }); 

    } 
     function sendRequest3($value){
         $.ajax({  
                     url:"getProduct",  
                     method:"POST",
                     dataType:"JSON", 
                     data:{query:$value},  
                     success:function(data)  
                     {  
                       
                          $('.image3' ).html(`<td><img width="50px" src="http://localhost/estore/${data.image}"> </td>`);
                          $('.price3' ).html(`${data.price}`);
                          $('.desc3' ).html(`<td>${data.desc_s}</td>`);

                     }  
                }); 

    }          
var prices = [];
$("#diff").click(function(){
  $(".p").each(function(){
    prices.push($(this).text());
  
  });
  var heightPrice = Math.max(parseInt(prices))
getHightPrice(heightPrice);
});

function getHightPrice(maxNumber)
{
     $(".p").each(function(){
        if($(this).text() == maxNumber){
            $(this).css('color','red');
        }  
  });
}
 

});

