let num = [10,20,30,40,50,60];

console.log("First index Value", num[0]);
console.log("Second index Value", num[1]);
console.log("Third index Value", num[2]);
console.log("Forth index Value", num[3]);
console.log("Fifth index Value", num[4]);
console.log("Sixth index Value", num[5]);

// JavaScript for loop
console.log("################# for Loop ####################")
for(let i=0; i<num.length; i++){
    console.log(num[i]);
}

// JavaScript while loop
console.log("################# While Loop ####################")
let i = 0;

while(i<num.length){
    console.log(num[i]);

    i++;
}