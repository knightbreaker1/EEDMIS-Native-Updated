<style type="text/css"> 

.scroll {
       width: auto;
    height:auto;
    border: thin solid black;
   /* overflow-: hidden; 
    overflow-y: auto;*/
    overflow: auto;
}
/*.bgimg {
    background-image: url('img/bgCemetery.jpg');
    /*background-color: #52575a;*/
    /*padding: 40px;*/
/*}*/

.bgimg {
  background: url(img/bgCemetery.jpg) no-repeat center center ;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding: 50px;
}
 .graveborder { 
        font-size: 8px;
        font-weight: bolder;
        border-width:1px;
        border-style:solid;
        border-bottom-color:#aaa;
        border-right-color:#aaa;
        border-top-color:#ddd;
        border-left-color:#ddd;
        border-radius:3px;
        -moz-border-radius:3px;
        -webkit-border-radius:3px;
        /*border:.5px solid #ddd;*/
        /*border-color: #eee; */
        /*border-style: solid;*/

    /*  border-style: solid;
        border-left: 1px solid #4e514e;
        border-right: 1px solid #4e514e;
        border-top: 1px solid #4e514e;
        border-bottom: 1px solid #4e514e;*/
        /*border-radius: 100px 0px 100px 0px;*/
        margin:0px;
        padding:0px;
    }
    .gravebg {
        background-color: #fff;
        color: #000;
        text-align: center;
    }
</style>
<?php include 'map_function.php';?>
<div class="scroll">
<div class=" bgimg"  >
<div style="margin-left: 800px;margin-bottom: -430px" >
    <table>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=30,$height=40,$section="D"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=20,$end=40,$width=35,$height=40,$section="D"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=40,$end=60,$width=15,$height=40,$section="D"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=60,$end=80,$width=15,$height=40,$section="D"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=80,$end=100,$width=15,$height=40,$section="D"); ?></td>
    </tr>
</table>
<table>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=35,$height=40,$section="B"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=20,$end=40,$width=15,$height=40,$section="B"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=40,$end=60,$width=15,$height=40,$section="B"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=60,$end=80,$width=15,$height=40,$section="B"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=80,$end=100,$width=15,$height=40,$section="B"); ?></td>
    </tr>
</table> 
</div>
    <div  >
        <table>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=1,$end=16,$width=30,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=16,$end=40,$width=30,$height=40,$section="C"); ?></td>
    </tr> 
    <tr>
        <td><?php noDetailsGrave_horizontal($start=1,$end=25,$width=30,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=16,$end=40,$width=30,$height=40,$section="C"); ?></td>
    </tr> 
    <tr>
        <td><?php noDetailsGrave_horizontal($start=1,$end=25,$width=30,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=16,$end=40,$width=30,$height=40,$section="C"); ?></td>
    </tr> 
    <tr>
        <td><?php noDetailsGrave_horizontal($start=1,$end=25,$width=30,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=16,$end=40,$width=30,$height=40,$section="C"); ?></td>
    </tr> 
    <tr>
        <td><?php noDetailsGrave_horizontal($start=1,$end=25,$width=30,$height=40,$section="C"); ?></td>
    </tr>

</table>
</div>

<div  style="margin-top: 80px;margin-left: 20px">
      <table>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=50,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=20,$end=39,$width=50,$height=40,$section="A"); ?></td>
     </tr>
    <tr>
         <td><?php noDetailsGrave_horizontal($start=39,$end=60,$width=50,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=60,$end=80,$width=50,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=80,$end=100,$width=50,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=50,$height=40,$section="4"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=50,$height=40,$section="4"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=50,$height=40,$section="4"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=50,$height=40,$section="4"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=50,$height=40,$section="4"); ?></td>
     </tr>
 </table>
</div> 


</div> 
</div>

</body>
</html>

<?php

	

?>
