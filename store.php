<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            *{margin: 0;font-family: 'Lato', sans-serif;color:black;}
            
            a:active, a:hover, a:focus, a:visited, a{
                text-decoration: none;
                transition: 0.5s all;
            }
            
            #menu a:hover{
                text-shadow: 0 1px rgb(51,51,51), 0 2px rgb(102,102,102), 0 3px rgb(153,153,153), 0 4px rgb(204,204,204), 0 5px rgb(255,255,255);
            }
            
            #menu{
                width: 100%;
                height: 160px;
            }
            
            #menu img{
                padding: 10px;
                text-align: center;
            }
            
            #menu a div{
                float: left;
                padding: 18px;
                font-size: 16px;
            }
            
            #menupanel{
                width: 370px;
                height: 80px;
                margin: 0 auto;
            }
            
            #content{
                width: 1100px;
                margin: 0 auto;
            }
            
            #SearchBar{
                margin: 0 auto;
                width: 300px;
            }
            
            #SearchBar input{
                width: 300px;
                font-size: 17px;
                text-align: center;
                padding: 5px;
                border: 1px grey solid;
            }
            
            #SearchBar input[type=submit]{
                width:0;
                height:0;
                padding: 0;
                border: 0 solid black;
            }
            
            #category{
                width: 1100px;
                margin: 0 auto;
                height: 45px;
            }
            
            #category p{
                float: left;
                padding: 10px 71px;
            }
            
            #category p:hover{
                cursor: pointer;
                color:grey;
            }
        </style>
        <script>
            function loadItems(think){
                $("#content").load("script/php/loadItems.php?t="+think);
            }
        </script>
    </head>
    <body onload="loadItems('all')">
        <div id="menu">
            <center><img src="img/logotype.png" height="40"/></center>
            <div id="menupanel">
                <a href="#"><div>Men</div></a>
                <a href="#"><div>Women</div></a>
                <a href="#"><div>Bestseller</div></a>
                <a href="#"><div>Category</div></a>
            </div>
        </div>
        <div id="SearchBar">
            <form method="get" action="search.php">
                <input type="search" id="search" placeholder="Search" name="s" />
                <input type="submit"/>
            </form>
        </div>
        
        <div id="category">
            <p onclick="loadItems('all')">All</p>
            <p onclick="loadItems('Tshirt')">T-shirt</p>
            <p onclick="loadItems('dadhat')">Dad Hat</p>
            <p onclick="loadItems('Pants')">Pants</p>
            <p onclick="loadItems('Shirt')">Shirt</p>
            <p onclick="loadItems('Other')">Other</p>
        </div>
        
        <div id="content">
        </div>
    </body>
</html>