<?php
/*
 * Site footer — shared by every page. The policy links are on every page
 * because the SMS consent step links to them and carrier (10DLC) review checks
 * they are reachable site-wide. The two .footer-* rules live here so pages
 * whose own stylesheet never had them still render the links correctly.
 */
?>
<style>
.footer-links { padding: 15px 0; border-top: 1px solid rgba(255,255,255,0.2); margin-bottom: 10px; }
.footer-divider { color: rgba(255,255,255,0.4); margin: 0 10px; }
</style>
<footer>
    <div class="footer-links">
        <a href="privacy.php">Privacy Policy</a>
        <span class="footer-divider">|</span>
        <a href="terms.php">Terms of Service</a>
        <span class="footer-divider">|</span>
        <a href="sms-policy.php">SMS Policy</a>
    </div>
    <p>&copy; <?php echo date("Y"); ?> AutoHouse Automotive Diagnostics &amp; Repair. All rights reserved.</p>
    <p>432 N Main Ave, Fayetteville, AR 72701 | <a href="tel:+14793012880" style="color:#fff;">(479) 301-2880</a></p>
</footer>
