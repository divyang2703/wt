

function reverseNum(n) {
    let r = n. toString(). split(''). reverse(). join('');
     return Math. sign(n) * parseInt(r);
    
    }
    // Call.
    console.log(reverseNum(-267));//negative
    console.log(reverseNum(267));//positive

    
    