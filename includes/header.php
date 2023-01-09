<section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php?p=home" class=" <?=($page=="home.php"?"active":"")?> ">home</a></li>
                <li><a href="index.php?p=shop" class=" <?=($page=="shop.php"?"active": "")?> " >shop</a></li>
                <li><a href="index.php?p=blog" class=" <?=($page=="blog.php"?"active": "")?> " >blog</a></li>
                <li><a href="index.php?p=about" class=" <?=($page=="about.php"?"active": "")?> " >about</a></li>
                <li><a href="index.php?p=contact" class=" <?=($page=="contact.php"?"active": "")?> " >contact</a></li>
                <li id="list-close"><a href="index.php?p=cart" class=" <?=($page=="cart.php"?"active": "")?> " ><i class="bi bi-bag"></i></a></li>
                <a href="#" id="close"><i class="bi bi-x "></i></a>
            </ul>
        </div>
        <div id="ipad">
            <a href="cart.html"><i class="bi bi-bag"></i></a>
            <i id="bar" class="bi bi-list"></i>
        </div>
    </section>