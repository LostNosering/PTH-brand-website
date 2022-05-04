<?php
include("../../db/db.php");
if($_GET["t"]=="all"){
    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<a href='items.php?i=".$row["id"]."'><div class='Iback' id='".$row["category"]."'><img src='../../img/Items/".strtoupper($row["id"])."_1_1.png' width='200' height='200'/>";
            echo "<div style='width:200px;text-align:center;font-size:15px;'>".strtoupper($row["name"])."</div>";
            echo "<div style='width:200px;text-align:center;font-size:15px;'>$".strtoupper($row["prize"])."</div>";
            echo "</div></a>";
        }
    }
}else{
    $sql = "SELECT * FROM items WHERE category='".$_GET["t"]."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<a href='items.php?i=".$row["id"]."'><div class='Iback' id='".$row["category"]."'><img src='../../img/Items/".strtoupper($row["id"])."_1_1.png' width='200' height='200'/>";
            echo "<div style='width:200px;text-align:center;font-size:15px;'>".strtoupper($row["name"])."</div>";
            echo "<div style='width:200px;text-align:center;font-size:15px;'>$".strtoupper($row["prize"])."</div>";
            echo "</div></a>";
        }
    }
}

?>
<style>
    .Iback{
        width: 200px;
        height: 250px;
        margin:10px;
        float:left;
    }
    
    .Iback:hover{
        background: rgb(250,250,250);
    }
    
    .Iback:hover div{
        color: grey;
    }
</style>