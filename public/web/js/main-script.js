$(document).ready(function(){
// -----------------------------------------------
// FUNCTION THAT HANDLES BRAND CHECK BUTTONS
// -----------------------------------------------

var filterField = $("#filterField");
var brand_id_field = $(filterField).find($("#formField #hiddenBrandField"));
var price_id_field = $(filterField).find($("#formField #hiddenPriceField"));

class Checked{
    constructor(string){
        var action = this;
        this.input_check = $(string).find($("#brandSection input"));
        this.price_check = $(string).find($("#priceFilter input"));
        this.btn = $(string).find($("#formField button"));


        $(this.input_check).on("click", function(){
            action.uncheck_brand_fields($(this));
            action.input_brand_id($(this));
        });

        $(this.price_check).on("click", function(){
            action.uncheck_price_fields($(this));
            action.input_price_id($(this));
        });

        

        this.btn.on("click", function(e){
            action.button_action(e);
        });

        
    }
 
    // uncheck brand input field
    uncheck_brand_fields(field){
        var inputs = $(filterField).find( $("#brandSection input"));
            $.each(inputs, function(index, current){
                if($(this).attr("id") != $(field).attr("id")){
                        $(this).prop("checked", false);
                    }
            });
    }

    // add brand id to hidden input field
    input_brand_id(field){
        var id = $(field).attr("id");
        $(brand_id_field).val(id);
        
        if($(field).is(':checked') == false){
            $(brand_id_field).val('');
        }

    }

 // uncheck price input field
    uncheck_price_fields(field){
        var inputs = $(filterField).find( $("#priceFilter input"));
        $.each(inputs, function(index, current){
            var ids = $(current).attr("id").split('-')[1];
            if(ids != $(field).attr('id').split('-')[1]){
                $(this).prop("checked", false);
            }
        });
    }

     // add brand id to hidden price field
    input_price_id(field){
        var price_id = $(field).attr("id").split("-")[1];
        $(price_id_field).val(price_id);
        if($(field).is(':checked') == false){
            $(price_id_field).val('');
        }
    }



    button_action(e){
        if($(brand_id_field).val() == "" && $(price_id_field).val() == ""){
            e.preventDefault();
            alert("Choose brand or price range");
        }
    }
    
}

var checked = new Checked(filterField);


// -----------------------------------------------
// FUNCTION THAT HANDLES THE QUICK VIEW MODAL
// -----------------------------------------------

var modalContainer = $("#quick-view");
var quickViewBtn = $(".quick-view-btn");
var closeBtn = $(".modal-body button.close");
var quickViewDropDwon = $("#quick_view_dropdown_modal");


    $(quickViewBtn).click(function(e){
        e.preventDefault();
        preloader();
        var product_id = $(this).attr("id");
        var url =  $(this).attr("href");

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf_token']").attr("content")
            }
        });
        
        
        $.ajax({
            url: url,
            method: "post",
            data: {
                product_id: product_id
            },
            success: function (response){
               $(quickViewDropDwon).html(response.data);
            }
        });

    });


// preloader hides after one minute
function preloader(){
    setTimeout(function(){
        $(".quick-view-preloader").hide();
    }, 1500);
    $(".quick-view-preloader").show();
}

// hide preloader when modal is being closed
$(closeBtn).click(function(){
    $(".quick-view-preloader").hide();
});



// REMMOVE NEW LABEL HOVER ON MOBILE SCREENS
// --------------------------------------------
 $(".product-box .new-label").css("height", 0);







// SIZE BOX SELECT FUNCTION
// --------------------------------------------
var size = $("#size_box ul li a");
$("#size_box").find("input").val($($(size)[0]).attr("id"))
$(size).click(function(e){
    e.preventDefault();
    var id = $(this).attr("id");
    $(size).parent().removeClass("active");
    $(this).parent().addClass("active");
    $(this).parent().parent().parent().find("input").val(id);
});






// CSRF PAGE TOKEN
function csrf_token(){
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $("meta[name='csrf_token']").attr("content")
        }
    });
}








// ADD TO CART FUNCTION USING AJAX
// --------------------------------------------
var addToCart = $(".product-buttons #add_to_cart");
var productQty = $("#detail_qty_box #product_qty");
$(addToCart).click(function(e){
    e.preventDefault();
    
    var qty = parseInt($(productQty).val());
    var url = $(this).attr("href");
    var product_id = $(this).attr("data-id");
    var size = $("#detail_product_size").val();

    
    csrf_token()   // gets page csrf token
    

    
    
    $.ajax({
        url: url,
        method: "post",
        data: {
            quantity: qty,
            product_id: product_id,
            size: size
        },
        success: function (response){
           if(response.data){
               location.assign($("#cart_part").attr('data-url'))               
           }
        }
    });

     
});









// DELETE ITEMS FROM CART
// -------------------------------------------------
var DeleteCartBtn = $(".delete-cart-item");
$(DeleteCartBtn).click(function(e){
    e.preventDefault();
    var id = $(this).attr('id');
    var url = $(this).attr('href');

    csrf_token()   // gets page csrf token


    $.ajax({
        url: url,
        method: "post",
        data: {
            product_id: id
        },
        success: function (response){
           if(response.data)
           {
               location.reload();
               get_cart_quantity();
           }
        }
    });
    
});




// GET CART QUANTITY
// ------------------------------------------------
function get_cart_quantity(){
    var url = $("#get_cart_quantity").attr('data-url');

    csrf_token()   // gets page csrf token

    $.ajax({
        url: url,
        method: "post",
        data: {
            quantity: 'quantity'
        },
        success: function (response){
            $("#shopping_cart_quantity").html(response.cart_quantity);
        }
    });
}



// QUICK ADD TO CART
// ------------------------------------------------
var quickAddToCartBtn = $(".quick-add-to-cartBtn");
    $(quickAddToCartBtn).click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        var url = $(this).attr('data-url');

        csrf_token()   // gets page csrf token

        $.ajax({
            url: url,
            method: "post",
            data: {
                product_id: id,
                size: 'unspecified',
                quantity: 1
            },
            success: function (response){
                if(response.data){
                    get_cart_quantity()   //gets cart quantity
                    get_cart_dropdown(); //get cart dropdown
                }
               
            }
        });
    });





// GET CART DROPDOWN
// ------------------------------------------------
function get_cart_dropdown(){
    var url = $("#get_cart_dropdown").attr('data-url');

    csrf_token()   // gets page csrf token

    $.ajax({
        url: url,
        method: "post",
        data: {
           cart: 'cart'
        },
        success: function (response){
           $(".cart_item_container").html(response);
        }
    });
}






// DELETE CART DROPDOWN ITEM
// -------------------------------------------------
var deleteDropdownCartItem =    $('.cart_item_container');
    $(deleteDropdownCartItem).on('click', '.delete-cart-dropdown-item', function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        var url = $(this).attr('href');

        csrf_token()   // gets page csrf token

        $.ajax({
            url: url,
            method: "post",
            data: {
               product_id: id
            },
            success: function (response){
               if(response.data){
                    get_cart_quantity()   //gets cart quantity
                    get_cart_dropdown(); //get cart dropdown
               }
            }
        });
    });







var sideLoginBtn = $("#ajax_login_form");
var sideLoginError = $(".side-login-error");
    $(sideLoginError).hide();
    $(sideLoginBtn).find('#side_login_btn').click(function(e){
        e.preventDefault();
        $(sideLoginError).hide();
        $(sideLoginError).html('');

        var url = $(this).attr('href');
        var email = $(sideLoginBtn).find("#email").val();
        var password = $(sideLoginBtn).find("#password").val();
        
        csrf_token()   // gets page csrf token

        $.ajax({
            url: url,
            method: "post",
            data: {
               email: email,
               password: password
            },
            success: function (response){
                if(!response.data){
                    $(sideLoginError).show();
                    $(sideLoginError).html(response.errors);   
                }else{
                    location.reload();
                }
            }
        });

    });

    // end
});




















