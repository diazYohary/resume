const contCollapse = document.querySelectorAll(".containerCollapse");

contCollapse.forEach((containerCollapse)=>{
    containerCollapse.addEventListener("click",()=>{
        containerCollapse.classList.toggle("active");
    });
});