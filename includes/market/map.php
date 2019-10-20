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
  background: url(img/bgStall.jpg) no-repeat center center ;
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
<div style="margin-left: 390px;margin-bottom: -430px" >
    <table>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=15,$height=40,$section="D"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=20,$end=40,$width=15,$height=40,$section="D"); ?></td>
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
        <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=15,$height=40,$section="B"); ?></td>
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
        <td><?php noDetailsGrave_horizontal($start=1,$end=16,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=16,$end=40,$width=15,$height=40,$section="C"); ?></td>
    </tr> 
    <tr>
        <td><?php noDetailsGrave_horizontal($start=40,$end=60,$width=15,$height=40,$section="C"); ?></td>
    </tr> 
    <tr>
        <td><?php noDetailsGrave_horizontal($start=60,$end=75,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=75,$end=83,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=83,$end=89,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=89,$end=93,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=93,$end=95,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=95,$end=96,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=96,$end=97,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=97,$end=98,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=98,$end=99,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=99,$end=100,$width=15,$height=40,$section="C"); ?></td>
    </tr>
    <tr>
        <td><?php noDetailsGrave_horizontal($start=100,$end=101,$width=15,$height=40,$section="C"); ?></td>
    </tr>
</table>
</div>

<div  style="margin-top: -300px;margin-left: 100px">
      <table>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=1,$end=20,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=20,$end=39,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=39,$end=58,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=50,$end=80,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=80,$end=110,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=110,$end=140,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=140,$end=170,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=170,$end=180,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=180,$end=190,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=190,$end=200,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=200,$end=210,$width=15,$height=40,$section="A"); ?></td>
     </tr>
     <tr>
         <td><?php noDetailsGrave_horizontal($start=210,$end=220,$width=15,$height=40,$section="A"); ?></td>
     </tr>
 </table>
</div> 


</div> 
</div>