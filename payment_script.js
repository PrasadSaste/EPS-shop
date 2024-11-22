function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    
    // Hide all tab content
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabcontent[i].classList.remove("active");
    }

    // Remove active class from all tab buttons
    tablinks = document.getElementsByClassName("tab-button");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    // Show the current tab content
    document.getElementById(tabName).style.display = "block";
    document.getElementById(tabName).classList.add("active");
    
    // Add active class to the clicked button
    evt.currentTarget.classList.add("active");
}

// Default to open the first tab
document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementsByClassName("tab-button")[0].click();
});

function msg(params) {
    document.getElementById(btnPay).innerText="Order Placed Sucessfully";
    
}
