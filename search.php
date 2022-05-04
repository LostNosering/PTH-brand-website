<?php
if(!isset($_GET["g"])){
    header("Location: search.php?g=m&s=".$_GET["s"]);
}
?>
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
            
            #collection{
                width: 1100px;
                margin: 0 auto;
                height: 50px;
            }
            
            #collection center p{
                margin: 10px;
            }
            
            #collection center p:hover{
                cursor: pointer;
            }
        </style>
        <script>
            function loadItems(){
                if(document.getElementById("search").value==""){
                    $("#content").load("script/php/loadItemsC.php?s=all&g=<?php echo $_GET["g"]; ?>");
                }else{
                    $("#content").load("script/php/loadItemsC.php?s="+document.getElementById("search").value+"&g=<?php echo $_GET["g"]; ?>");
                }
            }
        </script>
    </head>
    <body onload="loadItems()">
        <div id="menu">
            <center><a href="store.php"><img src="img/logotype.png" height="40"/></a></center>
            <div id="menupanel">
                <a href="#"><div>Men</div></a>
                <a href="#"><div>Women</div></a>
                <a href="#"><div>Bestseller</div></a>
                <a href="#"><div>Category</div></a>
            </div>
        </div>
        <div id="SearchBar">
            <input type="search" id="search" placeholder="Search" onsearch="loadItems()" value="<?php echo $_GET["s"]; ?>"/>
        </div>
        
        <div id="content">
            
        </div>
    </body>
</html>