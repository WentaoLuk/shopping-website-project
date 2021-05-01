function landingScript(requiredRateNum, min, max) {
    let searchproducts = document.getElementById('searchproducts')
    console.log("Hey");
    let sortedItems = document.querySelectorAll(".box")
    let inputValueLowerCase = searchproducts.value.toLowerCase()

    location.replace("resultpage.php?search=" + searchproducts.value);

    sortedItems.forEach(sortedItem => {

        const currentPrice = sortedItem.querySelector(".price").innerHTML
        const ratingNumber = sortedItem.querySelector(".number-rating").innerHTML
        const lowerCasesortedItem = sortedItem.querySelector("a").innerHTML.toLowerCase();//parenthasis needed
        sortedList = []
        if (lowerCasesortedItem.indexOf(inputValueLowerCase) != -1
            && ratingNumber >= requiredRateNum && currentPrice >= min
            && currentPrice <= max) {

            sortedItem.style.display = 'block';
        } else {
            sortedItem.style.display = 'none';
        }
    })


    return false
}