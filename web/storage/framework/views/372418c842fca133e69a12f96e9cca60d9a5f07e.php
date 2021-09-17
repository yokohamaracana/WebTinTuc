<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        const endpoint = 'http://localhost/Coffe/public/api/v1/category/1';
fetch(endpoint)
.then((response) => response.json())
     .then((data) => console.log(data));
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/testApi.blade.php ENDPATH**/ ?>