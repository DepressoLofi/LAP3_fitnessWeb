
var cart=[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}

function delElement(a){
    cart.splice(a,1);
    displaycart();
}


function displaycart(a){
    let j=0,total=0;
   
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML="Empty";
        document.getElementById("total").innerHTML="$ " +0+ ".00";

    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var{image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$ "+total+".00";
            return(
                `<div class='cart-item'>
                 <div class='row-img'>
                  <img class='rowimg' src=${image}>
                  </div>
                  <p style='font-size:12px;'>${title}</p>
                  <h2 style='font-size:16px;'>$ ${price}.00</h2>` +
                  "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('')
        
    }

    }