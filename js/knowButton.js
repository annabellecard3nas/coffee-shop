
const div = document.querySelector(".about_us_space")
const button = document.querySelector(".knowMore");
const cercle = document.querySelectorAll(".about_us_cercle2, .about_us_cercle3, .about_us_cercle4")

console.log(cercle)

button.addEventListener("mouseover", ()=>{
    cercle.forEach( cercle=>{
        cercle.classList.add("lightCercle")
    }
    )
})

button.addEventListener("mouseout", ()=>{
    cercle.forEach( cercle=>{
        cercle.classList.remove("lightCercle")
    }
    )
})
