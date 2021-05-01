
document.addEventListener('DOMContentLoaded', loadItems);

function loadItems() {

    //start to sort items 
    let sortedItems = document.querySelectorAll(".box")

    //start the ranking system.the stars of the products will be generated according to
    //their rating numbers respectively.
    const starsTotal = 5;

    sortedItems.forEach(sortedItem => {
        const ratingNumber = sortedItem.querySelector(".number-rating").innerHTML
        //get the percentage of the rating
        const starPercentage = (ratingNumber / starsTotal) * 100;
        // Round to nearest 10, ex: 97% to 100%
        const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;
        sortedItem.querySelector(".stars-inner").style.width = starPercentageRounded
    })


    const singlePrice = document.querySelector(".price i").innerHTML

    var quantityInputBox = document.getElementById("quantity_selection_box")
    var totalPrice = document.getElementById("total_price")
    totalPrice.innerHTML = `Total price: ${singlePrice}`
    quantityInputBox.addEventListener("change", () =>
        totalPrice.innerHTML = `Total price: ${singlePrice * quantityInputBox.value}`)

}
