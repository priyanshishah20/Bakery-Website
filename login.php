<?php
include('menu.php');
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<body>
    <div class="main">
        <heading class="head">
            Login to our Website!
        </heading>

        <form action="" method="POST">
            <fieldset class="field1">
                <legend class="legend">&emsp13;Please enter your username and password.&emsp13;</legend>
                <div class="form-control"> Name
                    <input type="text" id="name" class="input-responsive" required>
                </div>

                <div class="form-control">Password
                    <input type="text" maxlength="15" id="pass" class="input-responsive" required>
                </div>

                <div class="form-control center">
                    <button class="submit">&emsp13;Submit&emsp13;</button>
                </div>
            </fieldset>
        </form>

    </div>
</body>

<?php
include('footer.php');
?>