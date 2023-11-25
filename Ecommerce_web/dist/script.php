<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        const search_icon = document.getElementsByName('search_icon');
        const search_input = document.getElementsByName('search_input');
        const search_inside = document.getElementsByClassName('search_inside');
        const search_box = document.getElementsByClassName('search_box');
        const sign_ups = document.getElementById('sign_up')

        search_icon[0].addEventListener('click', () => {
        search_input[0].focus();
        search_box[0].classList.toggle('hidden');
        console.log('first')
        });
        search_inside[0].addEventListener('click', (e) => {
            console.log(e.key = 'Enter')
        });

        const shop_now = ()=>{
            window.location.href = "items.php";
        }
        const sign_up = ()=>{
            window.location.href = "sign_up.php";
        }

        const logout = ()=>{
            window.location.href = 'logout.php';
        }

    </script>
</body>
</html>