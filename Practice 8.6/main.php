<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome my practice 8.6</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="big_block">
    <div class="logo">
        <?php include 'logo.inc.php' ?>
    </div>
    <div class="menu">
        <?php include 'menu.inc.php' ?>
    </div>
    <div class="about_me">
       <h1>Обо мне</h1>
       <?php echo $p;
                          ?>                   
        </p>
        <p> Меня зовут 
        <?php echo $name, '  ', $surname . '<br>'; 
              echo 'город', ' ', $city; 
                          ?>                   
        </p>
        <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
        <?php  echo '<img src="/img/php.jpg">'; ?>
    </div>
    <div class="knowledge">
    <h1>База знаний</h1>
     <form id="form1" name="form1" method="post" action="">
    <p>
      <input type="text" name="s1" placeholder="Введите первое число"/> &nbsp;
      <input type="text" name="s2" placeholder="Введите второе число"/> &nbsp;
      <input type="submit" value="Сложить" />
    </p>
 </form>
 <?php
     $a = $_POST['s1'];
     $b = $_POST['s2'];
     $c = $a+$b;
     echo "Сумма введенных Вами чисел: $c <br>";
 ?>
 <br>
            <?php  include 'knowledge.inc.php'; ?>
            <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

            <?php
                        echo $d;
                    ?>

        </div>
    <div class="footer">
        <?php include 'footer.inc.php' ?>
    </div>
</div>
</body>
</html>