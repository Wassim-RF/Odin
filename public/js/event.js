import {addCategorieModals} from './mod/showModales.js';
import {annulerAddCategorieModal} from './mod/showModales.js';

export function setupEvents() {
    const addCategorie_Modal_button = document.getElementById("addCategorie_Modal_button");
    const annuler_addCategorie_Button = document.getElementById("annuler_addCategorie_Button");
    
    if (addCategorie_Modal_button) {
        addCategorie_Modal_button.addEventListener("click" , addCategorieModals);
    }

    if (annuler_addCategorie_Button) {
        annuler_addCategorie_Button.addEventListener("click" , annulerAddCategorieModal);
    }
}