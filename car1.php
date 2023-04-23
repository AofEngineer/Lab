<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
 
  <title>คำนวนค่างวดรถ</title>
 
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" type="text/javascript"></script>
    
    <script>
          $(document).ready(function(){  

                 // event สำหรับปุ่มคำนวณ
                $("#calstart").click( function (){
                
                       // ราคารถ
                       var carprice = $("#carprice").val();
                       // เงินดาวน์
                       var cardeposit = $("#cardeposit").val();
                       // ดอกเบี้ยต่อเดือน
                       var carinterest = $("#carinterest").val();
                       // จำนวนงวดที่ผ่อน / เดือน
                       var carpay = $("#carpay").val();
                
                
                       // ราคาเงินดาวร์ ราคารถลบเงินดาว จะเหลือเงินที่ต้องกู้
                       var carrealprice =   carprice - cardeposit;
                       
                       // หาดอกเบี้ยต่อเดือนจากราคารถ
                       var carinterestmonth = (carrealprice * parseFloat(carinterest))/100;
                       
                       
                       // หาดอกเบี้ยทั้งหมด ในระยะงวดผ่อน
                       var carinterestall =   carinterestmonth * carpay ;
                       
                       // ราคารวมทั้งหมดที่ต้องจ่าย นำราคารถหลักหักดาวร์ + ดอกเบี้ยทั้งปี
                       var allprice =     carrealprice+carinterestall;
                       
                        // ส่วนแสดงผล
                        $(".res1").html(carrealprice);
                        $(".res2").html(carinterestmonth);
                        //จำนวนเงินที่ต้องผ่อนแต่ละเดือน  ราคารถรวมดอกเบี้ย / เดือน
                        $(".res3").html(allprice/carpay);
                
                
                });

             
          });
    
    </script>
    
    <style>
          /* css สำหรับแต่งหน้าจอ */
          *{margin:0;padding:0;}
          .warp{width:80%;max-width:750px;margin:45px auto;}
          .warp p{padding:5px 5px;}
          .warp span{ display:inline-block;margin-right:2%;width:20%; }
          .warp input{width:70%;padding:3px 5px; border-radius:5px;}
          .warp a{display:inline-block;padding:5px 15px;background:blue;color:#fff;margin-top:10px;text-decoration:none;}
    </style>
 
  </head>
  <body>


     <div class="warp">
     
     <!-- ส่วน 1 Input   -->
         <p><span>ราคารถ</span><input type="text" id="carprice"></p>
         <p><span>เงินดาวน์</span><input type="text" id="cardeposit"></p>
         <p><span>ดอกเบี้ย / เดือน</span><input type="text" id="carinterest"></p>
         <p><span>จำนวนงวด / เดือน</span><input type="text" id="carpay"></p>
      <!-- ส่วน 2 ปุ่มคำนวณ -->  
         <a href="#" id="calstart">คำนวณ</a>
      <!-- ส่วน 3 แสดงผล -->    
         <div style="background:gray;margin-top:15px;">
             <p>ราคารถหลังหักเงินดาวน์ : <span class="res1"></span></p>
             <p>ดอกเบี้ยต่อเดือน : <span class="res2"></span></p>
             <p>ผ่อนเดือนละ : <span class="res3"></span></p>
         </div>
     
     </div>


  </body>
</html>
