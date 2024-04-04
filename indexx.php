<?php 
// $username = $_POST['username'];
// $password= $_POST['password'];
// if($username=="admin"  || $password == 123){
//     echo "login";
// }
// else{
//     echo "not login";
// }


$course="html";

?>
<!-- <input type="checkbox" name="" value="php" id="" <?php echo "php"==$course ? "checked": "" ?>> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">
        <button name="login">login</button>
    </form>
</body>
</html>

<!-- php server scripting language 
developed by Rasmus Lerdorf 1994
php stand for hypertext preprocessor
current version 8.2.4 (php -v)
php databases Mysql, Postgresql Oracle sybase informix 
echo "hello"
print "hello"
print_r()
"hello".123
single line comment //
multi line comment /* */
variable $pass="fcg"
data types 
Scalar(float[is_float()] , int[PHP_INT_MAX,PHP_INT_MIN,PHP_INT_SIZE] , 
boolean,
string[strlen().str_word_count(),strrev(),strpos(),Ucword()]) 
compound Array object
special null
Operators 2+2 operands operator expression 

types of operators on the basis of quantity of operands
unary 1 operand 2++
binary 2 operands 2+2
ternary 3 operands 4>2 ? 'yes':'no'

Arthematic operator + - * / % ++ --
pre post 2++ 

Comparison Operators == != > < >= <=

Logical Operator 
&& AND
|| OR
?

Assignment operators =  += -= *= /= 






-->




<!-- @model YourNamespace.YourViewModel

<h2>Select Category</h2>

<form id="categoryForm" asp-action="YourAction" asp-controller="YourController" method="post">
    @foreach (var categoryName in Model.CategoryNames)
    {
        <div>
            <input type="checkbox" id="@categoryName" name="SelectedCategory" value="@categoryName" @(categoryName == Model.SelectedCategory ? "checked" : "") />
            <label for="@categoryName">@categoryName</label>
        </div>
    }

    <button type="submit">Submit</button>
</form>

@section scripts {
    <script>
        // Add JavaScript validation logic
        document.getElementById("categoryForm").addEventListener("submit", function (event) {
            var selectedCategory = document.querySelector('input[name="SelectedCategory"]:checked');

            if (selectedCategory == null) {
                alert("Please select a category.");
                event.preventDefault(); 
            }
        });
    </script>
} -->
