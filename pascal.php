<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <?php
          $title = "Pascal Triangle";
          include "templates/header.php";
    ?>
    <style>
    p{
      text-align: center;
    }
    </style>
    <meta charset="utf-8">
    <title>Pascal triangle</title>
  </head>
  <body>
    This will create a pascal triangle. I will make it pretty in the future, but it's just this for now.

    <form action="pascal.php" method="get">
      How many rows, would you like your pascal triangle to have? <br>
      <input type="number" name="num" value="25">
      <input type="submit">

    </form>
    <p>
      <?php
      $level = $_GET["num"];

        $fullTriangle = new SplFixedArray($level+2);
        for ($i = 0; $i < $level + 2; $i++) $fullTriangle[$i] = 0;
        $fullTriangle[0]= 1;
        echo $fullTriangle[0];
        echo "<br>";

        for ($i = 1; $i < $level; $i++ )
        {
          $triangle = new SplFixedArray($level);
          for ($n= 0; $n<$i; $n++)
          {
            $triangle[$n] = $fullTriangle[$n] + $fullTriangle[$n+1];
          }
          echo "1 ";
          for ($n = 0; $n<$i; $n++)
          {
            echo $triangle[$n];
            echo " ";
            $fullTriangle[$n+1] = $triangle[$n];
          }
          echo "<br>";
        }


       ?>
    </p>

  </body>
  <?php include "templates/footer.php" ?>
</html>
