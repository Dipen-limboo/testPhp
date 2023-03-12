const seventh = document.querySelector("#Seventh");
const input = seventh.querySelector("input");
const button = seventh.querySelector("button");
button.addEventListener("click", ()=>{
    alert("Your message is received");
    seventh.querySelector("form").reset();
})
console.log("Sent");


const forth =  document.querySelector("#forth");
const bt = forth.querySelector("button");
bt.addEventListener("click", () => {
    confirm("Do you want to download this app?");
})
console.log("Confirmation for downloading");

