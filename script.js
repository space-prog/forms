document.addEventListener("DOMContentLoaded", function() {
    const openPopup = document.querySelector(".open"),
        popupContainer = document.querySelector(".popup"),
        closePopup = document.querySelector(".close-popup"),
        checkedInput = [...document.querySelectorAll(".block3_checkboxes input")],
        checkedSpan = [...document.querySelectorAll(".block3_checkboxes span")]

    
    console.log(checkedInput, checkedSpan)
    
    openPopup.addEventListener("click", function (e) {
        e.preventDefault()
        popupContainer.style.display = "block"
    })
    
    closePopup.addEventListener("click", function (e) {
        e.preventDefault()
        popupContainer.style.display = "none"
    })
    
    checkedInput.forEach((itemInput, index) => {
        itemInput.addEventListener("click", function () {
            if (itemInput.checked) {
                checkedInput[index].style.boxShadow = "0 0 2.5px rgba(0,0,0,0.5)"
                checkedSpan[index].style.backgroundColor = "#3e6aff"
            } else {
                checkedInput[index].style.boxShadow = "none"
                checkedSpan[index].style.backgroundColor = "#cfcfd1"
            }
        })
    })
})