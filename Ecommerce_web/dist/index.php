

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoodies by Aslam</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>

    <?php
     session_start();
     if(!isset($_SESSION['username'])){
        header('location:login.php');
     }
    ?>

    <header id="home" class="header h-[100vh] border-b border-[cyan]">
        <nav class="navbar w-full sticky top-0 left-0 h-14 bg-[#240747] text-white flex items-center justify-between px-6 ">
            <div class="logo flex items-center ">
                <a href="#">
                    <img class="h-14 " src="asset/logo.png" alt="">
                </a>
                <a href="#">
                    <span class="text-[1.8rem] text-[#8740f1]">Hoodies shop</span>
                </a>
            </div>
            <ul class="menu w-[25rem] text-center text-xl ">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#product">Shop</a></li>
                <li><a href="#about">Contact</a></li>
            </ul>



            <div class="search_box items-center  relative ">
                <input name="search_input" id="search" class="w-[18rem] inline text-[1.2rem] font-mono rounded border border-[#6934b7] outline-none px-3 bg-[#9dbbc324] h-10 " type="text" placeholder="Search items">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 inline mt-2 h-6 absolute search_inside ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
            </div>


            <div  class="last_items w-[16rem] h-full flex justify-around items-center ">

                <svg name="search_icon" id="search_icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>

                <div class="kart relative ">
                    <div class="kart_store absolute ">1</div>
                    <svg id="kart"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                    
                </div>

                

                 <span class="text-2xl" >|</span> 
                 <button onclick="sign_up()" id="sign_up" class="hover:bg-[#6934b7] w-20 h-8 transition-all duration-[0.3s] ease-linear " >Sign Up</button>
                 <button title="logout" onclick="logout()" id="sign_in" class="hover:bg-[#6934b7] w-20 h-8 transition-all duration-[0.3s] ease-linear " ><?php echo $_SESSION['username']?></button>
                    
 
            </div>
        </nav>
        <main id="" class="home columns-2 h-[calc(100%-3.5rem)] text-white bg-[#252234] px-6 ">
            <div class="left  h-[80%] flex flex-col pt-16 ">
                <div class="heading">
                    <h2 class="text-3xl w-[80%] text-[#748fd4] " >Menswear Founded on Fit, Built on Service, and Focused on Style. However You Fit, Bonobos Fits You.</h2>
                <p>Delivering Comfort as a Priority, Quick and Easy Access<br> to a Wide Variety of Hoodie</p>
                </div>

                <div class="btn">
                    <button class="btn_btn" onclick="shop_now()" >Shop Now</button>
                    <button class="btn_btn" >View Collection</button>
                </div>
                <div class="bottom flex gap-4 mt-14 text-center ">
                    <span>
                        <h3>450+</h3>
                        <p>Collections</p>
                    </span>
                    <span>
                        <h3>0 🥴</h3>
                        <p>Customers</p>
                    </span>
                    <span>
                        <h3>0 🥴 </h3>
                        <p>Review Rating</p>
                    </span>
                </div>

            </div>

            <div class="right h-[80%] flex flex-col relative ">
                <div class="right_box">
                    <div class="circle w-60 h-60 ml-[11.5rem] mt-20 rounded-full bg-[#8740f1] "></div>
                    <img draggable="false" class=" hoodie_img absolute w-[25rem] top-20 left-[7rem] " src="asset/hoodie.png" alt="">
                    <h3 class="text-8xl text-blue-500 " >2023</h3>
                    </div>
                <div class="right_text absolute right-12 top-[8rem] ">
                    <h1 class="hoodddies" >AHYAN</h1>
                </div>
            </div>
            

            <div class=" absolute ">
                <button class="explore bg-[#8740f1] w-[16rem] rounded mt-12 h-12 ml-[-6rem] " >Explore Now</button>
            </div>
        </main>

    </header>


    <section class="benefite h-[100vh] overflow-hidden border-b border-[cyan] bg-[#252234] p-8 px-12 " >
        <div class="benefite_top flex items-center">
            <div class="benefite_left w-[36rem]">
                <h1 class="text-xl text-[rgb(116,143,212)]">-Our Benefite</h1>
                <h2 class="text-6xl  text-white mt-10 " >What Makes Us the Preferred Choice ?</h2>

            </div>
            <div class="benefite_right">
                <div class="box mt-10 bg-[#675f8d] p-4 pl-8 border-l-[0.5rem] rounded-md border-[cyan] ">
                   <p class="text-xl text-white" >
                    we are selling comfortable hoodie with low price; <br>
                    we are selling comfortable hoodie with low price;
                   </p>
                   
                </div>
            </div>
        </div>
        <div class="benefite_bottom gap-2 flex mt-20">
            <div class="features_box">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                  </svg>
                  
                <h2>Easy Payment</h2>
                <p>We are profiding easy payment method and also available cash on delivery, We are profiding easy payment method and also available cash on delivery</p>
            </div>
            <div class="features_box">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  
                  
                <h2>Promo Offer</h2>
                <p>We are profiding easy payment method and also available cash on delivery, We are profiding easy payment method and also available cash on delivery</p>
            </div>
            <div class="features_box">
                <img class="w-10" src="./asset/van.png" alt="">
                  
                <h2>Free Delivery</h2>
                <p>We are profiding easy payment method and also available cash on delivery, We are profiding easy payment method and also available cash on delivery</p>
            </div>
            <div class="features_box">
                <img class="w-10" src="./asset/cube.png" alt="">
                <h2>Easy Return</h2>
                <p>We are profiding easy payment method and also available cash on delivery, We are profiding easy payment method and also available cash on delivery</p>
            </div>
        </div>
        <h2 class="text-center text-3xl text-[white] mt-12 " >For all Location</h2>
    </section>

    <section id="product" class=" h-[100vh] bg-[#252234] border-b border-[cyan] p-8 px-12 ">
        <h1 class="text-center text-white text-4xl mb-8" >Products</h1>
        <div class="product_container gap-4 flex ">

                <?php
                $items =[
                    './asset/Items/item1.jpg',
                    './asset/Items/item2.jpg',
                    './asset/Items/item3.jpg',
                    './asset/Items/item4.jpg',
                    './asset/Items/item5.jpg'
                ];
                foreach($items as $item){
                    echo '<div class="items_boxes border relative border-[#7811d1] w-[20rem] bg-[#02113f] h-[20rem] p-2 px-4 rounded">
                    <h1 class="text-end text-white leading-6">
                        <svg  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                          </svg>
                          <span class="inline-block">4.5</span>
                          
                    </h1>
                    <img class="item_img" src="'.$item.'" draggable="false" alt="">
                    <div class="flex justify-between" >
                        <h1 class="text-xl text-[white] mt-10">Hoodie</h1>
                        <h2 class="text-xl text-[white] mt-10"> &#x20b9; 499</h2>
                    </div>
                </div>';
                }
                ?>

        
            
        </div>
        <button onclick="shop_now()" class=" btn_btn btn_watch text-center w-full text-white text-4xl" >Watch More</button>
    </section>

    <footer id="about" class=" h-[100vh] bg-[#252234] p-8 px-12 ">
        <h1 class="text-center text-white text-4xl mb-16" >About</h1>
        <div class="about flex justify-around ">
            <div class="1st_col w-[20rem] ">
                <div class="logo flex items-center ">
                    <a href="#">
                        <img class="h-14 " src="asset/logo.png" alt="">
                    </a>
                    <a href="#">
                        <span class="text-[1.8rem] text-[#8740f1]">Hoodies shop</span>
                    </a>
                </div>
                <p class="text-white text-md text-center ">
                    This is a largest platform to sell hoodie , <br>
                    we are providing a large level of hoodie cloths 😄
                </p>
                <div class="social flex justify-center items-center gap-4 mt-10">
                    <a target="_blank" href="https://www.instagram.com/genius._code/">
                        <svg class="w-[2rem] h-[2rem]" height="1em" viewBox="0 0 448 512"><style>svg{fill:#a40dce}</style><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    </a>

                    <a target="_blank" href="https://www.linkedin.com/in/aslam-alam-305193286/">
                        <svg class="w-[2rem] h-[2rem]" height="1em" viewBox="0 0 448 512"><style>svg{fill:#3a55df}</style><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                    </a>
                    <a target="_blank" href="https://www.github.com/geniusahyan">
                        <svg class="w-[2rem] h-[2rem]" height="1em" viewBox="0 0 496 512"><style>svg{fill:#0058f0}</style><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                    </a>
                    <a href="mailto:aslamalam078523@gmail.com">
                        <svg class="w-[2rem] h-[2rem]" height="1em" viewBox="0 0 512 512"><style>svg{fill:#9122ec}</style><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                    </a>
                    
                </div>
            </div>

            <div class="2st_col text-white">
                <h1>Contact Us</h1>
                <p>Feel free to contact us for any queries or suggestions.</p>
                <form action="message.php" method="post" class="flex flex-col gap-4 mt-10 " >
                    <input require name="Name" class="w-[18rem] text-[1.2rem] font-mono rounded border border-[#6934b7] outline-none px-3 bg-[#9dbbc324] h-10 "  type="text" placeholder="Name">
                    <input require name="Email" class="w-[18rem] text-[1.2rem] font-mono rounded border border-[#6934b7] outline-none px-3 bg-[#9dbbc324] h-10 "  type="email" placeholder="Email">
                    <textarea require name="message" class="w-[18rem] text-[1.2rem] font-mono rounded border border-[#6934b7] outline-none px-3 bg-[#9dbbc324] h-28 resize-none "  placeholder="Message"></textarea>
                    <button class="btn_btn w-[12rem] " >Send</button>
                </form>
            </div>

        </div>
    </footer>
    <?php
    include_once('./script.php');
    ?>

</body>
</html>