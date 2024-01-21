/* ------------------------ loading secreen ------------------------ */

window.addEventListener("load", () => {
    const loader = document.querySelector("#contaner_load");

    loader.classList.add("contaner_load-hidden");

    loader.addEventListener("transitioned", () => {
        document.body.removeChild("loader");
    })
})