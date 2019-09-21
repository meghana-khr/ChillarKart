<!DOCTYPE html>
<html>
    <head>
        <title>header</title>
        <style>
            .div1{
                background-color:black;
                height:120px;
                width:auto;
               
            }
            
             .imag1{
                
               border-radius: 10% 60% 10% 5%;
                height: 100px;
                 width: 100px;
                margin-left: 10PX;
               padding-top: 20px;
                display: block;
            }
            .p1{
                color: blue;
                font-family: justify;
                margin-left:10px;
            }
            .b1{
                size: 200px;
               } 
               .f1{
                   margin-left:  590px;
                   margin-right: 250px;

                    margin-bottom:px;
                   }
              t1{
                                border:3px solid lightblue;
                                border-radius: 6px;
                                width:200px;
                                height:30px;
                                padding-top: 10px;
                        }

                        .l1{
                                font-size:23px;
                                font-family:Arial;
                                font-style:Bold;
                                color:white;
                                background-color:black;
                                width:230px;
                                height:35px;
                                border: 4px solid gray;
                        }

                        .l2{
                                font-family:Arial Rounded MT;
                                font-size:22px;
                                font-style:bold;
                                color:grey;
                                display: inline-block;
                                padding-top: 30px;
                                padding-left: 10px;
                                outline: 1px;
                        }
                        .a1{
                                font-family:Arial;
                                font-size:17px;
                                font-style:bold,regular;
                                color:darkblue;
                        }
                        .text{
                            width:200px;
                            height:33px;
                            border: 2px solid grey; 
                                    border-radius: 5px; 
                        }
                        
        </style>
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    
        <header>
    <div class="div1" >
        
        <img src="Logos.png" class="imag1"> 
        <p class="p1"><b>ChillarKart</b></p>
       
            <div style="background-color: red; margin-top: -110px; margin-left:700px;width:360px;margin-right: 350px;">
                  <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search" style="height:35px;width:280px;"><button type="submit" style="height:35px;width:80px;">Submit</button>
          </form>
            </div>
        
        <button type="button" onclick="location.href = 'LOGIN.php';" class="btn btn-primary"style="background-color: black;color :white;float: right;margin-top: -40px;height: 40px;font-size: 25px;margin-right: 170px;width:100px;">SELL</button> 
            <button type="button" onclick="location.href = 'SellItem.php';" class="btn btn-primary"style="background-color: black;color :white;float: right;margin-top: -40px;height: 40px;font-size: 25px;margin-right: 60px;width:100px;">LOGIN</button>
         <button type="button" onclick="location.href = 'MOBILES.php';" class="btn btn-primary"style="background-color: black;color :white;margin-top: -5px;margin-left: 170px;height: 40px;font-size: 20px;width:100px;">Mobiles</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" onclick="location.href = 'Books.php';" class="btn btn-primary"style="background-color: black;color :white;margin-top: -5px;height: 40px;font-size: 20px;width:90px;">Books</button>&nbsp;&nbsp;&nbsp;
        <button type="button" onclick="location.href = 'electronics.php';" class="btn btn-primary"style="background-color: black;color :white;margin-top: -5px;height: 40px;font-size: 20px;width:140px;">Electronics</button>&nbsp;&nbsp;&nbsp;
        <button type="button" onclick="location.href = 'vehicles.php';" class="btn btn-primary"style="background-color: black;color :white;margin-top: -5px;height: 40px;font-size: 20px;width:110px;">Vechiles</button>
        </div>
        </header>      
    <body background="Sell.jpg">
        <div style="background-image:url('web5.jpg'); height:520px;width:500px;margin-right:40px;margin-left: -60px;margin-top:5px; float:right; padding-left: 20px;padding-top:10px;padding-right: 20px; border:10px solid black; border-radius:7px;border-style:double; " >
                                   
            <form action="Item.php" method="Post" enctype="multipart/form-data">
                    <table>
                        <tr>
                    <label class="l2">Item Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="text" name="item_name" placeholder="Enter name of an item"/>
                    </tr>
                    <tr>
                        <label class="l2"> Category </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select class="text" name="Items" placeholder="Select the Category" style="width:200px;">
                                        <option value="Mobiles" name="Mobiles">Mobiles</option>
                                        <option value="Electronics" name="Electronics">Electronics</option>
                                        <option value="Vehicles" name="Vehicles">Vehicles</option>
                                        <option value="Books" name="Books">Books</option>
                                        <option value="Jobs" name="Jobs">Jobs</option>
                                      </select>
                    </tr>
                    </br>
                    <tr>
                    <label class="l2">Qty</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="text" name="qty" placeholder="Enter number of item"/>
                    </tr></br>
                    <tr>
                    <label class="l2">Price</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="text"  name="price" placeholder="Enter Price of an item"/>
                        </tr></br>
                    <tr>
                    <label class="l2">Image</label>
                    <input type="File" name="image" placeholder="Select an Image" value="select an image" style="margin-left:250px;margin-top:-30px;width:200px;border:5px; "/>
                    </tr>
                    
                    <tr>
                    <label class="l2">Phone Number </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="text" name="phone" placeholder="Enter Phone Number"/>
                    </tr></br></br></br>
                    <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp
                    <input value="Sell" type="submit" onclick="location.href = 'index.php';" name="sell" class="l1"/></br>&nbsp&nbsp&nbsp&nbsp&nbsp<br><br><br>
                 
                    </tr>
                     </border>

                    </table>
                    </div>
            </form>                         
            
            
            
            
            
            
        </div>
        
        
        
        
    </body>
    
    
</html>


