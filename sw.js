var CACHE_VERSION = 75;
var CACHE_STATIC_NAME = "static-v" + CACHE_VERSION;
var CACHE_DYNAMIC_NAME = "dynamic-v" + CACHE_VERSION;
var CACHE_IMAGES_NAME = "images-v1";

self.addEventListener("install", function(event) {
  self.skipWaiting();
  console.log("[Service Worker] Installing Service Worker ...", event);
  event.waitUntil(
    caches.open(CACHE_STATIC_NAME).then(function(cache) {
      console.log("[Service Worker] Precaching App Shell...");
      cache.addAll([
        "/practice/",
        "/practice/favicon.ico",
        "/practice/index",
        "/practice/practice.css",
        "/practice/multiply-with-zeros",
        "/practice/exponents",
        "/practice/divide-numbers-ending-in-zeros",
        "/practice/multiplication",
        "/practice/fact-families",
        "/practice/addition-single-digit",
        "/practice/addition-subtraction-two-digit",
        "/practice/factorfind",
        "/practice/division",
        "/practice/mystery-picture",
        "/practice/division-remainder",
        "/practice/rounding",
        "/practice/place-value",
        "/practice/index.php",
        "/practice/multiply-with-zeros.php",
        "/practice/exponents.php",
        "/practice/divide-numbers-ending-in-zeros.php",
        "/practice/multiplication.php",
        "/practice/fact-families.php",
        "/practice/addition-single-digit.php",
        "/practice/addition-subtraction-two-digit.php",
        "/practice/factorfind.php",
        "/practice/division.php",
        "/practice/rounding.php",
        "/practice/place-value.php",
        "/practice/division-remainder.php",
        "/practice/mystery-picture.php",
        "/practice/app.js",
        "/practice/bootstrap.min.css",
        "/practice/bootstrap.min.js",
        "/practice/jquery-3.3.1.min.js",
        "/practice/sweetalert.min.js",
        "/practice/mystery-picture.jpg",
        "/practice/mm.css",
        "/practice/lazyload.min.js",
        "/practice/girl_online_practice.jpg"
      ]);
    })
  );
  event.waitUntil(
    caches.open(CACHE_IMAGES_NAME).then(function(cache) {
      console.log('[Service Worker] Precaching mystery picture images...');
      var images = [];
      for (var i = 0; i < 44; i++) {
        images.push("/practice/images/" + (i + 1) + ".jpg");
      }
      cache.addAll(images);
    })
  );
});

self.addEventListener("activate", function(event) {
  console.log("[Service Worker] Activating Service Worker ....", event);
  event.waitUntil(
    caches.keys().then(function(keyList) {
      return Promise.all(
        keyList.map(function(key) {
          if (key != CACHE_STATIC_NAME && key != CACHE_DYNAMIC_NAME && key != CACHE_IMAGES_NAME) {
            console.log("[Service Worker] Removing old cache...", key);
            return caches.delete(key);
          }
        })
      );
    })
  );
  return self.clients.claim();
});

self.addEventListener("fetch", function(event) {
  event.respondWith(
    caches
      .match(event.request)
      .then(res => {
        if (res) {
          return res;
        } else {
          return fetch(event.request)
            .then(function(res) {
              return caches.open(CACHE_DYNAMIC_NAME).then(function(cache) {
                cache.put(event.request, res.clone());
                return res;
              });
            })
            .catch(function() {});
        }
      })
      .catch(() => {
        return fetch(event.request)
          .then(function(res) {
            return caches.open(CACHE_DYNAMIC_NAME).then(function(cache) {
              cache.put(event.request, res.clone());
              return res;
            });
          })
          .catch(function() {});
      })
  );
});
