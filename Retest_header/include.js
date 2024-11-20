// Charger et insérer le header
fetch('./header.html')
  .then(response => response.text())
  .then(data => {
    document.querySelector('.header').innerHTML = data;

    // Charger le CSS du header
    const headerStyle = document.createElement('link');
    headerStyle.rel = 'stylesheet';
    headerStyle.href = './header.css';
    document.head.appendChild(headerStyle);
  });

// Charger et insérer le footer
fetch('./footer.html')
  .then(response => response.text())
  .then(data => {
    document.querySelector('.footer').innerHTML = data;

    // Charger le CSS du footer
    const footerStyle = document.createElement('link');
    footerStyle.rel = 'stylesheet';
    footerStyle.href = './footer.css';
    document.head.appendChild(footerStyle);
  });