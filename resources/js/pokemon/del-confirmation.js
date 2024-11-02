/* // Get all delete forms
const delForms = document.querySelectorAll('.del-form');
const permaDelForms = document.querySelectorAll('.perma-del-form');

// $ Delete confirmation
// Use a foreach cycle for getting each form
delForms.forEach(form => {

    // Add an event listener to each form
    form.addEventListener('submit', (e) => {
        // Prevent the default action of the form
        e.preventDefault();

        // Get the name of the pokemon through the data-name attribute
        const name = form.getAttribute("data-name");

        // Show a confirmation message
        const confirm = window.confirm(`Are you sure you want to delete ${name}?`);

        // If the user confirms the deletion, submit the form
        if (confirm) {
            form.submit();
        };
    });

});

// $ Permanently delete confirmation
permaDelForms.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = form.getAttribute("data-name");
        const confirm = window.confirm(`Are you sure you want to permanently delete ${name}?`);
        if (confirm) {
            form.submit();
        };
    });
});
 */
