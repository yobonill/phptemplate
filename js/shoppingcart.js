// Shopping Cart
var cartWrapper = $('.cd-cart-container');
//product id - you don't need a counter in your real project but you can use your real product id
var productId = $('#cart-list-ul li').length;

if( cartWrapper.length > 0 ) {
    //store jQuery objects
    var cartBody = cartWrapper.find('.body')
    var cartList = cartBody.find('ul').eq(0);
    var cartTotal = cartWrapper.find('.checkout').find('span');
    var cartTrigger = cartWrapper.children('.cd-cart-trigger');
    var cartCount = cartTrigger.children('.count')
    var addToCartBtn = $('.cd-add-to-cart');
    var undo = cartWrapper.find('.undo');
    var undoTimeoutId;
    var price;
    var productName;
    var productImage;
    var id;
    var discount = $('#discount');

    //add product to cart
    addToCartBtn.on('click', function(event){
        price = $(this).data("price");
        productName = $(this).data("product");
        id = $(this).data("id");
        productImage = $(this).parent().parent().parent().find("img.activator").attr("src");
        event.preventDefault();
        //Prevent adding a duplicated item by checking if productName ID in h3 exists
            if($("h3 a#"+id).length) {
                swal({
                    title: 'Error!',
                    text: 'Este Item ya fue agregado al carrito!',
                    icon: 'error',
                })
                $('.swal-overlay').css('background-color', 'rgba(255, 0, 0, 0.514)');
            } else {
                addToCart($(this));
            }
        //Prevent adding a duplicated item by checking if productName ID in h3 exists
    });

    //open/close cart
    cartTrigger.on('click', function(event){
        event.preventDefault();
        toggleCart();
    });

    //calculate discount
    discount.on('change', function(event){
        quickUpdateCart();
    })

    //close cart when clicking on the .cd-cart-container::before (bg layer)
    cartWrapper.on('click', function(event){
        if( $(event.target).is($(this)) ) toggleCart(true);
    });

    //delete an item from the cart
    cartList.on('click', '.delete-item', function(event){
        event.preventDefault();
        removeProduct($(event.target).parents('.product'));
    });

    //update item quantity
    cartList.on('change', 'input', function(event){
        quickUpdateCart();
    });

    //reinsert item deleted from the cart
    undo.on('click', 'a', function(event){
        clearInterval(undoTimeoutId);
        event.preventDefault();
        cartList.find('.deleted').addClass('undo-deleted').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
            $(this).off('webkitAnimationEnd oanimationend msAnimationEnd animationend').removeClass('deleted undo-deleted').removeAttr('style');
            quickUpdateCart();
        });
        undo.removeClass('visible');
    });
}

function toggleCart(bool) {
    var cartIsOpen = ( typeof bool === 'undefined' ) ? cartWrapper.hasClass('cart-open') : bool;
    
    if( cartIsOpen ) {
        cartWrapper.removeClass('cart-open');
        //reset undo
        clearInterval(undoTimeoutId);
        undo.removeClass('visible');
        cartList.find('.deleted').remove();

        setTimeout(function(){
            cartBody.scrollTop(0);
            //check if cart empty to hide it
            if( Number(cartCount.find('li').eq(0).text()) == 0) cartWrapper.addClass('empty');
        }, 500);
    } else {
        cartWrapper.addClass('cart-open');
    }
}

function addToCart(trigger) {
    var cartIsEmpty = cartWrapper.hasClass('empty');
    //update cart product list
    addProduct();
    //update number of items 
    updateCartCount(cartIsEmpty);
    //update total price
    updateCartTotal(trigger.data('price'), true);
    //show cart
    cartWrapper.removeClass('empty');
}

function addProduct() {
    //this is just a product placeholder
    //you should insert an item with the selected product info
    //replace productId, productName, price and url with your real product info
    productId = productId + 1;
    var productAdded = $('<li class="product" id='+ productId +'><div class="product-details"><h3><a href="#0" id="'+ id +'">'+ productName +'</a></h3><span class="price">$'+ price +'</span><div class="actions"><a href="#0" class="delete-item">Eliminar</a><div class="quantity"><label for="cd-product-'+ productId +'">Cant</label><input type="number" id="cd-product-'+ productId +'" name="quantity'+productId+'" value="1"></span></div></div></div></li>');
    var productData = $('<input type="text" name = product'+productId+' value ="'+productName+'" hidden> <input type="number" name = price'+productId+' value = '+price+' hidden> <input type="number" name = id_producto'+productId+' value = '+id+' hidden>')
    
    cartList.prepend(productAdded);
    cartList.find("#"+productId).prepend(productData);
}

function removeProduct(product) {
    clearInterval(undoTimeoutId);
    cartList.find('.deleted').remove();
    var topPosition = product.offset().top - cartBody.find('ul').offset().top ,
        productQuantity = Number(product.find('.quantity').find('input').val()),
        productTotPrice = Number(product.find('.price').text().replace('$', '')) * productQuantity;

    product.css('top', topPosition+'px').addClass('deleted');
    //update items count + total price
    updateCartTotal(productTotPrice, false);
    updateCartCount(true, -productQuantity);
    undo.addClass('visible');

    //wait 8sec before completely remove the item
    undoTimeoutId = setTimeout(function(){
        undo.removeClass('visible');
        cartList.find('.deleted').remove();
    }, 8000);
}

function quickUpdateCart() {
    var quantity = 0;
    var price = 0;
    
    cartList.children('li:not(.deleted)').each(function(){
        var singleQuantity = Number($(this).find('input').eq(3).val());
        quantity = quantity + singleQuantity;
        price = price + singleQuantity*Number($(this).find('.price').text().replace('$', ''));
    });

    //calculate discount if it has a percentage
        if(discount.val().includes("%")){
            //alert(price.toFixed(2));
            var discounts = discount.val().replace('%','');
            var percentage = (discounts / 100 ) * price.toFixed(2)
            discount.val(percentage);
        }
    //calculate discount if it has a percentage

    cartTotal.text(price.toFixed(2) -discount.val());
    cartCount.find('li').eq(0).text(quantity);
    cartCount.find('li').eq(1).text(quantity+1);
}

function updateCartCount(emptyCart, quantity) {
    if( typeof quantity === 'undefined' ) {
        var actual = Number(cartCount.find('li').eq(0).text()) + 1;
        var next = actual + 1;
        
        if( emptyCart ) {
            cartCount.find('li').eq(0).text(actual);
            cartCount.find('li').eq(1).text(next);
        } else {
            cartCount.addClass('update-count');

            setTimeout(function() {
                cartCount.find('li').eq(0).text(actual);
            }, 150);

            setTimeout(function() {
                cartCount.removeClass('update-count');
            }, 200);

            setTimeout(function() {
                cartCount.find('li').eq(1).text(next);
            }, 230);
        }
    } else {
        var actual = Number(cartCount.find('li').eq(0).text()) + quantity;
        var next = actual + 1;
        
        cartCount.find('li').eq(0).text(actual);
        cartCount.find('li').eq(1).text(next);
    }
}

function updateCartTotal(price, bool) {
    //calculate discount if it has a percentage
        if(discount.val().includes("%")){
            //alert(price.toFixed(2));
            var discounts = discount.val().replace('%','');
            var percentage = (discounts / 100 ) * price.toFixed(2)
            discount.val(percentage);
        }
    //calculate discount if it has a percentage
    bool ? cartTotal.text( (Number(cartTotal.text()) + price -discount.val()).toFixed(2))  : cartTotal.text( (Number(cartTotal.text()) - price -discount.val()).toFixed(2));
}

// Shopping Cart