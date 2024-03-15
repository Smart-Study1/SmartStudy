<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="navigation">
        <ul>
            <li class="list active" >
                <a href="#">
                    <span class="icon" active>#</span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">#</span>
                    <span class="text">Projects</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">#</span>
                    <span class="text">Contact</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">#</span>
                    <span class="text">About</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">#</span>
                    <span class="text">About</span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>

</body>
<script>
    const list = document.querySelectorAll('.list');
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('active'));
        this.classList.add('active')
    }
    list.forEach((item) => 
    item.addEventListener('click',activeLink));
</script>
<style>
    .navigation{
        opacity: 0;
    }
@media screen and (max-width:500px){
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .navigation{
        position: fixed;
        bottom: 0;
        width: 400px;
        height: 70px;background-color: azure;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        opacity: 1;

    }
    .navigation ul{
        display: flex;
        width: 350px; 
    }
    .navigation ul li{
        position: relative;
        list-style: none;
        width: 70px;
        height: 70px;
        z-index: 1;

    }
    .navigation ul li a{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        text-align: center;
        font-weight: 500;
        text-decoration: none;
        /* color: black; */
    }
    .navigation ul li a .icon{
        position: relative;
        display: block;
        line-height: 75px;
        font-size: 1.5em;
        text-align: center;
        transition: 0.5s;
        color: black;
    }
    .navigation ul li.active a .icon{
        transform: translateY(-35px);
    }
    .navigation ul li a .text{
            position: relative;
            color: black;
            font-weight: 400;
            font-size: 0.75em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            opacity: 0;
            transform: translateY(10px);
        }
        .navigation ul li.active a .text{
            opacity: 1;
            transform: translateY(-30px);
            position: relative;
            color: black;
            z-index: 2;
    
        }
    .indicator{
        position: absolute;
        top: -50%;
        width: 70px;
        height: 70px;
        background: green;
        border-radius: 50%;
        border: 2px solid transparent;
        transition: 0.5s;
    }

    .navigation ul li:nth-child(1).active ~ .indicator{
        transform: translateX(calc(70px*0));
    }
    .navigation ul li:nth-child(2).active ~ .indicator{
        transform: translateX(calc(70px*1));
    }
    .navigation ul li:nth-child(3).active ~ .indicator{
        transform: translateX(calc(70px*2));
    }
    .navigation ul li:nth-child(4).active ~ .indicator{
        transform: translateX(calc(70px*3));
    }
    .navigation ul li:nth-child(5).active ~ .indicator{
        transform: translateX(calc(70px*4));
    }
}

@media screen and (max-width:400px){
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .navigation{
        position: fixed;
        bottom: 0;
        width: 365px;
        height: 70px;background-color: azure;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        opacity: 1;
    }
    .navigation ul{
        display: flex;
        width: 350px; 
    }
    .navigation ul li{
        position: relative;
        list-style: none;
        width: 70px;
        height: 70px;
        z-index: 1;

    }
    .navigation ul li a{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        text-align: center;
        font-weight: 500;
        text-decoration: none;
        /* color: black; */
    }
    .navigation ul li a .icon{
        position: relative;
        display: block;
        line-height: 75px;
        font-size: 1.5em;
        text-align: center;
        transition: 0.5s;
        color: black;
    }
    .navigation ul li.active a .icon{
        transform: translateY(-40px);
    }
    .navigation ul li a .text{
            position: relative;
            color: black;
            font-weight: 400;
            font-size: 0.75em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            opacity: 0;
            transform: translateY(10px);
        }
        .navigation ul li.active a .text{
            opacity: 1;
            transform: translateY(-30px);
            position: relative;
            color: black;
            z-index: 2;
    
        }
    .indicator{
        position: absolute;
        top: -50%;
        width: 70px;
        height: 70px;
        background: green;
        border-radius: 50%;
        border: 2px solid transparent;
        transition: 0.5s;
    }
    .navigation ul li:nth-child(1).active ~ .indicator{
        transform: translateX(calc(70px*0));
    }
    .navigation ul li:nth-child(2).active ~ .indicator{
        transform: translateX(calc(70px*1));
    }
    .navigation ul li:nth-child(3).active ~ .indicator{
        transform: translateX(calc(70px*2));
    }
    .navigation ul li:nth-child(4).active ~ .indicator{
        transform: translateX(calc(70px*3));
    }
    .navigation ul li:nth-child(5).active ~ .indicator{
        transform: translateX(calc(70px*4));
    }
    
}
@media screen and (max-width:350px){
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .navigation{
        position: fixed;
        bottom: 0;
        width: 310px;
        height: 70px;background-color: azure;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        opacity: 1;

    }
    .navigation ul{
        display: flex;
        width: 300px; 
    }
    .navigation ul li{
        position: relative;
        list-style: none;
        width: 60px;
        height: 70px;
        z-index: 1;

    }
    .navigation ul li a{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        text-align: center;
        font-weight: 500;
        text-decoration: none;
        /* color: black; */
    }
    .navigation ul li a .icon{
        position: relative;
        display: block;
        line-height: 75px;
        font-size: 1.5em;
        text-align: center;
        transition: 0.5s;
        color: black;
    }
    .navigation ul li.active a .icon{
        transform: translateY(-40px);
    }
    .navigation ul li a .text{
            position: relative;
            color: black;
            font-weight: 400;
            font-size: 0.75em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            opacity: 0;
            transform: translateY(10px);
        }
        .navigation ul li.active a .text{
            opacity: 1;
            transform: translateY(-30px);
            position: relative;
            color: black;
            z-index: 2;
    
        }
    .indicator{
        position: absolute;
        top: -50%;
        width: 60px;
        height: 60px;
        background: green;
        border-radius: 50%;
        border: 2px solid transparent;
        transition: 0.5s;
    }
    .navigation ul li:nth-child(1).active ~ .indicator{
        transform: translateX(calc(60px*0));
    }
    .navigation ul li:nth-child(2).active ~ .indicator{
        transform: translateX(calc(60px*1));
    }
    .navigation ul li:nth-child(3).active ~ .indicator{
        transform: translateX(calc(60px*2));
    }
    .navigation ul li:nth-child(4).active ~ .indicator{
        transform: translateX(calc(60px*3));
    }
    .navigation ul li:nth-child(5).active ~ .indicator{
        transform: translateX(calc(60px*4));
    }
    
}
    
    
</style>
</html>