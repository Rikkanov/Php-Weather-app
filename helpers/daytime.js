var dt;
function daytime ()
{
    var st = new Date();
var t = st.getHours();

if (t>= 6 && t<12){
        dt = "Good Morning" ;
}
else if(t>= 12 && t<20){
        dt = "Good Afternoon" ;
}  
else if(t>= 20 && t<6){
       dt = "Good Evening" ;
}
else{
    dt ="ERR";
}
document.getElementById("day").innerHTML ="" + dt +"";
// document.querySelector("h1").innerText;
}