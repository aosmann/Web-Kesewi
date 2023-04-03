const form = document.getElementById('contact-form');
const sentAlert = document.getElementById('sent-alert');

form.addEventListener('submit', (e) => {
  e.preventDefault(); // prevent page refresh on form submission

  const formData = new FormData(form);

  fetch('submit.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(result => {
    if (result === 'success') {
      // Display the thank you message and redirect to index after 2 seconds
      sentAlert.classList.remove('hidden');
      setTimeout(() => {
        sentAlert.classList.add('hidden');
        window.location.href = 'index.html';
      }, 2000);
    }
  })
  .catch(error => console.error(error));
});
