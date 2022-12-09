<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Assessment Test</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>


    <form action="/store_purchase.php" method="post">

            <div style="margin-top:50px; margin-bottom: 25px;">
                <label for="cars" >User information</label>
            </div>
            <div>
                <label for="fname">Username:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Email:</label><br>
                <input type="text" id="lname" name="lname"><br>
                <label for="lname">Phone No:</label><br>
                <input type="text" id="lname" name="lname"><br>
            </div>

            <div style="margin-top:50px; margin-bottom: 25px;">
                <label for="cars" >Choose item to buy:</label>
            </div>

            <div>
                <select name="item-type" id="item-type-first">
                    <option value="volvo">Pencil - RM12</option>
                    <option value="saab">Book - RM15</option>
                    <option value="mercedes">Rule - RM2</option> 
                </select>
                <select name="item-quantity" id="item-quantity-first">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div>
                <select name="item-type" id="item-type-first">
                    <option value="volvo">Pencil - RM12</option>
                    <option value="saab">Book - RM15</option>
                    <option value="mercedes">Rule - RM2</option> 
                </select>
                <select name="item-quantity" id="item-quantity-sec">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div>
                <select name="item-type" id="item-type-first">
                    <option value="volvo">Pencil - RM12</option>
                    <option value="saab">Book - RM15</option>
                    <option value="mercedes">Rule - RM2</option> 
                </select>
                <select name="item-quantity" id="item-quantity-third">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div>
                <select name="item-type" id="item-type-first">
                    <option value="volvo">Pencil - RM12</option>
                    <option value="saab">Book - RM15</option>
                    <option value="mercedes">Rule - RM2</option> 
                </select>
                <select name="item-quantity" id="item-quantity-fourth">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </form>


</body>
</html>