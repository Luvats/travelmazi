//comes button plug & minus
$(".oneWayQtyBtn input").before(
    '<div class="oneWay qtyDec"><i class="la la-minus"></i></div>'
);
$(".oneWayQtyBtn input").after(
    '<div class="oneWay qtyInc"><i class="la la-plus"></i></div>'
);

$(".flightQtyBtn input").before(
    '<div class="flightWay qtyDec"><i class="la la-minus"></i></div>'
);
$(".flightQtyBtn input").after(
    '<div class="flightWay qtyInc"><i class="la la-plus"></i></div>'
);

$(".roundTripQtyBtn input").before(
    '<div class="roundTrip qtyDec"><i class="la la-minus"></i></div>'
);
$(".roundTripQtyBtn input").after(
    '<div class="roundTrip qtyInc"><i class="la la-plus"></i></div>'
);

$(".qtyBtn input").before(
    '<div class="qtyDec"><i class="la la-minus"></i></div>'
);
$(".qtyBtn input").after(
    '<div class="qtyInc"><i class="la la-plus"></i></div>'
);
$(".roomBtn input").before(
    '<div class="roomDec"><i class="la la-minus"></i></div>'
);
$(".roomBtn input").after(
    '<div class="roomInc"><i class="la la-plus"></i></div>'
);

//count total no of updated one way passengers
function countPassengers(parentClass) {
    var childrenCount = $("." + parentClass)
        .find(".childrens")
        .val();
    var infantsCount = $("." + parentClass)
        .find(".Infants")
        .val();
    var adultsCount = $("." + parentClass)
        .find(".adults")
        .val();
    return (totalOldCount =
        parseFloat(childrenCount) +
        parseFloat(infantsCount) +
        parseFloat(adultsCount));
}

//count total no of updated round trip passengers
function countRoundPassengers(parentClass) {
    var childrenCount = $("." + parentClass)
        .find(".childrens_round")
        .val();
    var infantsCount = $("." + parentClass)
        .find(".Infants_round")
        .val();
    var adultsCount = $("." + parentClass)
        .find(".adults_round")
        .val();
    return (totalOldCount =
        parseFloat(childrenCount) +
        parseFloat(infantsCount) +
        parseFloat(adultsCount));
}

$(document).on("click", ".qtyDec, .qtyInc", function (e) {
    var $button = $(this);
    var oldInput = $button.parent().find("input");
    var oldValue = oldInput.val();
    var parentClass = oldInput.data("parent-class");
    var inputClass = oldInput.attr("class");

    var childrenCount = $("." + parentClass)
        .find(".childrens")
        .val();
    var infantsCount = $("." + parentClass)
        .find(".Infants")
        .val();
    var adultsCount = $("." + parentClass)
        .find(".adults")
        .val();

    var totalOldCount = countPassengers(parentClass);
    // alert("infantsCount"+infantsCount+"adultsCount"+adultsCount+"inputClass"+inputClass);
    if ($button.hasClass("qtyInc")) {
        if (infantsCount >= adultsCount && inputClass == "Infants") {
            alert("Number of infants cannot be more than adults");
            return false;
        }
        var newVal = parseFloat(oldValue) + 1;
    } else if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
    } else {
        if(inputClass == "adults"){
            newVal = 1;
        }else{
            newVal = 0;
        }    
    }

    // alert("here"+newVal);
    $button.parent().find("input").val(newVal);
    totalOldCount = countPassengers(parentClass);

    if (totalOldCount > 1) {
        $(".flight-label").html("Passengers");
    } else {
        $(".flight-label").html("Passenger");
    }

    return false;
});

$(".select-contain-select").on("click", function (e) {
    //  if ($(this).parent().hasClass("show")) {
    return false;
    // }
});
$(document).on("submit", "#one-way-form", function () {
    if ($(this).find(".qtyTotal").val() > 9) {
        alert("Upto 9 passengers allowed");
        return false;
    } else {
        $("#one-way-form").submit();
    }
});
/*======== Room quantity total number count =========*/
function roomSumary() {
    var qtyInputField_2 = document.getElementsByName("roomInput");
    var totalNumber_2 = 0;
    for (var i = 0; i < qtyInputField_2.length; i++) {
        if (parseInt(qtyInputField_2[i].value))
            totalNumber_2 += parseInt(qtyInputField_2[i].value);
    }

    var roomQty = document.querySelector(".roomTotal");
    var roomQty_2 = document.querySelector(".roomTotal_2");
    var roomQty_3 = document.querySelector(".roomTotal_3");
    var roomQty_4 = document.querySelector(".roomTotal_4");
    if (roomQty) {
        roomQty.innerHTML = totalNumber_2;
    }
    if (roomQty_2) {
        roomQty_2.innerHTML = totalNumber_2;
    }
    if (roomQty_3) {
        roomQty_3.innerHTML = totalNumber_2;
    }
    if (roomQty_4) {
        roomQty_4.innerHTML = totalNumber_2;
    }
}
roomSumary();

/*======== Room quantity increment decrement =========*/
$(".roomInc, .roomDec").on("click", function () {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.hasClass("roomInc")) {
        var newVal = parseFloat(oldValue) + 1;
    } else {
        // don't allow decrementing below zero
        if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
    }

    $button.parent().find("input").val(newVal);
    roomSumary();
});

/* flights filter code start */
var checkedAirlines = [];
var uncheckedAirlines = [];
var checkedStops = [];
var uncheckedStops = [];
function showPriceRecords() {
    var sliderMinPrice = $("#range-slider").slider("values", 0);
    var sliderMaxPrice = $("#range-slider").slider("values", 1);
    $(".card-item").each(function () {
        // alert("here");
        if ($(this).is(":visible")) {
            var flightPrice = $(this).data("flight-price-range");
            if (flightPrice.indexOf("-") > -1) {
                var priceArr = flightPrice.split(" - ");
                var minPrice = parseFloat(priceArr[0]);
                var maxPrice = parseFloat(priceArr[1]);
                if (
                    (minPrice >= sliderMinPrice &&
                        minPrice <= sliderMaxPrice) ||
                    (maxPrice >= sliderMinPrice && maxPrice <= sliderMaxPrice)
                ) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            }
        }
    });
    if ($(".card-item:visible").length < 1) {
        $(".notavilable.flights").show();
    } else {
        $(".notavilable.flights").hide();
    }
}

function showHideFlights() {
    $(".card-item").hide();
    if (checkedAirlines.length > 0) {
        $.each(checkedAirlines, function (airIndex, airValue) {
            // $('.loader').show();
            if (checkedStops.length > 0) {
                $.each(checkedStops, function (stopIndex, stopValue) {
                    $(".card-item." + airValue + "." + stopValue).show();
                });
            } else {
                $(".card-item." + airValue).show();
            }
        });
    } else {
        if (checkedStops.length > 0) {
            $.each(checkedStops, function (index, value) {
                // $('.loader').show();
                $(".card-item." + value).show();
            });
        } else {
            $(".card-item").show();
        }
    }
    showPriceRecords();
}

$(document).ready(function () {
    $(document).on("click", ".check-airlines", function () {
        checkedAirlines = [];
        uncheckedAirlines = [];
        $(".check-airlines").each(function () {
            var id = $(this).attr("id");
            if ($("#" + id).is(":checked")) {
                checkedAirlines.push(id);
            } else {
                uncheckedAirlines.push(id);
            }
        });
        showHideFlights();
    });

    $(document).on("click", ".check-stops", function () {
        checkedStops = [];
        uncheckedStops = [];
        $(".check-stops").each(function () {
            var id = $(this).attr("id");
            if ($("#" + id).is(":checked")) {
                checkedStops.push(id);
            } else {
                uncheckedStops.push(id);
            }
        });
        showHideFlights();
    });
});

function ratingFilterClear() {
    $(".card-item").show();
}

$(document).ready(function () {
    $(".flight-input-2").hide();
    $(".flight-input-3").hide();
    $(".flight-input-4").hide();

    $(".add-city1").click(function () {
        $(".flight-input-2").show();
        return false;
    });

    $(".remove-city2").click(function () {
        $(".flight-input-2").hide();
        return false;
    });

    $(".add-city2").click(function () {
        $(".flight-input-3").show();
        return false;
    });

    $(".remove-city3").click(function () {
        $(".flight-input-3").hide();
        return false;
    });

    $(".add-city3").click(function () {
        $(".flight-input-4").show();
        return false;
    });

    $(".remove-city4").click(function () {
        $(".flight-input-4").hide();
        return false;
    });
});
/* flights filter code end */
