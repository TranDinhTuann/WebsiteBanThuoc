<?php 

	include 'header.php';

	
 ?>

<div class="container mt-5">
    <div class="row">
        <h1>Thông tin đơn hàng</h1>

        <div class="col-lg-9">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col">NUMBER</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">TOTAL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $key => $value): ?>
                    <tr>
                        <th scope="row"><?php echo $value['id'];?></th>
                        <td><?php echo $value['name'] ?></td>
                        <td><img src="uploads/<?php echo $value['image'] ?>" alt="" width="50px"></td>
                        <td>
                            <form action="cart.php" method="GET">
                                <input type="text" name="quantity" value="<?php echo $value['quantity'] ?>">
                                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                <input type="hidden" name="action" value="update">
                                <button type="submit" class="btn btn-success mt-1">Sửa</button>
                            </form>

                        </td>
                        <td><?php echo number_format($value['price']) ?></td>
                        <td><?php echo number_format($value['price'] *  $value['quantity'])  ?></td>
                        <td><a href="cart.php?id=<?php echo $value['id'] ?>&action=delete"
                                class="btn btn-danger">Xóa</a></td>

                    </tr>
                    <?php endforeach ?>

                </tbody>
            </table>

            <a href="checkout.php" class="btn btn-success">Đặt hàng</a>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>