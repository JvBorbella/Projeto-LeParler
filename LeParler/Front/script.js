document.getElementById('openOptions').addEventListener('click', function() {
    var optionsContainer = document.getElementById('optionsContainer');
    optionsContainer.style.display = (optionsContainer.style.display === 'block') ? 'none' : 'block';
  });

  // Feche a aba de opções se o usuário clicar fora dela
  window.addEventListener('click', function(event) {
    var optionsContainer = document.getElementById('optionsContainer');
    var openOptionsButton = document.getElementById('openOptions');

    if (event.target !== openOptionsButton && event.target !== optionsContainer) {
      optionsContainer.style.display = 'none';
    }
  });