<!DOCTYPE html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Calci</title>  
    <script type = text/javascript></script>  
    <style></style>  
</head>  
<body>  
    <center>  
   <h1>Simple Calculator</h1>  
   <table>  
       <tr><input id = "display"></tr>  
       <tr><td> <button onclick = fun(0)>0</button></td>  
           <td> <button onclick = fun("(")>(</button></td>  
           <td> <button onclick = fun(")")>)</button></td>  
           <td></td>  
           <td> <button onclick = C()>C</button></td>  
           <td> <button onclick = B()>B</button></td>  
       </tr>  
       <tr><td> <button onclick = fun(7)>7</button></td>  
           <td> <button onclick = fun(8)>8</button></td>  
           <td> <button onclick = fun(9)>9</button></td>  
           <td></td>  
           <td> <button onclick = fun("+")>+</button></td>  
           <td> <button onclick = fun("-")>-</button></td>  
       </tr>  
       <tr><td> <button onclick = fun(6)>6</button></td>  
           <td> <button onclick = fun(5)>5</button></td>  
           <td> <button onclick = fun(4)>4</button></td>  
           <td></td>  
           <td><button onclick = fun("*")>*</button></td>  
            <td><button onclick = fun("/")>/</button></td>  
       </tr>  
       <tr><td> <button onclick = fun(1)>1</button></td>  
           <td> <button onclick = fun(2)>2</button></td>  
           <td> <button onclick = fun(3)>3</button></td>  
           <td></td>  
           <td> <button onclick = fun(".")>.</button></td>  
           <td> <button onclick = res()>=</button></td>  
       </tr>  
    </table>  
    </center>  
</body>  
</html>  



<!-- js part -->

<!DOCTYPE html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Calci</title>  
    <script type = text/javascript>  
        function fun(a)  
        {  
            document.getElementById("display").value+=a;  
        }  
        function C()  
        {  
            document.getElementById("display").value = "";  
        }  
        function B()  
        {  
            var y = document.getElementById("display").value;  
            document.getElementById("display").value = y.slice(0, y.length-1);  
        }  
        function res()  
        {   
            var a = document.getElementById("display").value;  
            document.getElementById("display").value=a+"="+eval(a);  
        }  
    </script>  



<!-- css part -->

    <style>  
        table {  
            background-color: brown;  
            border: 1px solid black;  
            table-layout: fixed;  
            border: 1px solid black;  
            border-spacing: 10px;  
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);  
            border-radius: 10px;  
        }  
        button{  
            padding: 16px;  
            border-radius: 8px;  
        }  
        button:hover{  
            background-color: black;  
            color: white;   
              
        }  
        button:active{  
            transform: scale(0.98);  
            box-shadow:3px 2px 22px 1px rgba(0, 0, 0, 0.24);  
        }  
        #display{  
            width:290px;  
            height:40px;  
            margin: 10px 0;  
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);  
            border-radius: 10px;  
        }  
        #display:hover{  
            background-color: black;  
            color: white;  
        }  
        body{  
            background-color: black;  
        }  
        h1{  
            color: white;  
        }  
        body:hover{  
            background-color: floralwhite;  
        }  
         body:hover h1{  
            color: black;  
              
        }  
    </style>  