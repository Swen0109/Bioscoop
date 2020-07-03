<body class="bg-warning">
    <img src="<?php echo URL ?>public/afbeeldingen/logo/patwee_logo_black.png?>" style="width:150px; position: absolute; left:720px; top:115px;">
    <div class="card rounded-lg shadow-lg" style="width: 400px; height: 330px; position: absolute; left:570px; top:205px;">
    <br><h2 class="text-center">Login</h2><br>
        <form class="text-center" method="post" action="<?php echo URL ?>admin/store">
            <?php if(!empty($loginErr)){?>
                <span class="text-danger text-center font-weight-bold "  style="font-size: 13px">* <?php echo $loginErr ?></span><br><br>
            <?php }
            else{ ?>
                <br>
            <?php } ?>
            <div class="">
            	<label>Username:</label>
            	<input type="text" name="username" value="">
            </div><br>
            <div class="">
            	<label>Password:</label>
            	<input type="password" name="wachtwoord" value="">
            </div><br>
            <div class="btn btn-outline-dark btn-warning">
            	<button type="submit" class="btn" name="login_btn">Login</button>
            </div>
        </form>
    </div>
    <p style="position: absolute; left:720px; top:545px;"><a>naar </a><a href="<?= URL ?>home/index" style="color: #616771;">patwee.nl</a></p>
