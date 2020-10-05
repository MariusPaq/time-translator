const convert = document.getElementById("convert") ;
const secondsInMinute = 60;
const minutesInHour = 60;
const hoursInDay = 24;
const daysInYear = 365;

convert.addEventListener("click", function() {
    let secondes = 0;
    let result = 0;
    let numberOfYears = document.getElementById("numberOfYears").value;

    switch (true) {
      case document.getElementById('iTY').checked == 1:
          secondes = numberOfYears*365*24*60*60;
        break;

      case document.getElementById('iTD').checked == 1:
          secondes = numberOfYears*24*60*60;
        break;

     case document.getElementById('iTH').checked == 1:
          secondes = numberOfYears*60*60;
        break;

     case document.getElementById('iTM').checked == 1:
          secondes = numberOfYears*60;
        break;

    case document.getElementById('iTS').checked == 1:
         secondes = numberOfYears;
        break;
    default:
        console.log('error');
    }

    console.log(secondes+' secondes');

    switch (true) {
      case document.getElementById('oTY').checked == 1:
          result = secondes/60/60/24/365;
        break;

      case document.getElementById('oTD').checked == 1:
          result = secondes/60/60/24;
        break;

     case document.getElementById('oTH').checked == 1:
          result = secondes/60/60;
        break;

     case document.getElementById('oTM').checked == 1:
          result = secondes/60;
        break;

    case document.getElementById('oTS').checked == 1:
          result = secondes;
        break;
    default:
        console.log('error');
    }

    document.getElementById('result').innerHTML=result;
});
