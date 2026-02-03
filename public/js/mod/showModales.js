export function addCategorieModals() {
    const modale_addCategorie_pop = document.getElementById("modale_addCategorie_pop");

    modale_addCategorie_pop.classList.replace("hidden" , "flex");
}

export function annulerAddCategorieModal() {
    const modale_addCategorie_pop = document.getElementById("modale_addCategorie_pop");

    modale_addCategorie_pop.classList.replace("flex" , "hidden");
}