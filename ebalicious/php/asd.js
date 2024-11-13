document.getElementById("scholarForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    const scholarName = document.getElementById("scholarName").value;
    const researchField = document.getElementById("researchField").value;
    const publicationCount = document.getElementById("publicationCount").value;

    if (scholarName && researchField && publicationCount >= 0) {
        const scholarList = document.getElementById("scholarListItems");

        const listItem = document.createElement("li");
        listItem.innerHTML = `
            <span>Name:</span> ${scholarName} <br>
            <span>Research Field:</span> ${researchField} <br>
            <span>Publications:</span> ${publicationCount}
        `;

        scholarList.appendChild(listItem);

        // Clear input fields
        document.getElementById("scholarName").value = '';
        document.getElementById("researchField").value = '';
        document.getElementById("publicationCount").value = '';
    } else {
        alert("Please fill out all fields correctly.");
    }
});
