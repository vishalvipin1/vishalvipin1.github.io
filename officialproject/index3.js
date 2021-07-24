let carts = document.querySelectorAll('.add-to-cart');

let products=[
    {
        name:"Printed T-Shirt",
        tag:'pic2',
        price:650,
        incart:0
    },
    {
        name:"Designed Overcoat",
        tag:'girlsovercoat',
        price:520,
        incart:0   
    },
    {
        name:"Patterned Resort T-Shirt",
        tag:'patternedresortdress',
        price:850,
        incart:0   
    },
    {
        name:"Fitted Cardigan",
        tag:'fittedcardignawomen',
        price:999,
        incart:0   
    },
    {
        name:"Kids' Hooded Dressing Gown",
        tag:'hoodeddressinggown',
        price:650,
        incart:0   
    },
    {
        name:"Checked Cotton Blazer",
        tag:'checkedcottonblazer',
        price:520,
        incart:0   
    },
    {
        name:"Coloured T-shirt",
        tag:'pic3',
        price:700,
        incart:0   
    },
    {
        name:"Jean Shorts",
        tag:'pic4',
        price:999,
        incart:0   
    },
    {
        name:"Block-Coloured Hoodie",
        tag:'blockcolorhoodie',
        price:650,
        incart:0   
    },
    {
        name:"Short-Sleeved Sports Top",
        tag:'shortsleevesportstop',
        price:520,
        incart:0   
    },
    {
        name:"Patterned Resort Shirt",
        tag:'patternedresortdress',
        price:850,
        incart:0   
    },
    {
        name:"Round Neck T-Shirt",
        tag:'roundnecktshirtblack',
        price:650,
        incart:0   
    },
    {
        name:"V-Neck T-Shirt Slim Fit",
        tag:'vnecktshirtslim1',
        price:810,
        incart:0   
    },
    {
        name:"Premium Cotton Poplin Shirt",
        tag:'premiumcottonpoplin1',
        price:1020,
        incart:0   
    },
    {
        name:"Zipped Cardigan",
        tag:'zippedcardigan',
        price:1200,
        incart:0   
    },
    {
        name:"Voluminous Resort Shirt",
        tag:'voluminousresortshirt',
        price:999,
        incart:0   
    },
    {
        name:"Linen Bomber Jacket",
        tag:'linenbomberjacket',
        price:950,
        incart:0   
    },
    {
        name:"Jersey Dress",
        tag:'jerseydress',
        price:650,
        incart:0   
    },
    {
        name:"Imitatiom Leather Dress",
        tag:'imitationleatherdress',
        price:520,
        incart:0   
    },
    {
        name:"Balloon Sleeved Dress",
        tag:'balloonsleeveddress',
        price:850,
        incart:0   
    },
    {
        name:"Slik-Blend Knitted Cardigan",
        tag:'silkblendknittedcardigan',
        price:650,
        incart:0   
    },
    {
        name:"Crepe Blouse",
        tag:'crepeblouse',
        price:810,
        incart:0   
    },
    {
        name:"Tailored Trouser",
        tag:'tailoredtrousersbeige',
        price:1020,
        incart:0   
    },
    {
        name:"Denim Jacket",
        tag:'denimjacket',
        price:1200,
        incart:0   
    },
    {
        name:"Silk-Blend Shorts",
        tag:'silkblendshorts',
        price:999,
        incart:0   
    },
    {
        name:"Pull-on Silk Satin Trousers",
        tag:'pullonsilksatintrousers',
        price:950,
        incart:0   
    },
    {
        name:"Smocked Dress",
        tag:'smockeddress',
        price:650,
        incart:0   
    },
    {
        name:"Patterned Poplin Shirt",
        tag:'patternedpoplinshirt',
        price:520,
        incart:0   
    },
    {
        name:"Cotton Jersey Dress",
        tag:'cottonjerseydress',
        price:850,
        incart:0   
    },
    {
        name:"Woven Joggers",
        tag:'wovenjoggers',
        price:650,
        incart:0   
    },
    {
        name:"Black Printed T-Shirt",
        tag:'printedtshirt',
        price:810,
        incart:0   
    },
    {
        name:"Flounce-Trimmed Wrapover Skirt",
        tag:'flouncetrimmedwrapoverskirt',
        price:1020,
        incart:0   
    },
    
    {
        name:"Patterned Sweatshirt Shorts",
        tag:'patternedsweatshirtshortds',
        price:1200,
        incart:0   
    },
    {
        name:"Nylon Cargo Trousers",
        tag:'nuloncargotrousersblack',
        price:810,
        incart:0   
    },
    {
        name:"Jersey Sleeveless Top",
        tag:'sleevelesstopbeige',
        price:1020,
        incart:0   
    },
    {
        name:"Wide Cotton Dress",
        tag:'widecottondressbeige',
        price:1200,
        incart:0   
    },
    {
        name:"Oxford Shirt Muscle Fit",
        tag:'oxfordshirtmusclefitblack',
        price:950,
        incart:0   
    },
    {
        name:"Polo Shirt Slim Fit",
        tag:'poloshirtpattern1',
        price:1100,
        incart:0   
    },
    {
        name:"Sweatshirt Shorts",
        tag:'sweatshirtshortsblack',
        price:730,
        incart:0   
    },
    {
        name:"Patterned T-Shirt",
        tag:'patternedtshirt',
        price:999,
        incart:0   
    },
    {
        name:"Printed Jersey Top",
        tag:'printedjerseytop1',
        price:630,
        incart:0   
    },
    {
        name:"Pocket-Detail Jersey Top",
        tag:'pocketdetailjerseydress',
        price:799,
        incart:0   
    },

    
    


]

for (let i=0; i< carts.length; i++){
    console.log("hello");
    carts[i].addEventListener('click',()=>{
        cartNumbers(products[i]);
        totalCost(products[i]);
        alert('Added to Cart!');
    })
}

function onLoadCartNumbers(){
    let productNumbers=localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('.cartqty').textContent=productNumbers;
    }
}

function cartNumbers(product){

    let productNumbers=localStorage.getItem('cartNumbers');

    productNumbers=parseInt(productNumbers); 

    if(productNumbers){
        localStorage.setItem('cartNumbers',productNumbers+1);
        document.querySelector('.cartqty').textContent=productNumbers+1;
    } else{
        localStorage.setItem('cartNumbers',1);
        document.querySelector('.cartqty').textContent=1;
    }

    setItems(product);
}

function setItems(product){
    let cartItems=localStorage.getItem('productsInCart');
    cartItems=JSON.parse(cartItems);

    if(cartItems!=null){
        if(cartItems[product.tag]==undefined){
            cartItems={
                ...cartItems,
                [product.tag]:product
            }
        }
        cartItems[product.tag].incart+=1;
    } else{
        product.incart=1;
        cartItems={
            [product.tag]:product
        }
    }
    
    localStorage.setItem("productsInCart",JSON.stringify(cartItems));
}

function totalCost(product){
    //console.log("The products price is ",product.price);
    let cartTotalPrice=localStorage.getItem('totalPrice');
    console.log("My cartCost is ",cartTotalPrice);
    console.log(typeof cartTotalPrice);
    if(cartTotalPrice!=null){
        cartTotalPrice=parseInt(cartTotalPrice);
        localStorage.setItem('totalPrice',cartTotalPrice+product.price);
    } else{
        localStorage.setItem('totalPrice',product.price);
    }

}


function clearCart(){
    localStorage.clear();
    alert('Cart Cleared');
    location.href='index.php';
}


function displayCart(){
    let cartItems=localStorage.getItem('productsInCart');
    cartItems=JSON.parse(cartItems);
    let productContainer=document.querySelector(".cart-page .cart");
    let cartTotalPrice=localStorage.getItem('totalPrice');
    cartTotalPrice=JSON.parse(cartTotalPrice);
    console.log(cartItems);
    productContainer.innerHTML='Your Cart is empty.... Products that are added to the cart will be viewed here!';
    if(cartItems && productContainer){

        productContainer.innerHTML=`<tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
        </tr>`;
       
        console.log('running');
        Object.values(cartItems).map(item =>{
            productContainer.innerHTML+=`
            <tr>
                    <td>
                        <div class='cart-info' style='display:flex;flex-wrap:wrap'>
                            <img src="${item.tag}.jpg" alt=''>
                            <div>
                                <p>${item.name}</p>
                                <small>Price: ${item.price}</small>
                                <br>
                            </div>
                        </div>
                    </td>
                    <td><input type='number' value='${item.incart}'></td>
                    <td>${item.price*item.incart}</td>
            </tr>`;
            

        });
        productContainer.innerHTML+=`
        <div class="total-price">
        <script>document.getElementById('clearitems').onclick=()=>{ alert('Cart is Cleared!'); localStorage.clear(); location.href='index.php';};</script>
                <table class='cart'>
                    <tr>
                        <td>Subtotal</td>
                        <td class='subtotal'>₹${cartTotalPrice}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>₹100</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td class='finaltotalprice'>₹${cartTotalPrice+100}</td>
                    </tr>
                    <a href='finaltransactionpage.php'><button style='width:30%;height:50px;border:2px solid black;background-color:lightgreen;border-radius:10px;font-size:larger;'>Submit</button></a>
                    <a href='index.php'><button style='width:30%;height:50px;border:2px solid black;background-color:lightgreen;border-radius:10px;font-size:larger;'>Cancel Order</button></a>
                    <a href='index.php'><button id='clearitems' onclick='localStorage.clear()' style='width:30%;height:50px;border:2px solid black;background-color:lightgreen;border-radius:10px;font-size:larger;'>Clear Cart</button></a>
                </table>
                
            </div>`;
    }

    

}

onLoadCartNumbers();
displayCart();



