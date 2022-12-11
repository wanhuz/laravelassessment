<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase result</title>
</head>
<body>
    <h2>Purchase result</h2>

    <div>
        <p>Username: {{$user->username}}</p>
        <p>Mobile: {{$user->mobile}}</p>
        <p>Email: {{$user->email}}</p>
    </div>

    <div>
        Item Purchase and Quantity:

        <table>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
            <tr>
                <td>Pencil</td>
                <td>{{$all_item[0]}}</td>
                <td>{{12 * $all_item[0]}}</td>
            </tr>
            <tr>
                <td>Book</td>
                <td>{{$all_item[1]}}</td>
                <td>{{15 * $all_item[1]}}</td>
            </tr>
            <tr>
                <td>Rule</td>
                <td>{{$all_item[2]}}</td>
                <td>{{2 * $all_item[2]}}</td>
            </tr>
        </table>

    </div>
</body>
</html>