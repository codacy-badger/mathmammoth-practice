var deferredPrompt;

if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/practice/sw.js');
}

window.addEventListener('beforeinstallprompt', function(event) {
  event.preventDefault();
  deferredPrompt = event;
  console.log('beforeinstallprompt fired');
  document.querySelector('#addHomeScreen').style.display = 'block';
});
 
