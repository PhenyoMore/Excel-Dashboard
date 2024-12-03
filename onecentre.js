// Function to open the file in the embedded viewer
function openSheet(url) {
    // Display the file in the embedded iframe
    const viewer = document.getElementById('file-viewer');
    viewer.querySelector('iframe').src = url;
    viewer.style.display = 'block';
}

// Function to close the embedded viewer
function closeViewer() {
    // Hide the file viewer
    const viewer = document.getElementById('file-viewer');
    viewer.style.display = 'none';
    viewer.querySelector('iframe').src = ''; // Clear the iframe content
}
