function addtowishlist(e){
    e.classList.toggle("fa-heart-o");
    e.classList.toggle("fa-heart");
    if (e.style.color === "red") {
        e.style.color = "black";
      } else {
        e.style.color = "red";
      }
    
}


function searchproduct(){
  let input = document.getElementsByClassName('searchproduct')[0].value;
  input=input.toLowerCase();
  let product = document.getElementsByClassName('product');
  let name = document.getElementsByClassName('productname');
  let no_items = document.getElementsByClassName('no-items')[0];
  for (i = 0; i < product.length; i++) { 
      if (!name[i].innerHTML.toLowerCase().includes(input)) {
          product[i].style.display="none";
      }
      else {
          product[i].style.display="list-item"; 
          product[i].style = "list-style: none;";                
      }
  }
  var productcount = 0;
  for (i = 0; i < product.length; i++) { 
    if (product[i].style.display!="none"){
      productcount++;
    }
  }
  if (productcount>0){
    no_items.style.display="none";
  }
  else {
    no_items.style.display="block";
  }
}

function price_range(){
  var range = document.getElementById("price-range");
  var span = document.getElementById("price-range-value");

  let product = document.getElementsByClassName('product');
  let price = document.getElementsByClassName('prices');
  let no_items = document.getElementsByClassName('no-items')[0];

  span.innerHTML = `less than $${range.value}`;

  for (i = 0; i < product.length; i++) { 
    if (!(parseInt(price[i].innerHTML.slice(8,product[i].length))<range.value)) {
        product[i].style.display="none";
    }
    else {
        product[i].style.display="list-item"; 
        product[i].style = "list-style: none;";                
    }
    }
    var productcount = 0;
    for (i = 0; i < product.length; i++) { 
      if (product[i].style.display!="none"){
        productcount++;
      }
    }
    if (productcount>0){
      no_items.style.display="none";
    }
    else {
      no_items.style.display="block";
    }
  }
