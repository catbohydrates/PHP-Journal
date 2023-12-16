<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">
    <style>
        form {
            text-align: left;
            max-width: 400px; /* Adjust the max-width as needed */
            margin: 0 auto; /* Center the form horizontally */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgb(64, 41, 54);
            background-color: #;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4CAF50;
        }
    </style>
    <title>Submit Post</title>
</head>
<body>
    <?php include("html/header.html");?>
    <blockquote><i><i class="fa-solid fa-bullhorn"></i> To delete your post, fill out the information below</i></blockquote>
    <hr>
    <br>
    <form action="includes/deletesubmission.php" method="post">
        <label>ID of the post:</label>
        <input type="number" name="id">
        
        <button type="submit" name="submit">Submit</button>
    </form>  
</body>
</html>
