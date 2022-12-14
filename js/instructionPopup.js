window.addEventListener("load", function(){
    this.setTimeout(
        function open(event){
           document.querySelector(".popup").style.display = "block"; 
        },
        1000
    )
});

//Close popup by x button
document.querySelector("#close").addEventListener
("click", function(){
    document.querySelector(".popup").style.display = "none";
});

//Close popup by Lets go button
document.querySelector("#g-btn").addEventListener
("click", function(){
    document.querySelector(".popup").style.display = "none";
});