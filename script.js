const openPopup = document.querySelector(".open"),
    popupContainer = document.querySelector(".popup"),
    closePopup = document.querySelector(".close-popup")

openPopup.addEventListener("click", function(e) {
    e.preventDefault()
    popupContainer.style.display = "block"
})

closePopup.addEventListener("click", function(e) {
    e.preventDefault()
    popupContainer.style.display = "none"
})
