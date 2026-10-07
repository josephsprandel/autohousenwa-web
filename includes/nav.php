<?php
/*
 * Site navigation — shared by every page. Set $current_page before including
 * ('home', 'services', 'contact', 'about', 'faq') to italicise that link, as the
 * pages did by hand.
 *
 * "Schedule Online" opens the SMS-consent step first (includes/scheduler.php),
 * then RO Engine's online booking. Every page that includes this nav must also
 * include scheduler.php.
 *
 * The wrap rule lives here (like footer.php's rules) so the links wrap onto a
 * second line on phones instead of pushing the page sideways.
 */
$current_page = $current_page ?? '';
$nav_items = [
    'home'     => ['/', 'Home'],
    'services' => ['/services.php', 'Services'],
    'contact'  => ['/contact.php', 'Contact Us'],
    'about'    => ['/about.php', 'About Us'],
    'faq'      => ['/faq.php', 'FAQ'],
];
?>
<style>
nav ul { flex-wrap: wrap; }
</style>
<nav>
<ul>
<?php foreach ($nav_items as $key => [$href, $label]): ?>
    <li><a href="<?= $href ?>"><?= $key === $current_page ? "<i>$label</i>" : $label ?></a></li>
<?php endforeach; ?>
    <li><a href="#" onclick="showScheduler(); return false;">Schedule Online</a></li>
</ul>
</nav>
