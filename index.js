let y= false;

function toggle(){
    if (y==false){
        document.getElementById("toggle-menu").style.display = "flex";
        y=true;
    }
    else{
        document.getElementById("toggle-menu").style.display = "none";
        y=false;
    }
}



// function toggle(){
//     var x = document.getElementById("nav");
//     if(x.style.display === "block"){
//         x.style.display = "none";
//     }else{
//         x.style.display = "block";
//     }
// }