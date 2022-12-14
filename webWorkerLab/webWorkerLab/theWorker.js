"use strict";

onmessage = function(e) {
    run(e.data);

}

function run(n) {

    let posted = false;

    while(!posted){
        if(isPrime(++n)){
            posted = true;
            postMessage(n);
        }
    };

}
//the is prime calc from earlier did not work for me so i got an implementation from
//geeksforgeeks.org, simply to check if a number is a prime
function isPrime(n){
    if(n<=1){
        return false;
    }
    if(n<=3){
        return true;
    }

    if(n%2 == 0 ||n %3 == 3){
        return false;
    }

    for (let i=5; i*i<=n; i=i+6)
    if (n%i == 0 || n%(i+2) == 0){
        return false;
    }

    return true;
}