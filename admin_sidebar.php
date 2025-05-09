<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .sidenav {
    width: 256px;
    background-color: #eee;
    height: 90vh;
    float: left;
    overflow-y: auto;
    box-shadow: 1px 1px 5px #888888;
}

.sidenav a {
    font-family: OpenSans-Regular;
    font-size: 19px;
    color: #212121;
    display: block;
    padding: 22px 16px;
    text-decoration: none;
}

.sidenav a:hover {
    background-color: #ddd;
}

.sidenav a[id="label"] {
    font-family: OpenSans-Bold;
    font-size: 22px;
    color: #212121;
    display: block;
    padding: 11px;
    text-decoration: none;
    border-top: 1px solid #212121;
    border-bottom: 1px solid #212121;
}

.sidenav a[id="label"]:hover {
    background-color: transparent;
}

.sidenav a.active {
    background-color: #ccc;
}

/* Sticky Sidebar */
.sidenav-fixed {
    height: auto;
    top: 53px;
    z-index: 100;
    bottom: 0;
    position: fixed;
}

.sidenav a[id="closebtn"] {
    display: none;
}

    </style>
</head>

<body>
    <div class="sidenav" id="theSideNav">
        <a href="javascript:void(0)" id="closebtn" onclick="closeNav()">&times;</a>
        <a href="admin_home.php">Home</a>
        <a id="label">My Customers</a>
        <a href="customer_add.php">Add Customer</a>
        <a href="manage_customer.php">Manage Customers</a>
        <a href="#h">Customer Griveances</a>
        <a id="label">Website Management</a>
        <a href="post_news.php">Post News</a>
    </div>

<script>

for (var i = 0; i < document.links.length; i++) {
    if (document.URL.indexOf('?') > 0) {
        sanitizedURL = document.URL.substring(0, document.URL.indexOf('?'));
    }
    else {
        sanitizedURL = document.URL;
    }
    if (document.links[i].href == sanitizedURL) {
        document.links[i].className = 'active';
    }
}

function openNav() {
    document.getElementById("theSideNav").style.width = "256px";
    var x = document.getElementById("theSideNav");
    if (x.className === "sidenav sidenav-fixed") {
        x.className += " responsive";
    }
}

// Never use get window size of jquery, in javascript, they dont work !
// lesson learnt !!!
function closeNav() {
    if (document.documentElement.clientWidth < 856) {
        document.getElementById("theSideNav").style.width = "0";
    }
}

$(document).ready(function() {
    $(window).resize(function () {
        if ($(window).width() > 855)
            document.getElementById("theSideNav").style.width = "256px";

        if (($(window).width()) < 856){
            $('#closebtn').trigger('click');
        }
    });
});

// Function below is jquery-3 function used for making the navbar sticky
$(document).ready(function() {
    $(window).scroll(function () {
        var x1 = document.getElementById("theSideNav").style.width;

        if ($(window).scrollTop() > 120) {
          $("#theSideNav").addClass('sidenav-fixed');

            if (($(window).width()) < 856 && x1 == "256px") {
                $('#hamburger').trigger('click');
            }
        }

        if ($(window).scrollTop() < 121) {
          $("#theSideNav").removeClass('sidenav-fixed');
        }
    });
});
</script>

</body>
</html>
