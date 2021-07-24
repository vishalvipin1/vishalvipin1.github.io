var cartItems ={};
cartItems.tag="";
cartItems.name="";
cartItems.incart="";
cartItems.eachprice="";

var obj=localStorage.getItem('productsInCart');
var products=JSON.parse(obj);
for(i=0; i<products.length; i++){
    cartItems.tag+=products[i]['tag']+",";
    cartItems.name+=products[i]['name']+",";
    cartItems.eachprice+=products[i]['price']+",";
    cartItems.incart+=products[i]['incart']+",";
}

$.ajax({
    type:'POST',
    url:"default.aspx/Insert_Data",
    dataType:"json",
    contentType: "application/json charset=utf-8",
    data: JSON.stringify(cartItems),
    success: function(){
        console.log('Data has Inserted')
    }
})
