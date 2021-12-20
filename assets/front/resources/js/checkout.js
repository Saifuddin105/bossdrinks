// const First_cart_button = document.getElementById("FirstBOX_btn")

// const cart_sidebar = document.querySelector(".addtocart_sidebar")






const CalculetedPrice1 = document.querySelector(".button-30_price")
if (CalculetedPrice1) CalculetedPrice1.innerHTML = "&#163; 7.46"

function getSelectedVAlue(event) {
    const selectedText = Number(event.target.options[event.target.selectedIndex].textContent)
    console.log(selectedText)

    CalculetedPrice1.innerHTML = "&#163;" + selectedText * 7.46
}



const Smallbox1 = document.getElementById("smallboxradio1")
const Smallbox2 = document.getElementById("smallboxradio2")
const Smallbox3 = document.getElementById("smallboxradio3")

const CalculetedPrice2 = document.querySelector(".button-30_price_2")
if (CalculetedPrice2) CalculetedPrice2.innerHTML = "&#163; 8.49"

Smallbox1?.addEventListener("change", (event) => {
    console.log("asdads")
    console.log(event.target.checked)
    if (event.target.checked = true) {
        CalculetedPrice2.innerHTML = "&#163;" + 2 * 8.49
    }
    else {
        CalculetedPrice2.innerHTML = "&#163;" + 8.49
    }
})

Smallbox2.addEventListener("change", (event) => {
    if (event.target.checked = true) {
        CalculetedPrice2.innerHTML = "&#163;" + 3 * 8.49
    }
    else {
        CalculetedPrice2.innerHTML = "&#163;" + 8.49
    }
})

const Small_selectBOx = document.getElementById("small_select_box")
console.log(Small_selectBOx)




function getSmallSelectedValue(event) {
    // Smallbox3.addEventListener("change", (event) => {
    //     if (event.target.checked = false) {
    //         event.target.checked = true
    //     }
    // })
    console.log(Smallbox3.checked)

    const selectedText2 = Number(event.target.options[event.target.selectedIndex].textContent)

    CalculetedPrice2.innerHTML = "&#163;" + selectedText2 * 8.49


}






