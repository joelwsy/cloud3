<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

    * {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    body {
        padding: 0;
        margin: 0;
        font-family: "Poppins", sans-serif;
    }

    nav {
        padding: 5px 5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
        rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        z-index: 1;
    }
    nav .logo {
        display: flex;
        align-items: center;
    }
    nav .logo img {
        height: 25px;
        width: auto;
        margin-right: 10px;
    }
    nav .logo h1 {
        font-size: 1.1rem;
        background: linear-gradient(to right, #b927fc 0%, #2c64fc 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    nav ul {
        list-style: none;
        display: flex;
    }
    nav ul li {
        margin-left: 1.5rem;
    }
    nav ul li a {
        text-decoration: none;
        color: #000;
        font-size: 95%;
        font-weight: 400;
        padding: 4px 8px;
        border-radius: 5px;
    }

    nav ul li a:hover {
        background-color: #f5f5f5;
    }

    .hamburger {
        display: none;
        cursor: pointer;
    }

    .hamburger .line {
        width: 25px;
        height: 1px;
        background-color: #1f1f1f;
        display: block;
        margin: 7px auto;
        transition: all 0.3s ease-in-out;
    }
    .hamburger-active {
        transition: all 0.3s ease-in-out;
        transition-delay: 0.6s;
        transform: rotate(45deg);
    }

    .hamburger-active .line:nth-child(2) {
        width: 0px;
    }

    .hamburger-active .line:nth-child(1),
    .hamburger-active .line:nth-child(3) {
        transition-delay: 0.3s;
    }

    .hamburger-active .line:nth-child(1) {
        transform: translateY(12px);
    }

    .hamburger-active .line:nth-child(3) {
        transform: translateY(-5px) rotate(90deg);
    }

    .menubar {
        position: absolute;
        top: 0;
        left: -60%;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        width: 60%;
        height: 100vh;
        padding: 20% 0;
        background: rgba(255, 255, 255);
        transition: all 0.5s ease-in;
        z-index: 2;
    }
    .active {
        left: 0;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .menubar ul {
        padding: 0;
        list-style: none;
    }
    .menubar ul li {
        margin-bottom: 32px;
    }

    .menubar ul li a {
        text-decoration: none;
        color: #000;
        font-size: 95%;
        font-weight: 400;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .menubar ul li a:hover {
        background-color: #f5f5f5;
    }
    @media screen and (max-width: 790px) {
        .hamburger {
            display: block;
        }
        nav ul {
            display: none;
        }
    }

</style>

<nav>
    <a href="products.php"
    <div class="logo">
        <img src="images/TAR UMT Logo.png" alt="logo" />
        <h1>GRADUATION POS</h1>
    </div>
    </a>
    <ul>
        <li>
            <a href="products.php">Home</a>
        </li>
        <li>
            <a href="cart.php">View Cart</a>
        </li>
        <li>
            <a href="orders.php">My Orders</a>
        </li>
        <li>
            <a href="contact.php">Contact Us</a>
        </li>
        <?php
        if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
        } 
        else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
        }
        ?>
    </ul>
    <div class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </div>
</nav>
<div class="menubar">
    <ul>
        <li>
            <a href="products.php">Home</a>
        </li>
        <li>
            <a href=cart.php">View Cart</a>
        </li>
        <li>
            <a href="My Orders">My Orders</a>
        </li>
        <li>
            <a href="contact.php">Contact Us</a>
        </li>
        <?php
        if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
        } 
        else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
        }
        ?>
    </ul>
</div>

<!-- Link Bootstrap JavaScript (Optional, for dropdowns and other interactive features) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


