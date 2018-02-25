
function calculateTotal(test) {
    var total = 0;
    var elements = document.getElementsByClassName("c");
    for (i = 0; i < elements.length; i++) {
        if (elements[i].checked)
            total = parseInt(elements[i].dataset.cost) + total;
    }

    document.getElementById("totalCostSpan").innerHTML = total;
}

function addToCart(item){
    
}

function checkState(input, theClass) {
    var pattern = new RegExp(/^\s*((A[LKSZR])|(C[AOT])|(D[EC])|(F[ML])|(G[AU])|(HI)|(I[DLNA])|(K[SY])|(LA)|(M[EHDAINSOT])|(N[EVHJMYCD])|(MP)|(O[HKR])|(P[WAR])|(RI)|(S[CD])|(T[NX])|(UT)|(V[TIA])|(W[AVIY]))\s*$/);

    if (pattern.test(input)) {
        document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
    }
}

function checkZip(input, theClass) {
    var pattern = new RegExp(/^\s*\d\d\d\d\d\s*$/);
    if (pattern.test(input)) {
        document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
    }
}

function checkTel(input, theClass) {
    var pattern = new RegExp(/^\s*\d\d\d-\d\d\d-\d\d\d\d\s*$/);
    if (pattern.test(input)) {
        document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
    }
}

function checkType(input, theClass) {
    var pattern = new RegExp(/^\s*Visa\s*$/);
    var pattern1 = new RegExp(/^\s*MasterCard\s*$/);
    var pattern2 = new RegExp(/^\s*American Express\s*$/);
    if (pattern.test(input) || pattern1.test(input) || pattern2.test(input)) {
        document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
    }
}

function checkCard(input, theClass) {
    var pattern1 = new RegExp(/^\s*\d\d\d\d \d\d\d\d \d\d\d\d \d\d\d\d\s*$/);
    var pattern2 = new RegExp(/^\s*\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d\s*$/);

    if (pattern1.test(input) || pattern2.test(input)) {
        document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
    }
}

function checkExp(input, theClass) {
    var pattern = new RegExp(/^\s*\d\d-\d\d\s*$/);
    if (pattern.test(input)) {
        document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
    }
}

function click(theClass) {
    document.getElementsByClassName(theClass)[0].style.visibility = 'visible';

}

