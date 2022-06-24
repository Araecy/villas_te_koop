// bidsArray associative array to store biddingitems in
bidsArray = [];

// currency input field, auto format on exit (blur), euro in us format. e.g. 20,000.00
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

// creates a list of the bidsArray in descending order. 
function createList() {
  //edit bidsArray into the dom with id "bidding-container"
  var biddingContainer = document.getElementById("bidding-container");
  biddingContainer.innerHTML = "";
  for (var i = 0; i < bidsArray.length; i++) {
    var biddingItem = document.createElement("div");
    biddingItem.className = "bidding-item";
    biddingItem.innerHTML =
        "<span class='bidding-item-price'>" +
        bidsArray[i].price
    biddingContainer.appendChild(biddingItem);
  }
}

// function to add new bidding item to the bidsArray
function addBiddingItem() {
  value = localStringToNumber(currencyInput.value);
  price = currencyInput.value;

  console.log('bidsArray sorted in descending order: ', bidsArray); // purely here for demonstational purpose
  // associative array, this is used in the sorting and displaying of the price.
  var biddingItem = {
    priceValue: value,
    price: price,
  };

  bidsArray.push(biddingItem);
  // sorts the price in descending order
  bidsArray.sort((a, b) => (b.priceValue) - (a.priceValue));
  createList();
}