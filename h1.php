<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'css.php'; ?>
</head>

<body>
<?php include 'product.php'; ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <?php if ($result->num_rows > 0): ?>
            <ul>
                <?php while($row = $result->fetch_assoc()): ?>
                <li>
                    <strong><?php echo htmlspecialchars($row['name']); ?></strong><br>
                    <?php if ($row['image']): ?>
                    <img src="<?php echo htmlspecialchars($row['image']); ?>"
                        alt="<?php echo htmlspecialchars($row['name']); ?>" style="width:100px;"><br>
                    <?php endif; ?>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <p>Price: $<?php echo htmlspecialchars(number_format($row['price'], 2)); ?></p>
                </li>
                <?php endwhile; ?>
            </ul>
            <h5 class="card-title">Book</h5>
            <p class="card-text">.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>

        </div>
    </div>
    <?php include 'js.php'; ?>
</body>
</html> -->