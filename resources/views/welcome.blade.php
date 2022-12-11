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
        @csrf

            <div style="margin-top:50px; margin-bottom: 25px;">
                <label for="cars" >User information</label>
            </div>
            <div>
                <label for="fname">Username:</label><br>
                <input type="text" name="username"><br>
                <label for="email">Email:</label><br>
                <input type="text" name="email"><br>
                <label for="lname">Phone No:</label><br>
                <input type="text" name="mobile"><br>
            </div>

            <div style="margin-top:50px; margin-bottom: 25px;">
                <label for="cars" >Choose item to buy:</label>
            </div>

            <div>
                <select name="itemtype[1]">
                    <option value="pencil">Pencil - RM12</option>
                    <option value="book">Book - RM15</option>
                    <option value="rule">Rule - RM2</option> 
                </select>
                <select name="itemquantity[1]">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div>
                <select name="itemtype[2]">
                    <option value="pencil">Pencil - RM12</option>
                    <option value="book">Book - RM15</option>
                    <option value="rule">Rule - RM2</option> 
                </select>
                <select name="itemquantity[2]">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div>
                <select name="itemtype[3]">
                    <option value="pencil">Pencil - RM12</option>
                    <option value="book">Book - RM15</option>
                    <option value="rule">Rule - RM2</option> 
                </select>
                <select name="itemquantity[3]">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div>
                <select name="itemtype[4]">
                    <option value="pencil">Pencil - RM12</option>
                    <option value="book">Book - RM15</option>
                    <option value="rule">Rule - RM2</option> 
                </select>
                <select name="itemquantity[4]">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <button style="margin-top: 15px;">Submit purchase</button>
        </form>


</body>
</html>