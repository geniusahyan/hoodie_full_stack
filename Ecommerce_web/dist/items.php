<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoodie</title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="style.css">
    <script src="items.js" defer ></script>
</head>
<body >
<section id="product" class=" bg-[#252234] border-b border-[cyan] p-8 px-12 ">
        <h1 class="text-center text-white text-4xl mb-8" >Products</h1>
        <div class="product_container flex-wrap gap-4 justify-center flex ">

                <?php
                $items =[
                    './asset/Items/item1.jpg',
                    './asset/Items/item2.jpg',
                    './asset/Items/item3.jpg',
                    './asset/Items/item4.jpg',
                    './asset/Items/item1.jpg',
                    './asset/Items/item3.jpg',
                    './asset/Items/item4.jpg',
                    './asset/Items/item1.jpg',
                    './asset/Items/item2.jpg',
                    './asset/Items/item3.jpg',
                    './asset/Items/item4.jpg',
                    './asset/Items/item5.jpg'
                ];
                foreach($items as $item){
                    echo '<div class="items_boxes border border-[#7811d1] w-[14rem] bg-[#02113f] h-[20rem] p-2 px-4 rounded">
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
    </section>
</body>
</html>