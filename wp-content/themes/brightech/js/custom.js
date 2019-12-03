// TABS
function openPage(event, pageName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (k = 0; k < tablinks.length; k++) {
        tablinks[k].className = tablinks[k].className.replace(" active", "");
    }
    document.getElementById(pageName).style.display = "block";
    event.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

