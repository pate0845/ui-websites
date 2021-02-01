<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter</title>


    <style>
        #color {
            background-color: lightgray;
        }

        #filt {
            list-style-type: none;
            padding: 0;
            margin: 20px;
        }

        #filt li a {
            border: 1px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: lightcoral;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }

        #filt li a:hover:not(.header) {
            background-color: #eee;
        }
    </style>
</head>

<body id="color">
    <h1>Filter Products By</h1>
    <ul id="filt">
        <li><a href="#">Price</a></li>
        <li><a href="#">Brand</a></li>

        <li><a href="#">Ratings</a></li>
        <li><a href="#">Color</a></li>

        <li><a href="#">Material</a></li>
        <li><a href="#">Avaibility</a></li>
        <li><a href="#">Discount</a></li>
    </ul>
    <h1>Sort By</h1>
    <ul id="filt">
        <li><a href="#">Price: Low - High</a></li>
        <li><a href="#">Price: High - Low</a></li>

        <li><a href="#">Ratings: > 3.5</a></li>
        <li><a href="#">Color: Red , white</a></li>

        <li><a href="#">Material: Polyster , cotton</a></li>
        <li><a href="#">Avaibility:In Stock</a></li>
        <li><a href="#">Discount: >50%</a></li>
    </ul>
    <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
</body>

</html>