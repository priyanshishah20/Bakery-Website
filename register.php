<?php
include('menu.php');
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<body>
    <div class="main">
        <heading class="head">
            Register to our Website!
        </heading>

        <form action="" method="POST">
            <fieldset class="field1">
                <legend class="legend">&emsp13;Please fill below details.&emsp13;</legend>
                <div class="form-control"> Name
                    <input type="text" id="name" placeholder="E.g. Priyanshi Shah" class="input-responsive" required>
                </div>

                <div class="form-control">Email Address
                    <input type="email" id="email" placeholder="E.g. abc@email.com" class="input-responsive" required>
                </div>

                <div class="form-control">Mobile Number
                    <input type="tel" id="mobile" placeholder="E.g. 89xx" class="input-responsive" required>
                </div>

                <div class="form-control">Password
                    <input type="password" maxlength="15" id="pass" class="input-responsive" required>
                </div>

                <div class="form-control">Confirm Password
                    <input type="password" maxlength="15" id="cpass" class="input-responsive" required>
                </div>

                <div class="form-control">Address
                    <textarea name="text" rows="4" cols="30" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
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