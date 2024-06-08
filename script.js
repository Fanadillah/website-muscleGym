function scrollToElement(elementSelector, instance = 0) {
    // select all elements that match the given selector
    const elements = document.querySelectorAll(elementSelector);
    //check if there are elements matching the selector and if the requested instance exists
    if (elements.length > instance) {
        //scroll to the specified instance of the element
        elements[instance].scrollIntoView({ behavior: 'smooth'});
    }
}

const link1 = document.getElementById("link4");

link1.addEventListener('click', () => {
    scrollToElement('.workout');
});
