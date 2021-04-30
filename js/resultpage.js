// console.log(resultBox.length);

// when the js doc is fully loaded, it will trigger the getRating() function.



function searchResult(requiredRateNum, min, max) {
    let searchBar = document.getElementById('searchBar')
    /*if(window.location.search!='') {
     searchBar.value=window.location.search.replace("?search=", "");
     window.location.search='';
    }*/
    let sortedItems = document.querySelectorAll(".box")
    let inputValueLowerCase = searchBar.value.toLowerCase()



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

/**
 * the function will sort all the sortedItems by price. the n1 and n2 arguments are passed
 * as 0 and 1 or 1 and to to be used in the "if" clause below. these two different 
 * arrangements can make the price to be sorted in an ascending or descending order.
 * @param {*first anchor number, it can be 0 or 1} n1 
 * @param {*second anchor number, it can be 0 or 1} n2 
 */
function sortByPriceOrder(n1, n2) {
    var list, i, switching, b, shouldSwitch;
    list = document.getElementById("searchItems");
    switching = true;

    /* Make a loop that will continue until
    no switching has been done: */
    while (switching) {
        // start by saying: no switching is done:
        switching = false;
        b = list.querySelectorAll(".box");
        // Loop through all list-sortedItems:
        for (i = 0; i < (b.length - 1); i++) {
            // start by saying there should be no switching:
            shouldSwitch = false;
            /* check if the next sortedItem should
            switch place with the current sortedItem: */
            if (+b[i + n1].querySelector(".price").innerHTML < +b[i + n2].querySelector(".price").innerHTML) {
                console.log(+b[i + n1].querySelector(".price").innerHTML > +b[i + 1].querySelector(".price").innerHTML);
                console.log((b[i].querySelector(".price").innerHTML))
                console.log("biggerthan");
                console.log((b[i + 1].querySelector(".price").innerHTML))
                /* if next sortedItem is alphabetically
                lower than current sortedItem, mark as a switch
                and break the loop: */
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
            /* If a switch has been marked, make the switch
            and mark the switch as done: */
            b[i].parentNode.insertBefore(b[i + 1], b[i]);
            switching = true;
        }
    }
}
