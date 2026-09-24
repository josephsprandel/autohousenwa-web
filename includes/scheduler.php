<?php
/*
 * Online scheduling — shared by every page; include it just before </body>.
 *
 * "Schedule Online" (any link calling showScheduler()) first shows the SMS
 * consent step, then opens RO Engine's booking form (autohouse.roengine.com,
 * shown in a popup by embed/book.js). The consent modal is the call-to-action
 * the carriers review for our SMS registration (10DLC) — keep its wording, the
 * unchecked checkbox, and the SMS Policy / Privacy Policy links.
 *
 * Replaced Steer's AutoOps scheduler, 2026-09-23/24.
 */
?>
<style>
#sms-consent-modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.65); z-index: 9999; align-items: center; justify-content: center; }
#sms-consent-modal.active { display: flex; }
.sms-modal-box { background: #fff; max-width: 500px; width: 90%; border-radius: 10px; padding: 36px 32px 28px; box-shadow: 0 8px 32px rgba(0,0,0,0.25); font-family: "Newsreader", serif; text-align: left; }
.sms-modal-box h3 { margin: 0 0 10px; color: #003366; font-size: 1.4em; }
.sms-modal-intro { margin: 0 0 20px; color: #555; font-size: 0.95em; line-height: 1.5; }
.sms-consent-label { display: flex; gap: 12px; align-items: flex-start; cursor: pointer; margin-bottom: 16px; padding: 14px; background: #f5f7fa; border-radius: 6px; border: 1px solid #dde3ec; }
.sms-consent-label input[type="checkbox"] { margin-top: 2px; width: 18px; height: 18px; flex-shrink: 0; accent-color: #003366; cursor: pointer; }
.sms-consent-label span { font-size: 0.88em; color: #444; line-height: 1.55; }
.sms-consent-label a { color: #003366; text-decoration: underline; margin: 0; }
.sms-error { display: none; color: #c0392b; font-size: 0.85em; margin-bottom: 12px; }
.sms-modal-actions { display: flex; gap: 12px; justify-content: flex-end; }
.sms-modal-cancel { padding: 10px 20px; border: 1px solid #ccc; background: #fff; border-radius: 5px; cursor: pointer; font-family: "Newsreader", serif; font-size: 1em; color: #555; }
.sms-modal-cancel:hover { background: #f5f5f5; }
.sms-modal-confirm { padding: 10px 22px; background: #003366; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-family: "Newsreader", serif; font-size: 1em; font-weight: 600; }
.sms-modal-confirm:hover { background: #004488; }
</style>

<div id="sms-consent-modal" role="dialog" aria-modal="true" aria-labelledby="sms-modal-title">
  <div class="sms-modal-box">
    <h3 id="sms-modal-title">Before You Schedule</h3>
    <p class="sms-modal-intro">AutoHouse Automotive uses text messages to send appointment confirmations, reminders, and vehicle status updates. Message frequency varies; up to 5 messages per service visit.</p>
    <label class="sms-consent-label">
      <input type="checkbox" id="sms-consent-checkbox">
      <span>I agree to receive automated SMS messages from AutoHouse Automotive regarding my appointment and vehicle service. Msg &amp; data rates may apply. Reply STOP to opt out at any time. Reply HELP for assistance. Consent is not a condition of purchase or service. &nbsp;<a href="/sms-policy.php" target="_blank">SMS Policy</a> &nbsp;|&nbsp; <a href="/privacy.php" target="_blank">Privacy Policy</a></span>
    </label>
    <p class="sms-error" id="sms-error-msg">Please check the box to agree before continuing.</p>
    <div class="sms-modal-actions">
      <button class="sms-modal-cancel" onclick="closeConsentModal()">Cancel</button>
      <button class="sms-modal-confirm" onclick="handleConsentConfirm()">Continue to Schedule</button>
    </div>
  </div>
</div>

<script src="https://autohouse.roengine.com/embed/book.js" async></script>
<script>
function showScheduler() {
    document.getElementById('sms-consent-checkbox').checked = false;
    document.getElementById('sms-error-msg').style.display = 'none';
    document.getElementById('sms-consent-modal').classList.add('active');
}
function closeConsentModal() {
    document.getElementById('sms-consent-modal').classList.remove('active');
}
function handleConsentConfirm() {
    if (!document.getElementById('sms-consent-checkbox').checked) {
        document.getElementById('sms-error-msg').style.display = 'block';
        return;
    }
    closeConsentModal();
    RoEngineBooking.open();
}
document.getElementById('sms-consent-modal').addEventListener('click', function (e) {
    if (e.target === this) closeConsentModal();
});
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeConsentModal();
});
</script>
