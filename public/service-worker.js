const CACHE_NAME = 'my-cache-v2'; // Update cache name with version
const urlsToCache = [
    '/',
    '/index.php',
    '/css/styles-v2.css', // Updated assets
    '/js/scripts-v2.js',
    // Add other resources to cache
];

// Install event
self.addEventListener('install', (event) => {
    self.skipWaiting(); // Force new service worker to activate
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then((cache) => {
                return cache.addAll(urlsToCache);
            })
    );
});

// Activate event
self.addEventListener('activate', (event) => {
    const cacheWhitelist = [CACHE_NAME];
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cacheName) => {
                    if (cacheWhitelist.indexOf(cacheName) === -1) {
                        return caches.delete(cacheName);
                    }
                })
            );
        }).then(() => {
            self.clients.claim(); // Take control of all clients
        })
    );
});

// Fetch event
self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request)
            .then((response) => {
                return response || fetch(event.request);
            })
    );
});
