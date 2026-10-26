# autohousenwa.com

The AutoHouse Automotive website (PHP, hosted on cPanel as account `autohous`).

- **Shared parts:** `includes/nav.php`, `includes/footer.php`, `includes/scheduler.php`,
  `includes/portal-bar.php`. Every page includes them. Change the nav/footer/scheduler there — once.
- **Current customers: Login here** = `includes/portal-bar.php`, RO Engine's live code: the bar above the header is
  drawn by `https://autohouse.roengine.com/embed/roengine.js` from RO Engine's settings (colors in Shop Profile →
  Brand Color; wording/placement in Communications → Customer portal → Put it on your website). Change it there —
  the site follows within minutes, no deploy needed.
- **Schedule Online** = the SMS-consent modal (`includes/scheduler.php`), then RO Engine's
  booking popup (`https://autohouse.roengine.com/embed/book.js`). The consent modal is the
  call-to-action carriers review for SMS (10DLC) registration: keep its wording, the
  unchecked box, and the SMS/Privacy policy links.
- **Deploy:** push here, then in cPanel → Git Version Control → Manage: "Update from Remote",
  "Deploy HEAD Commit" (`.cpanel.yml`). Deploys copy/overwrite; they never delete.
- **Test locally** (PHP 8.3, same as the host):
  `docker run --rm -p 127.0.0.1:8089:80 -v "$PWD":/var/www/html:ro php:8.3-apache`
