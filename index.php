<DOCTYPE html!>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Pirata+One" rel="stylesheet">
        <style>
            *{margin: 0;font-family: 'Pirata One', cursive;color:white;}
            
            a:active, a:hover, a:focus, a:visited, a{
                text-decoration: none;
            }
            
            body{
                background: url("img/cback.png");
                background-size:500px;
                -webkit-animation: Background 5s infinite linear;
                animation: Background 5s infinite linear;
            }
            
            @keyframes Background {
                from {background-position: 0px 0px;}
                to {background-position: 0px 100%;}
            }
            
            @-webkit-keyframes example {
                from {background-position: 0px 0px;}
                to {background-position: 0px 100%;}
            }
            
            #content{
                width:100%;
                height: 300px;
                padding-top: 150px;
                margin: 0 auto;
                background: black;
                box-shadow: 0 20px 20px black;
            }
            
            #logo{
                width: 300px;
                margin: 0 auto;
                margin-bottom: 50px;
            }
            
            #menu{
                width:450px;
                height: 30px;
                margin: 0 auto;
                font-size: 25px;
                letter-spacing: 1px;
            }
            
            #menu div{
                width:150px;
                
                float: left;
            }
            
            #webstorel{
                transition: 0.3s all;
                text-align: left;
            }
            
            #webstorel:hover{
                text-shadow: 0 1px rgb(210,210,210), 0 2px rgb(197,197,197), 0 3px rgb(185,185,185), 0 4px rgb(172,172,172), 0 5px rgb(160,160,160), 0 6px rgb(147,147,147), 0 7px rgb(135,135,135), 0 8px rgb(122,122,122), 0 9px rgb(110,110,110);
            }
            
            #contactl{
                transition: 0.3s all;
                text-align: right;
            }
            
            #contactl:hover{
                text-shadow: 0 1px rgb(210,210,210), 0 2px rgb(197,197,197), 0 3px rgb(185,185,185), 0 4px rgb(172,172,172), 0 5px rgb(160,160,160), 0 6px rgb(147,147,147), 0 7px rgb(135,135,135), 0 8px rgb(122,122,122), 0 9px rgb(110,110,110);
            }
            
            #litemsl{
                transition: 0.3s all;
                text-align: center;
            }
            
            #litemsl:hover{
                text-shadow: 0 1px rgb(210,210,210), 0 2px rgb(197,197,197), 0 3px rgb(185,185,185), 0 4px rgb(172,172,172), 0 5px rgb(160,160,160), 0 6px rgb(147,147,147), 0 7px rgb(135,135,135), 0 8px rgb(122,122,122), 0 9px rgb(110,110,110);
            }   
            
            #litemslback{
                position: absolute;
                width:260px;
                margin: 0 90px;
            }   
            
        </style>
    </head>
    
    <body>
        <div id="content">
            
            <div id="logo"><img src="img/logotype2.png" width="300" height="auto"/></div>
            <div id="menu">
                <a id="webstorel" href="store.php"><div id="leftmenu">Web Store</div></a>
                <a id="litemsl" href="#"><div id="middlemenu">Collection</div></a>
                <a id="contactl" href="#"><div id="rightmenu">Items</div></a>
            </div><br/><a href="lilpeep.php" style="color:black">lilpeep</a>
        </div>
    </body>
</html>