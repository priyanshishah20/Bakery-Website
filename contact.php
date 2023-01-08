<?php
include('menu.php');
?>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<body>
    <div class="main">
        <heading class="head">
            Contact Us!
        </heading>

        <form action="" method="POST">
            <fieldset class="field1">
                <legend class="legend">&emsp13;Please enter your details.&emsp13;</legend>
                <div class="form-control"> Full Name
                    <input type="text" id="name" class="input-responsive" required>
                </div>

                <div class="form-control">Email Address
                    <input type="email" id="email" class="input-responsive" required>
                </div>

                <div class="form-control">Mobile Number
                    <input type="tel" id="mobile" class="input-responsive" required>
                </div>

                <div class="form-control">Query
                    <textarea name="text" rows="4" cols="30" class="input-responsive" required></textarea>
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