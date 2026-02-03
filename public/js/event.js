import {addCategorieModals} from './mod/showModales.js';
import {annulerAddCategorieModal} from './mod/showModales.js';
import {addLienModals} from './mod/showModales.js';
import {annulerAddLienModal} from './mod/showModales.js';

export function setupEvents() {
    const addCategorie_Modal_button = document.getElementById("addCategorie_Modal_button");
    const annuler_addCategorie_Button = document.getElementById("annuler_addCategorie_Button");
    const addLien_Modal_button = document.getElementById("addLien_Modal_button");
    const annuler_addLink_Button = document.getElementById("annuler_addLink_Button");
    
    if (addCategorie_Modal_button) {
        addCategorie_Modal_button.addEventListener("click" , addCategorieModals);
    }

    if (annuler_addCategorie_Button) {
        annuler_addCategorie_Button.addEventListener("click" , annulerAddCategorieModal);
    }

    if (addLien_Modal_button) {
        addLien_Modal_button.addEventListener("click" , addLienModals);
    }

    if (annuler_addLink_Button) {
        annuler_addLink_Button.addEventListener("click" , annulerAddLienModal);
    }
}