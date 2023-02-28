// js for menu bar 
var MenuItems = document.getElementById("menuItems");

MenuItems.style.maxHeight = "0px";

function menutoggle() {
    if(MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
    }
    else {
        MenuItems.style.maxHeight = "0px";
    }
}

// js for showing multiple view of any product in show page 
var ProductImage = document.getElementById("ProductImage");
var smallImage = document.getElementById("smallImage");
// var smallImage = document.getElementsByClassName("image3");

smallImage[0].onclick = function () {
    ProductImage.src = smallImage[0].src;
}

smallImage[1].onclick = function () {
    ProductImage.src = smallImage[1].src;
}

smallImage[2].onclick = function () {
    ProductImage.src = smallImage[2].src;
}

smallImage[3].onclick = function () {
    ProductImage.src = smallImage[3].src;
}

// js for account form 
var login = document.getElementById('loginForm');
var signup = document.getElementById('signupForm');
var indicator = document.getElementById('indicator');

    function signup() {
        login.style.transform = "translateX(0px)";
        signup.style.transform = "translateX(0px)";
    }

    function login() {
        login.style.transform = "translateX(300px)";
        signup.style.transform = "translateX(300px)";
    }



