<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
 
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            max-width: 100%;
            text-align: center;
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        div {
            margin-bottom: 16px;
        }

        span {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form action="index.php" method="post">
       <div>
         <label for="name">Name:</label>
        <input type="text" id="name" name="name">
       </div>

        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
        </div>

        <div>
          <span>Gender:</span>
          <label for="male">Male</label>
          <input type="radio" id="male" name="gender" value="Male" />
          <label for="female">Female</label>
          <input type="radio" id="female" name="gender" value="Female" />
        </div>

        <div>
          <label for="agree">Receive email</label>
          <input type="checkbox" name="recieve" id="agree"/>
        </div>

        <button type="submit" name="submit-btn">Submit</button>
    </form>
    

</body>
</html>
