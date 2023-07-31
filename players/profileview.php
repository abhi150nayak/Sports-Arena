
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html>
<style>
    ul > li{margin-right:45px;font-weight:lighter;cursor:pointer}
li.active{border-bottom:3px solid silver;}

.item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
.menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
.btn-success{width:100%;border-radius:0;}
.section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
.title-price{margin-top:30px;margin-bottom:0;color:black}
.title-attr{margin-top:0;margin-bottom:0;color:black;}
.btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
.btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
div.section > div {width:100%;display:inline-flex;}
div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
.attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
.attr.active,.attr2.active{ border:1px solid orange;}

@media (max-width: 426px) {
    .container {margin-top:0px !important;}
    .container > .row{padding:0 !important;}
    .container > .row > .col-xs-12.col-sm-5{
        padding-right:0 ;    
    }
    .container > .row > .col-xs-12.col-sm-9 > div > p{
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .container > .row > .col-xs-12.col-sm-9 > div > ul{
        padding-left:10px !important;
        
    }            
    .section{width:104%;}
    .menu-items{padding-left:0;}
}
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 item-photo">
                <img style="max-width:60%;" src="../management/controller/<?php echo $row['image'];?>">
            </div>
            <div class="col-xs-5" style="border:0px solid gray">
                <h3 style="font-size: 30px;"><?php echo $row['name'];?></h3>    
                <div class="section">
                    <h5 style="font-size: 20px;"><?php echo $row['rollno'];?></h5>                   
                    <h5 style="font-size: 20px;"><?php echo $row['course'];?></h5>
                    <h5 style="font-size: 20px;"><?php echo $row['event'];?></h5>
                    <h5 style="font-size: 20px;"><?php echo $row['phone'];?></h5>
                    <h5 style="font-size: 20px;"><?php echo $row['email'];?></h5>
                </div>                                         
            </div>                              
            <div class="col-xs-9">
                <ul class="menu-items">
                    <li class="active"><a href="a.php">Events</a></li>
                    
                    <li><a href="c.php">Special</a></li>   
                </ul>
                <div style="width:100%;border-top:1px solid silver">
                    <p style="padding:15px;">
                    <table class="table table-stripped table-advance table-hover" border=2>
                        <thead>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Place</th>
                        </thead>
                        <tbody>
                            <?php 
                            $mstmt = $admin -> ret("SELECT * FROM `event` WHERE players like '%".$result."%'");
                             while($srow = $mstmt->fetch(PDO::FETCH_ASSOC)){?>
                            <tr>
                                <td><?php echo $srow['tournament_name'];?></td>
                                <td><?php echo $srow['ev_date'];?></td>
                                <td><?php echo $srow['place'];?></td> 
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </p> 
                </div>
            </div>		
        </div>
    </div>        
</body>
</html>
<script>
       $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 
</script>