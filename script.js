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
                    checkedSpan[index].style.backgroundColor = "#3e6aff"
                } else {
                    checkedSpan[index].style.backgroundColor = "#cfcfd1"
                }
            })
        })
    })
