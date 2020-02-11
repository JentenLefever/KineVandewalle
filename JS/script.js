function showNav() {
    $("#MobileMenu").slideDown("slow");
    document.getElementById('MobileMenu-Open').style.display = "none";
    document.getElementById('MobileMenu-Close').style.display = "block";
}

function hideNav() {
    $("#MobileMenu").slideUp("slow");
    document.getElementById('MobileMenu-close').style.display = "none";
    document.getElementById('MobileMenu-open').style.display = "block";
}