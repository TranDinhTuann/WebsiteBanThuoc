<?php 
 include 'header.php';
 $name = $user['name'];
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="text-align:center">
                 
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!--h4>Your Profile</h4-->
                            <h1>Chỉnh sửa thông tin của bạn</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="handler-update-profile.php" method="POST">
                                <div class="form-group row">
                                    <label for="name" class="col-4 col-form-label">Họ tên</label>
                                    <div class="col-8">
                                        <input id="name" name="name" class="form-control" required="required"
                                            type="text" value="<?php echo $name;?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <input id="email" name="email" placeholder="Email" class="form-control here"
                                            type="text" value="<?php echo $user['email']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-4 col-form-label">Phone</label>
                                    <div class="col-8">
                                        <input id="phone" required name="phone" placeholder="Số điện thoại"
                                            class="form-control here" type="text" value="<?php echo $user['phone']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-4 col-form-label">Address</label>
                                    <div class="col-8">
                                        <input id="address" name="address" placeholder="Địa chỉ"
                                            class="form-control here" required="required" type="text"
                                            value="<?php echo $user['address']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="newpass" class="col-4 col-form-label">New Password</label>
                                    <div class="col-8">
                                        <input id="newpass" name="newPass" placeholder="New Password"
                                            class="form-control here" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-success w-100">Update My
                                            Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>