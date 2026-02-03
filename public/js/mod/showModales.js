export function addCategorieModals() {
    const modale_addCategorie_pop = document.getElementById("modale_addCategorie_pop");

    modale_addCategorie_pop.classList.replace("hidden" , "flex");
}

export function annulerAddCategorieModal() {
    const modale_addCategorie_pop = document.getElementById("modale_addCategorie_pop");

    modale_addCategorie_pop.classList.replace("flex" , "hidden");
}

export function addLienModals() {
    const modale_addLink_pop = document.getElementById("modale_addLink_pop");

    modale_addLink_pop.classList.replace("hidden" , "flex");
}

export function annulerAddLienModal() {
    const modale_addLink_pop = document.getElementById("modale_addLink_pop");

    modale_addLink_pop.classList.replace("flex" , "hidden");
}