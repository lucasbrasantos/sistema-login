const inputs = document.querySelectorAll(".pwdInputs");
const icon = document.querySelectorAll(".pwd-eye");


icon.forEach((e, i) => {
    
    e.addEventListener("click", function(){

        e.name = e.name === "eye-off-outline" ? "eye-outline" : "eye-off-outline";
        const type = inputs[i].getAttribute("type") === "password" ? "text" : "password";
        inputs[i].setAttribute("type", type);

    });
});