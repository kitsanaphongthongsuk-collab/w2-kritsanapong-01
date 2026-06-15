<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="card">
        
        <h1>งานที่ 1 กฤษณพงษ์ ทองสุข เลขที่ 1 BIT2/5</h1>

        <form action=""  method="GET">
            
            <div style="text-align: center; margin-bottom: 15px;">
            <a href="while.php" 
                style="display: inline-block; color: #ffffff; font-weight: bold; text-decoration: none;">
             While Loop
            </a>
</div>

            <br>

            <label style="color: #ffffff;">เลขแม่สูตรคูณ</label>

            <input type="number"
                   name="num"
                   value="<?= isset($_GET['num']) ? htmlspecialchars($_GET['num']) : '' ?>"
                   required>

            <button type="submit">คำนวณ</button>

            <?php
                if(isset($_GET['num']) && is_numeric($_GET['num'])){
                    $num = $_GET['num'];

                    echo "<div class='result-container'>";
                    echo "<h3>สูตรคูณแม่ $num (For Loop)</h3>";

                    for($i = 1; $i <= 12; $i++){
                        echo "<div class='row'>";
                        echo "<span>$num x $i</span>";
                        echo "<span>= " . ($num * $i) . "</span>";
                        echo "</div>";
                    }

                    echo "</div>";
                }
            ?>

        </form>
    </div>

</body>
</html>