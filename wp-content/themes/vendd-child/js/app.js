/*jquery header*/
/*27/01/2020*/
/* Sticky header */
/*add hover*/


 jQuery(window).on('scroll', function() {

        if(jQuery(window).scrollTop() > 50) {
            jQuery('body').addClass('scrolled');;
        } else {
           jQuery('body').removeClass('scrolled');
        }
    });

 /**
* Created by Dell on 06/04/2019.
*/
const handleActive = (oldElement, newElement, className) => {
    if (oldElement !== null) {
        oldElement.classList.remove(className);
        newElement.classList.add(className);
    }
};

const handleOngletClicked = (e) => {
    e.preventDefault();
    const onglet = e.currentTarget;
    if (onglet.classList.contains("onglet-active")) return;

    const ongletActive = document.querySelector(".onglet-active");
    handleActive(ongletActive, onglet, "onglet-active");

    const ongletTarget = document.querySelector("#target-" + onglet.id);
    if (ongletTarget !== null) {
        const ongletTargetActive = document.querySelector(".target-onglet-active");
        handleActive(ongletTargetActive, ongletTarget, "target-onglet-active");
    }
};

const executeTask = (event) => {
    const onglets = document.querySelectorAll(".onglet");
    onglets.forEach((onglet) => {
        onglet.addEventListener("click", handleOngletClicked);
    });
};

window.addEventListener("load", executeTask);




 
