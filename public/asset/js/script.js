

let parentLi = document.querySelectorAll(".parent");

parentLi.forEach(parent => {
    let manuBtn = parent.querySelector(".manuItem"); // target manu btns for each parent
    let windowPathname = window.location.pathname; // get current window pathname

    let navLinkPathName = new URL(manuBtn.href).pathname; // get navBtn pathname

    if (windowPathname === navLinkPathName) {
        // Remove "active" class from all other parentLi elements
        parentLi.forEach(otherParent => {
            if (otherParent !== parent) {
                otherParent.classList.remove("active");
            }
        });

        // Add "active" class to the current parentLi element
        parent.classList.add("active");
    }
});

// close massage
let alertBox =  document.getElementById('alert');

function timeout(){
    setTimeout(() => {
        alertBox.style.display = 'none';
    }, 3000);
}
timeout();
