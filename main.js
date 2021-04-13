function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

const btn = document.querySelector('.btn');

btn.addEventListener('click', function() {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
})
