const type = document.querySelectorAll('#type');
// chon theo loai
type.forEach(element => {
    element.addEventListener('click', (e) => {
<<<<<<< HEAD
        console.log("rr");
        addComment(element.dataset.type)
    });
});

async function addComment(type) {
    const url = './api/product/story';
  
=======
        addComment(element.dataset.type, element.dataset.userid);
    });
});

async function addComment(type, user) {
    const url = './api/product/story';

>>>>>>> kien_nhomE
    const data = { type: type };
    const token = document.querySelector('meta[name=csrf-token]').getAttribute('content');
    const response = await fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify(data)
    });
    // Xu ly ket qua va hien thi giao dien
    const result = await response.json();
    // const commentsList = document.querySelector('.product-grid');
    const list = document.querySelector('.tt');
<<<<<<< HEAD
    list.innerHTML ='';
=======
    list.innerHTML = '';
>>>>>>> kien_nhomE
    // commentsList.innerHTML = '';
    // <img href="{{ url('/products/'.$value->product_id.'/'.$value->manu_id) }}"
    // src="{{ asset('img/'.$value->image) }}" alt="" style="height: 225px;">
    result.forEach(element => {
        list.innerHTML += `
    
  
      

<div class="product-item women">
<div class="product product_filter">
    <div class="product_image">
     

<<<<<<< HEAD
            <img src="img/${element.image}" style="height: 225px;" alt="">
    </div>
 
   
    <form action="{{ url('/others/index/'.$value->product_id.'/0') }}" method="get">
=======
            <img src="img/${element.image}"  style="height: 200px;" alt="">
    </div>
 
   
    <form action="{{ url('/others/index/'.$value->product_id.'/${user}) }}" method="get">
>>>>>>> kien_nhomE

        <div class="product-btns">
            <button name="action" value="wishlist" class="add-to-wishlist"><i
                    class="fa fa-heart-o"></i><span class="tooltipp"></span></button>
        </div>
    </form>
  
<<<<<<< HEAD
    <form action="others/index/${element.product_id}/1"
=======
    <form action="others/index/${element.product_id}/${user}"
>>>>>>> kien_nhomE
        method="get">
        <div class="product-btns">
         
            <button name="action" value="wishlist" class="add-to-wishlist"><i
                    style="color:red;" class="fa fa-heart-o"></i><span
                    class="tooltipp"></span></button>
           
           
           
        </div>
    </form>
  
    <div
        class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
<<<<<<< HEAD
   
        <div class="product-label">
            <span class="sale">10%</span>
            <span class="new">NEW</span>
        </div>
        
        <div class="product-label">
            <span class="new">NEW</span>
        </div>
        
=======
        
        <div class="product-label">
            <span class="sale">${element.sale} %</span>
           
        </div>
        
       
        
>>>>>>> kien_nhomE
    </div>
    <div class="product_info">

    <h6 class="product_name"><a href="products/${element.product_id}/${element.manu_id}"> ${element.product_name} </a></h6>
      
     
<<<<<<< HEAD
        <h6 class="product_price">
         
        </h6>
      
        <h6 class="product_price">${element.price}</h6>
=======
       
      
        <h6 class="product_price">${element.price}đ</h6>
>>>>>>> kien_nhomE
      
    </div>
</div>
<div class="red_button add_to_cart_button">
    <a href="carts/add/${element.product_id}/">
        </i> add to cart</button>

<<<<<<< HEAD
        <div class="red_button add_to_cart_button"><a href="carts/add/${element.product_id}/">add to cart</a></div>
=======
      
>>>>>>> kien_nhomE
    </a></div>
</div>

   

           
      
        `;
<<<<<<< HEAD
    });
  
=======


    });

>>>>>>> kien_nhomE
}





<<<<<<< HEAD


=======
{/* <div class="red_button add_to_cart_button"><a href="carts/add/${element.product_id}/">add to cart</a></div> */ }
>>>>>>> kien_nhomE
{/* <div class="product-item men">
<div class="product discount product_filter">
    <div class="product_image">
  
        <img src="img/${element.image}" style="height: 225px;" alt="">
    </div>
    
    <div class="favorite favorite_left"></div>
    <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
    <div class="product_info">
        <h6 class="product_name"><a href="products/${element.product_id}/${element.manu_id}"> ${element.product_name} </a></h6>
        <div class="product_price">${element.price}<span>$590.00</span></div>
    </div>
</div>

<div class="red_button add_to_cart_button"><a href="carts/add/${element.product_id}/">add to cart</a></div>
</div> */}
