const ptag = document.getElementById("weather");
const dtag = document.getElementById("day");

setInterval(()=>{
    fetch("data.php")
    .then(rawdata => rawdata.json())
    .then(jsondata => {
        jsondata = JSON.parse(jsondata)

        ptag.innerText=jsondata.weather + ".temp";
        dtag.innerText=jsondata.day;
    })
},3000
);