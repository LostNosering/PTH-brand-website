<?php
    include("db/db.php");
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
            
            #ItemImage{
                width: 500px;
                height: 500px;
                padding: 25px;
            }
            
            #ImgLinkf, #ImgLink{
                width: 75px;
                height: 75px;
                padding: 5px 25px;
            }
            
            #ImgLinkf:hover, #ImgLink:hover{
                opacity: 0.5;
                cursor: pointer;
            }
            
            #conImg{
                float: left;
            }
            
            #title{
                padding-top: 50px;
                font-size: 30px;
                text-align: center;
            }
            
            #subtitle{
                padding-bottom: 25px;
                font-size: 15px;
                text-align: center;
                color:gray;
            }
            
            #conSizes{
                margin-left: 675px;
            }
            
            select{
                width: 150px;
                height: 50px;
                font-size: 20px;
                border: 1px solid black;
            }
            
            select:focus{
                border: 1px solid rgb(122, 0, 0);
                background: rgb(250,250,250);
            }
            
            select:hover{
                border: 1px solid rgb(68, 0, 0);
            }
            
            #subToBuy{
                width: 150px;
                height: 50px;
                font-size: 20px;
                border: 1px solid black;
                background: white;
                margin-top:10px;
            }
            
            #subToBuy:hover{
                border: 1px solid rgb(68, 0, 0);
                cursor: pointer;
                background: rgb(240,240,240);
            }
            
            #butToBack{
                width: 150px;
                height: 50px;
                font-size: 20px;
                border: 1px solid black;
                background: rgb(220,220,220);
                margin-top:10px;
            }
            
            #butToBack:hover{
                border: 1px solid rgb(68, 0, 0);
                cursor: pointer;
                background: rgb(240,240,240);
            }
            
            #conPrize{
                float:right;
                font-size: 20px;
                padding: 10px;
                margin-right: 175px;
            }
            
            #conDes{
                width: 250px;
                margin-left:700px;
                font-size: 15px;
            }
            
            #relationImg{
                width: 60px;
                height: 60px;
                margin:10px;
            }
            
            #relationBack{
                width: 550px;
                margin-left: 550px;
            }
        </style>
        <script>
            function ChangeImg(info){
                document.getElementById("ItemImage").src = "img/Items/<?php echo $_GET["i"]; ?>_1_"+info+".png";
            }
        </script>
    </head>
    <body>
        <div id="menu">
            <center><a href="store.php"><img src="img/logotype.png" height="40"/></a></center>
            <div id="menupanel">
                <a href="#"><div>Men</div></a>
                <a href="#"><div>Women</div></a>
                <a href="#"><div>Bestseller</div></a>
                <a href="#"><div>Category</div></a>
            </div>
        </div>
        <div id="content">
            <div id="conImg">
                <?php
                    echo "<img id='ItemImage' src='img/Items/".$_GET["i"]."_1_f.png'/><br/>";
                    echo "<img id='ImgLinkf' src='img/Items/".$_GET["i"]."_1_f.png' onclick='ChangeImg(".'"f"'.")'/>";
                    $x=1;
                    while(file_exists("img/Items/".$_GET["i"]."_1_".$x.".png")){
                        echo "<img id='ImgLink' src='img/Items/".$_GET["i"]."_1_".$x.".png' onclick='ChangeImg(".'"'.$x.'"'.")'/>";
                        $x++;
                    }
                ?>
            </div>
            <div id="conInfo">
                <?php
                    $sql = "SELECT * FROM items WHERE id = '".$_GET["i"]."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<p id='title'>".strtoupper($row["name"])."</p>";
                            echo "<p id='subtitle'>".strtoupper($row["category"])."</p>";
                            $sizes = $row["sizes"];
                            $prize = $row["prize"];
                            $color = $row["color"];
                            $colletion = $row["collection"];
                            $relation = $row["relation"];
                        }
                    }
                    if($relation!=""){
                        $relations = explode(",",$relation);
                        $x=0;
                        echo "<div id='relationBack'><center>";
                        while($x!=count($relations)){
                            echo "<a href='items.php?i=$relations[$x]'><img id='relationImg' src='img/Items/".$relations[$x]."_1_1.png'/></a>";
                            $x++;
                        }
                        echo "</center></div>";
                    }
                ?>
                <div id="conDes" style="<?php if($relation!=""){echo "height:200px;";}else{echo "height:250px;";} ?>">
                    Product Id: <?php echo $_GET["i"]; ?><br/>
                    Color: <?php echo $color; ?><br/>
                    Colletion: <?php echo $colletion; ?>
                </div>
                <div id="conSizes">
                    <select>
                    <?php
                    $sizes = explode(";",$sizes);
                    $cSizes = count($sizes);
                    $x=0;
                    while($x!=$cSizes){
                        
                        $a = explode(":",$sizes[$x]);
                        if($a[1]!=0){
                            echo "<option value='".$a[0]."'>".$a[0]."</p>";
                        }else{
                            echo "<option value='".$a[0]."' disabled>".$a[0]."</p>";
                        }
                        $x++;
                    }
                    
                    ?>
                    </select>
                    <?php
                    echo "<p id='conPrize'>$".strtoupper($prize)."</p>";
                    ?>
                    <br/>
                    <input type="submit" id="subToBuy" value="Add to basket"/>
                    <a href="store.php"><input type="button" id="butToBack" value="View more"/></a>
                </div>
            </div>
        </div>
    </body>
</html>