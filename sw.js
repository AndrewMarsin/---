const staticCacheName = 's_app_v62'
//const dynamicCacheName = 'd_app_v1'

const assetUrls = [
  'assets/fonts/Maler.woff2',
  'assets/fonts/Montserrat-Regular.woff2',
  'assets/fonts/Montserrat-Bold.woff2',
  'index.php',
  'assets/js/main.js',
  'assets/css/crusial.css',
  'assets/components/nav/mob_menu.css',
  'assets/css/stv6.css'
]

self.addEventListener('install', event => {
  event.waitUntil(
      caches.open(staticCacheName).then(cache => {
          cache.addAll(assetUrls)
      }) 
    );
});

self.addEventListener('activate', event => {
        event.waitUntil(caches.keys().then(cacheNames => {
        return Promise.all(
        cacheNames.map(cache => {
        if (cache !== staticCacheName) return caches.delete(cache)
      }))
    })
  ) 
})

self.addEventListener('fetch', event => {
event.respondWith(fetch(event.request).catch(() => caches.match(event.request)))})
