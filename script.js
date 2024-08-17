document.addEventListener("DOMContentLoaded", function() {
    const openPopup = document.querySelector(".open"),
        popupContainer = document.querySelector(".popup"),
        closePopup = document.querySelector(".close-popup"),
        checkedInput = [...document.querySelectorAll(".block3_checkboxes input")],
        checkedSpan = [...document.querySelectorAll(".block3_checkboxes span")],
        checkedRadioMan = document.querySelector("#man"),
        checkedRadioGirl = document.querySelector("#girl"),
        tableSpan1 = document.querySelector("#tablespan1"),
        tableSpan2 = document.querySelector("#tablespan2"),
        tableSpan3 = [document.querySelector("#tablespan3")],
        customCheckbox_table = [document.querySelector("customCheckbox_table")]

    
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
        
    checkedRadioMan.addEventListener("change", function() {
        tableSpan1.style.borderColor = "#3e6aff"
    })

    checkedRadioGirl.addEventListener("change", function() {
        tableSpan2.style.borderColor = "#3e6aff"
    })

    // tableSpan3.forEach((tableSpan3, index) => {
    //     tableSpan3.addEventListener("click", function () {
    //         customCheckbox_table.checked = true
    //     })
    // })
})