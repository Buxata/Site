<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
        $title = "FizzBuzz";
        include "templates/header.php";
        include "templates/style.html";
  ?>
    <meta charset="utf-8">
    <title>Fizz buzz</title>
  </head>
  <body>

    <div>
      <form action = "fizzbuzz.php" method="get">
        <table>
     
         <tr>
            <th>Fizzbuzz Limit: </th>
            <th> <input type="text" name="lim"> </th>
          </tr>
     
          <tr>
            <td> fizz divider: </td>
            <td> <input type="text" name="fizz"> </td>
          </tr>
     
          <tr>
            <td> buzz divider:</td>
            <td> <input type="text" name="buzz"> </td>
          </tr>
     
        </table>
    
        <input type="submit">
      
    </div>
    </form>
        <br>
        <h6>
        <?php
        $fizzlim = $_GET["lim"];
        $fizz = $_GET["fizz"];
        $buzz = $_GET["buzz"];
        for ($i=1; $i<=$fizzlim; $i++){
          if ($i%$fizz==0 && $i%$buzz ==0) echo "fizzbuzz";
          else if ($i%$fizz==0)echo "fizz";
          else if ($i%$buzz==0)echo "buzz";
          else echo $i;
          echo "<br>";
        }
         ?>
         </h6>

  </body>
  <?php include "templates/footer.php" ?>
</html>
