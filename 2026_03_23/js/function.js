let numbers = [10,20,30]

function addNumber(num) { // parameterized function
    numbers.push(num);
}

function showNumbers(){  // non parameter function / default function
    numbers.forEach(function(){
            console.log
        });
}

addNumber(40);
showNumbers();

// arrow function - fasterthan any other function
const greet = () =>{
    console.log("Good Morning");
}

greet();