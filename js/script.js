sortingArr = [];

// input only money

var currencyInput = document.querySelector('input[id="currency"]');
var currency = "EUR"; // https://www.currency-iso.org/dam/downloads/lists/list_one.xml

// format inital value
onBlur({ target: currencyInput });

// bind event listeners
currencyInput.addEventListener("focus", onFocus);
currencyInput.addEventListener("blur", onBlur);

function localStringToNumber(s) {
  return Number(String(s).replace(/[^0-9.-]+/g, ""));
}

function onFocus(e) {
  var value = e.target.value;
  e.target.value = value ? localStringToNumber(value) : "";
}

function onBlur(e) {
  var value = e.target.value;

  var options = {
    maximumFractionDigits: 2,
    currency: currency,
    style: "currency",
    currencyDisplay: "symbol",
  };

  e.target.value =
    value || value === 0
      ? localStringToNumber(value).toLocaleString(undefined, options)
      : "";
}

// bidding system

// function to sort sortingArr by highest price to lowest price and after that edit it into the dom with id "bidding-container

function sortBidding() {
    // const studios = [{"name":"Whole Yoga","price":"$17.00"},{"name":"Rino Yoga Social","price":"Suggested Donation"},{"name":"Samadhi Yoga","price":"$20.00"},{"name":"Corepower Yoga","price":"$25.00"},{"name":"The River Yoga","price":"$20.00"},{"name":"Endorphin Yoga","price":"$10.00"},{"name":"Kindness Yoga","price":"$20.00"},{"name":"Yoga High","price":"$15.00"},{"name":"Freyja Project","price":"$22.00"},{"name":"Kula Yoga","price":"$17.00"}];

    const parsePrice = x => parseFloat(x.replace(/^\$/, '')) || 0
    const sortedArr = sortingArr
      .slice()
      .sort((a, b) => parsePrice(a.price) - parsePrice(b.price))
    
    console.log(sortedArr);

    //edit sortingArr into the dom with id "bidding-container"
    var biddingContainer = document.getElementById("bidding-container");
    biddingContainer.innerHTML = "";
    for (var i = 0; i < sortingArr.length; i++) {
        var biddingItem = document.createElement("div");
        biddingItem.className = "bidding-item";
        biddingItem.innerHTML =
            "<span class='bidding-item-price'>" +
            sortingArr[i].price
            // "</span><span class='bidding-item-name'>" +
            // sortingArr[i].name +
            // "</span>";
        biddingContainer.appendChild(biddingItem);
    }
}



// function to add new bidding item to the sortingArr
function addBiddingItem(price) {
    price = currencyInput.value;
    var biddingItem = {
        name: name,
        price: price,
    };
    sortingArr.push(biddingItem);
    console.log(sortingArr)
    sortBidding();
}

