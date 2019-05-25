<?php
/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.0
 * */

function faded_theme_new_icon_set($sets) {
    $Ionicons = '.ion-alert,.ion-alert-circled,.ion-android-add,.ion-android-add-circle,.ion-android-alarm-clock,
	.ion-android-alert,.ion-android-apps,.ion-android-archive,.ion-android-arrow-back,.ion-android-arrow-down,
	.ion-android-arrow-dropdown,.ion-android-arrow-dropdown-circle,.ion-android-arrow-dropleft,
	.ion-android-arrow-dropleft-circle,.ion-android-arrow-dropright,.ion-android-arrow-dropright-circle,
	.ion-android-arrow-dropup,.ion-android-arrow-dropup-circle,.ion-android-arrow-forward,.ion-android-arrow-up,
	.ion-android-attach,.ion-android-bar,.ion-android-bicycle,.ion-android-boat,.ion-android-bookmark,
	.ion-android-bulb,.ion-android-bus,.ion-android-calendar,.ion-android-call,.ion-android-camera,.ion-android-cancel,
	.ion-android-car,.ion-android-cart,.ion-android-chat,.ion-android-checkbox,.ion-android-checkbox-blank,
	.ion-android-checkbox-outline,.ion-android-checkbox-outline-blank,.ion-android-checkmark-circle,
	.ion-android-clipboard,.ion-android-close,.ion-android-cloud,.ion-android-cloud-circle,.ion-android-cloud-done,
	.ion-android-cloud-outline,.ion-android-color-palette,.ion-android-compass,.ion-android-contact,
	.ion-android-contacts,.ion-android-contract,.ion-android-create,.ion-android-delete,.ion-android-desktop,
	.ion-android-document,.ion-android-done,.ion-android-done-all,.ion-android-download,.ion-android-drafts,
	.ion-android-exit,.ion-android-expand,.ion-android-favorite,.ion-android-favorite-outline,
	.ion-android-film,.ion-android-folder,.ion-android-folder-open,.ion-android-funnel,.ion-android-globe,
	.ion-android-hand,.ion-android-hangout,.ion-android-happy,.ion-android-home,.ion-android-image,
	.ion-android-laptop,.ion-android-list,.ion-android-locate,.ion-android-lock,.ion-android-mail,
	.ion-android-map,.ion-android-menu,.ion-android-microphone,.ion-android-microphone-off,.ion-android-more-horizontal,
	.ion-android-more-vertical,.ion-android-navigate,.ion-android-notifications,.ion-android-notifications-none,
	.ion-android-notifications-off,.ion-android-open,.ion-android-options,.ion-android-people,.ion-android-person,
	.ion-android-person-add,.ion-android-phone-landscape,.ion-android-phone-portrait,.ion-android-pin,
	.ion-android-plane,.ion-android-playstore,.ion-android-print,.ion-android-radio-button-off,.ion-android-radio-button-on,
	.ion-android-refresh,.ion-android-remove,.ion-android-remove-circle,.ion-android-restaurant,.ion-android-sad,
	.ion-android-search,.ion-android-send,.ion-android-settings,.ion-android-share,.ion-android-share-alt,
	.ion-android-star,.ion-android-star-half,.ion-android-star-outline,.ion-android-stopwatch,.ion-android-subway,
	.ion-android-sync,.ion-android-textsms,.ion-android-time,.ion-android-train,.ion-android-unlock,.ion-android-upload,
	.ion-android-volume-down,.ion-android-volume-mute,.ion-android-volume-off,.ion-android-volume-up,.ion-android-walk,
	.ion-android-warning,.ion-android-watch,.ion-android-wifi,.ion-aperture,.ion-archive,.ion-arrow-down-a,
	.ion-arrow-down-b,.ion-arrow-down-c,.ion-arrow-expand,.ion-arrow-graph-down-left,.ion-arrow-graph-down-right,
	.ion-arrow-graph-up-left,.ion-arrow-graph-up-right,.ion-arrow-left-a,.ion-arrow-left-b,.ion-arrow-left-c,
	.ion-arrow-move,.ion-arrow-resize,.ion-arrow-return-left,.ion-arrow-return-right,.ion-arrow-right-a,
	.ion-arrow-right-b,.ion-arrow-right-c,.ion-arrow-shrink,.ion-arrow-swap,.ion-arrow-up-a,.ion-arrow-up-b,
	.ion-arrow-up-c,.ion-asterisk,.ion-at,.ion-backspace,.ion-backspace-outline,.ion-bag,.ion-battery-charging,
	.ion-battery-empty,.ion-battery-full,.ion-battery-half,.ion-battery-low,.ion-beaker,.ion-beer,.ion-bluetooth,
	.ion-bonfire,.ion-bookmark,.ion-bowtie,.ion-briefcase,.ion-bug,.ion-calculator,.ion-calendar,.ion-camera,
	.ion-card,.ion-cash,.ion-chatbox,.ion-chatbox-working,.ion-chatboxes,.ion-chatbubble,.ion-chatbubble-working,
	.ion-chatbubbles,.ion-checkmark,.ion-checkmark-circled,.ion-checkmark-round,.ion-chevron-down,.ion-chevron-left,
	.ion-chevron-right,.ion-chevron-up,.ion-clipboard,.ion-clock,.ion-close,.ion-close-circled,.ion-close-round,
	.ion-closed-captioning,.ion-cloud,.ion-code,.ion-code-download,.ion-code-working,.ion-coffee,.ion-compass,
	.ion-compose,.ion-connection-bars,.ion-contrast,.ion-crop,.ion-cube,.ion-disc,.ion-document,.ion-document-text,
	.ion-drag,.ion-earth,.ion-easel,.ion-edit,.ion-egg,.ion-eject,.ion-email,.ion-email-unread,.ion-erlenmeyer-flask,
	.ion-erlenmeyer-flask-bubbles,.ion-eye,.ion-eye-disabled,.ion-female,.ion-filing,.ion-film-marker,.ion-fireball,
	.ion-flag,.ion-flame,.ion-flash,.ion-flash-off,.ion-folder,.ion-fork,.ion-fork-repo,.ion-forward,.ion-funnel,
	.ion-gear-a,.ion-gear-b,.ion-grid,.ion-hammer,.ion-happy,.ion-happy-outline,.ion-headphone,.ion-heart,
	.ion-heart-broken,.ion-help,.ion-help-buoy,.ion-help-circled,.ion-home,.ion-icecream,.ion-image,.ion-images,
	.ion-information,.ion-information-circled,.ion-ionic,.ion-ios-alarm,.ion-ios-alarm-outline,.ion-ios-albums,
	.ion-ios-albums-outline,.ion-ios-americanfootball,.ion-ios-americanfootball-outline,.ion-ios-analytics,
	.ion-ios-analytics-outline,.ion-ios-arrow-back,.ion-ios-arrow-down,.ion-ios-arrow-forward,.ion-ios-arrow-left,
	.ion-ios-arrow-right,.ion-ios-arrow-thin-down,.ion-ios-arrow-thin-left,.ion-ios-arrow-thin-right,.ion-ios-arrow-thin-up,
	.ion-ios-arrow-up,.ion-ios-at,.ion-ios-at-outline,.ion-ios-barcode,.ion-ios-barcode-outline,
	.ion-ios-baseball,.ion-ios-baseball-outline,.ion-ios-basketball,.ion-ios-basketball-outline,.ion-ios-bell,.ion-ios-bell-outline,.ion-ios-body,
	.ion-ios-body-outline,.ion-ios-bolt,.ion-ios-bolt-outline,.ion-ios-book,.ion-ios-book-outline,.ion-ios-bookmarks,.ion-ios-bookmarks-outline,
	.ion-ios-box,.ion-ios-box-outline,.ion-ios-briefcase,.ion-ios-briefcase-outline,.ion-ios-browsers,.ion-ios-browsers-outline,.ion-ios-calculator,
	.ion-ios-calculator-outline,.ion-ios-calendar,.ion-ios-calendar-outline,.ion-ios-camera,.ion-ios-camera-outline,.ion-ios-cart,.ion-ios-cart-outline,
	.ion-ios-chatboxes,.ion-ios-chatboxes-outline,.ion-ios-chatbubble,.ion-ios-chatbubble-outline,.ion-ios-checkmark,.ion-ios-checkmark-empty,
	.ion-ios-checkmark-outline,.ion-ios-circle-filled,.ion-ios-circle-outline,.ion-ios-clock,.ion-ios-clock-outline,.ion-ios-close,.ion-ios-close-empty,
	.ion-ios-close-outline,.ion-ios-cloud,.ion-ios-cloud-download,.ion-ios-cloud-download-outline,.ion-ios-cloud-outline,.ion-ios-cloud-upload,
	.ion-ios-cloud-upload-outline,.ion-ios-cloudy,.ion-ios-cloudy-night,.ion-ios-cloudy-night-outline,.ion-ios-cloudy-outline,.ion-ios-cog,
	.ion-ios-cog-outline,.ion-ios-color-filter,.ion-ios-color-filter-outline,.ion-ios-color-wand,.ion-ios-color-wand-outline,.ion-ios-compose,
	.ion-ios-compose-outline,.ion-ios-contact,.ion-ios-contact-outline,.ion-ios-copy,.ion-ios-copy-outline,.ion-ios-crop,.ion-ios-crop-strong,
	.ion-ios-download,.ion-ios-download-outline,.ion-ios-drag,.ion-ios-email,.ion-ios-email-outline,.ion-ios-eye,.ion-ios-eye-outline,
	.ion-ios-fastforward,.ion-ios-fastforward-outline,.ion-ios-filing,.ion-ios-filing-outline,.ion-ios-film,.ion-ios-film-outline,.ion-ios-flag,
	.ion-ios-flag-outline,.ion-ios-flame,.ion-ios-flame-outline,.ion-ios-flask,.ion-ios-flask-outline,.ion-ios-flower,.ion-ios-flower-outline,
	.ion-ios-folder,.ion-ios-folder-outline,.ion-ios-football,.ion-ios-football-outline,.ion-ios-game-controller-a,.ion-ios-game-controller-a-outline,
	.ion-ios-game-controller-b,.ion-ios-game-controller-b-outline,.ion-ios-gear,.ion-ios-gear-outline,.ion-ios-glasses,.ion-ios-glasses-outline,
	.ion-ios-grid-view,.ion-ios-grid-view-outline,.ion-ios-heart,.ion-ios-heart-outline,.ion-ios-help,.ion-ios-help-empty,.ion-ios-help-outline,
	.ion-ios-home,.ion-ios-home-outline,.ion-ios-infinite,.ion-ios-infinite-outline,.ion-ios-information,.ion-ios-information-empty,
	.ion-ios-information-outline,.ion-ios-ionic-outline,.ion-ios-keypad,.ion-ios-keypad-outline,.ion-ios-lightbulb,.ion-ios-lightbulb-outline,
	.ion-ios-list,.ion-ios-list-outline,.ion-ios-location,.ion-ios-location-outline,.ion-ios-locked,.ion-ios-locked-outline,.ion-ios-loop,
	.ion-ios-loop-strong,.ion-ios-medical,.ion-ios-medical-outline,.ion-ios-medkit,.ion-ios-medkit-outline,.ion-ios-mic,.ion-ios-mic-off,
	.ion-ios-mic-outline,.ion-ios-minus,.ion-ios-minus-empty,.ion-ios-minus-outline,.ion-ios-monitor,.ion-ios-monitor-outline,.ion-ios-moon,
	.ion-ios-moon-outline,.ion-ios-more,.ion-ios-more-outline,.ion-ios-musical-note,.ion-ios-musical-notes,.ion-ios-navigate,.ion-ios-navigate-outline,
	.ion-ios-nutrition,.ion-ios-nutrition-outline,.ion-ios-paper,.ion-ios-paper-outline,.ion-ios-paperplane,.ion-ios-paperplane-outline,
	.ion-ios-partlysunny,.ion-ios-partlysunny-outline,.ion-ios-pause,.ion-ios-pause-outline,.ion-ios-paw,.ion-ios-paw-outline,.ion-ios-people,
	.ion-ios-people-outline,.ion-ios-person,.ion-ios-person-outline,.ion-ios-personadd,.ion-ios-personadd-outline,.ion-ios-photos,.ion-ios-photos-outline,
	.ion-ios-pie,.ion-ios-pie-outline,.ion-ios-pint,.ion-ios-pint-outline,.ion-ios-play,.ion-ios-play-outline,.ion-ios-plus,.ion-ios-plus-empty,
	.ion-ios-plus-outline,.ion-ios-pricetag,.ion-ios-pricetag-outline,.ion-ios-pricetags,.ion-ios-pricetags-outline,.ion-ios-printer,
	.ion-ios-printer-outline,.ion-ios-pulse,.ion-ios-pulse-strong,.ion-ios-rainy,.ion-ios-rainy-outline,.ion-ios-recording,.ion-ios-recording-outline,
	.ion-ios-redo,.ion-ios-redo-outline,.ion-ios-refresh,.ion-ios-refresh-empty,.ion-ios-refresh-outline,.ion-ios-reload,.ion-ios-reverse-camera,
	.ion-ios-reverse-camera-outline,.ion-ios-rewind,.ion-ios-rewind-outline,.ion-ios-rose,.ion-ios-rose-outline,.ion-ios-search,.ion-ios-search-strong,
	.ion-ios-settings,.ion-ios-settings-strong,.ion-ios-shuffle,.ion-ios-shuffle-strong,.ion-ios-skipbackward,.ion-ios-skipbackward-outline,
	.ion-ios-skipforward,.ion-ios-skipforward-outline,.ion-ios-snowy,.ion-ios-speedometer,.ion-ios-speedometer-outline,.ion-ios-star,.ion-ios-star-half,
	.ion-ios-star-outline,.ion-ios-stopwatch,.ion-ios-stopwatch-outline,.ion-ios-sunny,.ion-ios-sunny-outline,.ion-ios-telephone,
	.ion-ios-telephone-outline,.ion-ios-tennisball,.ion-ios-tennisball-outline,.ion-ios-thunderstorm,.ion-ios-thunderstorm-outline,.ion-ios-time,
	.ion-ios-time-outline,.ion-ios-timer,.ion-ios-timer-outline,.ion-ios-toggle,.ion-ios-toggle-outline,.ion-ios-trash,.ion-ios-trash-outline,
	.ion-ios-undo,.ion-ios-undo-outline,.ion-ios-unlocked,.ion-ios-unlocked-outline,.ion-ios-upload,.ion-ios-upload-outline,.ion-ios-videocam,
	.ion-ios-videocam-outline,.ion-ios-volume-high,.ion-ios-volume-low,.ion-ios-wineglass,.ion-ios-wineglass-outline,.ion-ios-world,.ion-ios-world-outline,
	.ion-ipad,.ion-iphone,.ion-ipod,.ion-jet,.ion-key,.ion-knife,.ion-laptop,.ion-leaf,.ion-levels,.ion-lightbulb,.ion-link,.ion-load-a,.ion-load-b,
	.ion-load-c,.ion-load-d,.ion-location,.ion-lock-combination,.ion-locked,.ion-log-in,.ion-log-out,.ion-loop,.ion-magnet,.ion-male,.ion-man,.ion-map,
	.ion-medkit,.ion-merge,.ion-mic-a,.ion-mic-b,.ion-mic-c,.ion-minus,.ion-minus-circled,.ion-minus-round,.ion-model-s,.ion-monitor,.ion-more,.ion-mouse,
	.ion-music-note,.ion-navicon,.ion-navicon-round,.ion-navigate,.ion-network,.ion-no-smoking,.ion-nuclear,.ion-outlet,.ion-paintbrush,.ion-paintbucket,
	.ion-paper-airplane,.ion-paperclip,.ion-pause,.ion-person,.ion-person-add,.ion-person-stalker,.ion-pie-graph,.ion-pin,.ion-pinpoint,.ion-pizza,
	.ion-plane,.ion-planet,.ion-play,.ion-playstation,.ion-plus,.ion-plus-circled,.ion-plus-round,.ion-podium,.ion-pound,.ion-power,.ion-pricetag,
	.ion-pricetags,.ion-printer,.ion-pull-request,.ion-qr-scanner,.ion-quote,.ion-radio-waves,.ion-record,.ion-refresh,.ion-reply,.ion-reply-all,
	.ion-ribbon-a,.ion-ribbon-b,.ion-sad,.ion-sad-outline,.ion-scissors,.ion-search,.ion-settings,.ion-share,.ion-shuffle,.ion-skip-backward,
	.ion-skip-forward,.ion-social-android,.ion-social-android-outline,.ion-social-angular,.ion-social-angular-outline,.ion-social-apple,
	.ion-social-apple-outline,.ion-social-bitcoin,.ion-social-bitcoin-outline,.ion-social-buffer,.ion-social-buffer-outline,.ion-social-chrome,
	.ion-social-chrome-outline,.ion-social-codepen,.ion-social-codepen-outline,.ion-social-css3,.ion-social-css3-outline,.ion-social-designernews,
	.ion-social-designernews-outline,.ion-social-dribbble,.ion-social-dribbble-outline,.ion-social-dropbox,.ion-social-dropbox-outline,.ion-social-euro,
	.ion-social-euro-outline,.ion-social-facebook,.ion-social-facebook-outline,.ion-social-foursquare,.ion-social-foursquare-outline,
	.ion-social-freebsd-devil,.ion-social-github,.ion-social-github-outline,.ion-social-google,.ion-social-google-outline,.ion-social-googleplus,
	.ion-social-googleplus-outline,.ion-social-hackernews,.ion-social-hackernews-outline,.ion-social-html5,.ion-social-html5-outline,
	.ion-social-instagram,.ion-social-instagram-outline,.ion-social-javascript,.ion-social-javascript-outline,.ion-social-linkedin,
	.ion-social-linkedin-outline,.ion-social-markdown,.ion-social-nodejs,.ion-social-octocat,.ion-social-pinterest,.ion-social-pinterest-outline,
	.ion-social-python,.ion-social-reddit,.ion-social-reddit-outline,.ion-social-rss,.ion-social-rss-outline,.ion-social-sass,.ion-social-skype,
	.ion-social-skype-outline,.ion-social-snapchat,.ion-social-snapchat-outline,.ion-social-tumblr,.ion-social-tumblr-outline,.ion-social-tux,
	.ion-social-twitch,.ion-social-twitch-outline,.ion-social-twitter,.ion-social-twitter-outline,.ion-social-usd,.ion-social-usd-outline,
	.ion-social-vimeo,.ion-social-vimeo-outline,.ion-social-whatsapp,.ion-social-whatsapp-outline,.ion-social-windows,.ion-social-windows-outline,
	.ion-social-wordpress,.ion-social-wordpress-outline,.ion-social-yahoo,.ion-social-yahoo-outline,.ion-social-yen,.ion-social-yen-outline,
	.ion-social-youtube,.ion-social-youtube-outline,.ion-soup-can,.ion-soup-can-outline,.ion-speakerphone,.ion-speedometer,.ion-spoon,.ion-star,
	.ion-stats-bars,.ion-steam,.ion-stop,.ion-thermometer,.ion-thumbsdown,.ion-thumbsup,.ion-toggle,.ion-toggle-filled,.ion-transgender,.ion-trash-a,
	.ion-trash-b,.ion-trophy,.ion-tshirt,.ion-tshirt-outline,.ion-umbrella,.ion-university,.ion-unlocked,.ion-upload,.ion-usb,.ion-videocamera,
	.ion-volume-high,.ion-volume-low,.ion-volume-medium,.ion-volume-mute,.ion-wand,.ion-waterdrop,.ion-wifi,.ion-wineglass,.ion-woman,.ion-wrench,.ion-xbox';
$Ionicons_get = explode(',', $Ionicons);
    
    $Linearicons_get =  array(
        'lnr-smartphone' => '\e83a','lnr-screen'=>'\e839','lnr-spell-check'=>'\e838','lnr-diamond'=>'\e845','lnr-linearicons'=>'\e845',
        'lnr-dinner'=>'\e847','lnr-drop'=>'\e804','lnr-home'=>'\e800','lnr-apartment'=>'\e801','lnr-pencil'=>'\e802','lnr-magic-wand'=>'\e803',
        'lnr-code'=>'\e86a','lnr-link'=>'\e86a','lnr-unlink'=>'\e86c','lnr-thumbs-up'=>'\e86d','lnr-thumbs-down'=>'\e86e',
        'lnr-magnifier'=>'\e86f','lnr-lighter'=>'\e805','lnr-poop'=>'\e806','lnr-sun'=>'\e807','lnr-moon'=>'\e808',
        'lnr-cloud'=>'\e809','lnr-cloud-upload'=>'\e80a','lnr-cloud-download'=>'\e80b','lnr-cloud-sync'=>'\e80c','lnr-cloud-check'=>'\e80d',
        'lnr-database'=>'\e80e','lnr-lock'=>'\e80f','lnr-cog'=>'\e810','lnr-trash'=>'\e811','lnr-dice'=>'\e812','lnr-heart'=>'\e813','lnr-star'=>'\e814',
        'lnr-star-half'=>'\e815','lnr-star-empty'=>'\e816','lnr-flag'=>'\e817','lnr-envelope'=>'\e818','lnr-paperclip'=>'\e819','lnr-inbox'=>'\e81a',
        'lnr-eye'=>'\e81b','lnr-printer'=>'\e81c','lnr-file-empty'=>'\e81d','lnr-file-add'=>'\e81e','lnr-enter'=>'\e81f','lnr-exit'=>'\e820','lnr-graduation-hat'=>'\e821',
        'lnr-license'=>'\e822','lnr-music-note'=>'\e823','lnr-film-play'=>'\e824','lnr-camera-video'=>'\e825','lnr-camera'=>'\e826','lnr-picture'=>'\e827','lnr-book'=>'\e828',
        'lnr-bookmark'=>'\e829','lnr-user'=>'\e82a','lnr-users'=>'\e82b','lnr-shirt'=>'\e82c','lnr-store'=>'\e82d','lnr-cart'=>'\e82e','lnr-tag'=>'\e82f','lnr-phone-handset'=>'\e830',
        'lnr-phone'=>'\e831','lnr-pushpin'=>'\e832','lnr-map-marker'=>'\e833','lnr-map'=>'\e834','lnr-location'=>'\e835',
        'lnr-calendar-full'=>'\e836','lnr-keyboard'=>'\e837','lnr-spell-check'=>'\e838','lnr-screen'=>'\e839','lnr-tablet'=>'\e83b',
        'lnr-laptop'=>'\e83c','lnr-laptop-phone'=>'\e83d','lnr-power-switch'=>'\e83e','lnr-bubble'=>'\e83f','lnr-heart-pulse'=>'\e840','lnr-construction'=>'\e841','lnr-pie-chart'=>'\e842',
        'lnr-chart-bars'=>'\e843','lnr-gift'=>'\e844','lnr-coffee-cup'=>'\e848','lnr-leaf'=>'\e849','lnr-paw'=>'\e84a','lnr-rocket'=>'\e84b','lnr-briefcase'=>'\e84c','lnr-bus'=>'\e84d','lnr-car'=>'e84e','lnr-train'=>'\e84f',
        'lnr-bicycle'=>'\e850','lnr-wheelchair'=>'\e851','lnr-select'=>'\e852','lnr-earth'=>'\e853','lnr-smile'=>'\e854','lnr-sad'=>'\e855',
        'lnr-neutral'=>'\e856','lnr-mustache'=>'\e857','lnr-alarm'=>'\e858','lnr-bullhorn'=>'\e859','lnr-volume-high'=>'\e85a','lnr-volume-medium'=>'\e85b',
        'lnr-volume-medium'=>'\e85b','lnr-volume-low'=>'\e85c','lnr-volume'=>'\e85d','lnr-mic'=>'\e85e','lnr-hourglass'=>'\e85f','lnr-undo'=>'\e860',
        'lnr-redo'=>'\e861','lnr-sync'=>'\e862','lnr-history'=>'\e863','lnr-clock'=>'\e864','lnr-download'=>'\e865','lnr-upload'=>'\e866',
        'lnr-enter-down'=>'\e867','lnr-exit-up'=>'\e868','lnr-bug'=>'\e869','lnr-cross'=>'\e870','lnr-menu'=>'\e871','lnr-list'=>'\e872','lnr-chevron-up'=>'\e873',
        'lnr-chevron-down'=>'\e874','lnr-chevron-left'=>'\e875','lnr-chevron-right'=>'\e876','lnr-arrow-up'=>'\e877','lnr-arrow-down'=>'\e878',
        'lnr-arrow-left'=>'\e879','lnr-arrow-right'=>'\e87a','lnr-move'=>'\e87b','lnr-warning'=>'\e87c','lnr-question-circle'=>'\e87d','lnr-menu-circle'=>'e87e','lnr-checkmark-circle'=>'\e87f','lnr-cross-circle'=>'\e880',
        'lnr-plus-circle'=>'\e881','lnr-circle-minus'=>'\e882','lnr-arrow-up-circle'=>'\e883','lnr-arrow-down-circle'=>'\e884','lnr-arrow-left-circle'=>'\e885','lnr-arrow-right-circle'=>'\e886','lnr-chevron-up-circle'=>'\e887',
        'lnr-chevron-down-circle'=>'\e888','lnr-chevron-left-circle'=>'\e889','lnr-chevron-right-circle'=>'\e88a','lnr-crop'=>'\e88b','lnr-frame-expand'=>'\e88c','lnr-frame-contract'=>'\e88d','lnr-layers'=>'\e88e','lnr-funnel'=>'\e88f','lnr-text-format'=>'\e890','lnr-text-format-remove'=>'\e891','lnr-text-size'=>'\e892',
        'lnr-bold'=>'\e893','lnr-italic'=>'\e894','lnr-underline'=>'\e895','lnr-strikethrough'=>'\e896','lnr-highlight'=>'\e897','lnr-text-align-left'=>'\e898','lnr-text-align-center'=>'\e899','lnr-text-align-right'=>'\e89a','lnr-text-align-justify'=>'\e89b','lnr-line-spacing'=>'\e89c','lnr-indent-increase'=>'\e89d','lnr-indent-decrease'=>'\e89e',
        'lnr-pilcrow'=>'\e89f','lnr-direction-ltr'=>'\e8a0','lnr-direction-rtl'=>'\e8a1','lnr-page-break'=>'\e8a2','lnr-sort-alpha-asc'=>'\e8a3','lnr-sort-amount-asc'=>'\e8a4','lnr-hand'=>'\e8a5','lnr-pointer-up'=>'\e8a6','lnr-pointer-right'=>'\e8a7','lnr-pointer-down'=>'\e8a8','lnr-pointer-left'=>'\e8a9',
        );
    
    $font_awesome_icons = array( 'fa-pinterest-p'=>'\f231','fa-glass' => '\f000', 'fa-music' => '\f001', 'fa-search' => '\f002', 'fa-envelope-o' => '\f003', 'fa-heart' => '\f004', 'fa-star' => '\f005', 'fa-star-o' => '\f006', 'fa-user' => '\f007', 'fa-film' => '\f008', 'fa-th-large' => '\f009', 'fa-th' => '\f00a', 'fa-th-list' => '\f00b', 'fa-check' => '\f00c', 'fa-times' => '\f00d', 'fa-search-plus' => '\f00e', 'fa-search-minus' => '\f010', 'fa-power-off' => '\f011', 'fa-signal' => '\f012', 'fa-cog' => '\f013', 'fa-trash-o' => '\f014', 'fa-home' => '\f015', 'fa-file-o' => '\f016', 'fa-clock-o' => '\f017', 'fa-road' => '\f018', 'fa-download' => '\f019', 'fa-arrow-circle-o-down' => '\f01a', 'fa-arrow-circle-o-up' => '\f01b', 'fa-inbox' => '\f01c', 'fa-play-circle-o' => '\f01d', 'fa-repeat' => '\f01e', 'fa-refresh' => '\f021', 'fa-list-alt' => '\f022', 'fa-lock' => '\f023', 'fa-flag' => '\f024', 'fa-headphones' => '\f025', 'fa-volume-off' => '\f026', 'fa-volume-down' => '\f027', 'fa-volume-up' => '\f028', 'fa-qrcode' => '\f029', 'fa-barcode' => '\f02a', 'fa-tag' => '\f02b', 'fa-tags' => '\f02c', 'fa-book' => '\f02d', 'fa-bookmark' => '\f02e', 'fa-print' => '\f02f', 'fa-camera' => '\f030', 'fa-font' => '\f031', 'fa-bold' => '\f032', 'fa-italic' => '\f033', 'fa-text-height' => '\f034', 'fa-text-width' => '\f035', 'fa-align-left' => '\f036', 'fa-align-center' => '\f037', 'fa-align-right' => '\f038', 'fa-align-justify' => '\f039', 'fa-list' => '\f03a', 'fa-outdent' => '\f03b', 'fa-indent' => '\f03c', 'fa-video-camera' => '\f03d', 'fa-picture-o' => '\f03e', 'fa-pencil' => '\f040', 'fa-map-marker' => '\f041', 'fa-adjust' => '\f042', 'fa-tint' => '\f043', 'fa-pencil-square-o' => '\f044', 'fa-share-square-o' => '\f045', 'fa-check-square-o' => '\f046', 'fa-arrows' => '\f047', 'fa-step-backward' => '\f048', 'fa-fast-backward' => '\f049', 'fa-backward' => '\f04a', 'fa-play' => '\f04b', 'fa-pause' => '\f04c', 'fa-stop' => '\f04d', 'fa-forward' => '\f04e', 'fa-fast-forward' => '\f050', 'fa-step-forward' => '\f051', 'fa-eject' => '\f052', 'fa-chevron-left' => '\f053', 'fa-chevron-right' => '\f054', 'fa-plus-circle' => '\f055', 'fa-minus-circle' => '\f056', 'fa-times-circle' => '\f057', 'fa-check-circle' => '\f058', 'fa-question-circle' => '\f059', 'fa-info-circle' => '\f05a', 'fa-crosshairs' => '\f05b', 'fa-times-circle-o' => '\f05c', 'fa-check-circle-o' => '\f05d', 'fa-ban' => '\f05e', 'fa-arrow-left' => '\f060', 'fa-arrow-right' => '\f061', 'fa-arrow-up' => '\f062', 'fa-arrow-down' => '\f063', 'fa-share' => '\f064', 'fa-expand' => '\f065', 'fa-compress' => '\f066', 'fa-plus' => '\f067', 'fa-minus' => '\f068', 'fa-asterisk' => '\f069', 'fa-exclamation-circle' => '\f06a', 'fa-gift' => '\f06b', 'fa-leaf' => '\f06c', 'fa-fire' => '\f06d', 'fa-eye' => '\f06e', 'fa-eye-slash' => '\f070', 'fa-exclamation-triangle' => '\f071', 'fa-plane' => '\f072', 'fa-calendar' => '\f073', 'fa-random' => '\f074', 'fa-comment' => '\f075', 'fa-magnet' => '\f076', 'fa-chevron-up' => '\f077', 'fa-chevron-down' => '\f078', 'fa-retweet' => '\f079', 'fa-shopping-cart' => '\f07a', 'fa-folder' => '\f07b', 'fa-folder-open' => '\f07c', 'fa-arrows-v' => '\f07d', 'fa-arrows-h' => '\f07e', 'fa-bar-chart-o' => '\f080', 'fa-twitter-square' => '\f081', 'fa-facebook-square' => '\f082', 'fa-camera-retro' => '\f083', 'fa-key' => '\f084', 'fa-cogs' => '\f085', 'fa-comments' => '\f086', 'fa-thumbs-o-up' => '\f087', 'fa-thumbs-o-down' => '\f088', 'fa-star-half' => '\f089', 'fa-heart-o' => '\f08a', 'fa-sign-out' => '\f08b', 'fa-linkedin-square' => '\f08c', 'fa-thumb-tack' => '\f08d', 'fa-external-link' => '\f08e', 'fa-sign-in' => '\f090', 'fa-trophy' => '\f091', 'fa-github-square' => '\f092', 'fa-upload' => '\f093', 'fa-lemon-o' => '\f094', 'fa-phone' => '\f095', 'fa-square-o' => '\f096', 'fa-bookmark-o' => '\f097', 'fa-phone-square' => '\f098', 'fa-twitter' => '\f099', 'fa-facebook' => '\f09a', 'fa-github' => '\f09b', 'fa-unlock' => '\f09c', 'fa-credit-card' => '\f09d', 'fa-rss' => '\f09e', 'fa-hdd-o' => '\f0a0', 'fa-bullhorn' => '\f0a1', 'fa-bell' => '\f0f3', 'fa-certificate' => '\f0a3', 'fa-hand-o-right' => '\f0a4', 'fa-hand-o-left' => '\f0a5', 'fa-hand-o-up' => '\f0a6', 'fa-hand-o-down' => '\f0a7', 'fa-arrow-circle-left' => '\f0a8', 'fa-arrow-circle-right' => '\f0a9', 'fa-arrow-circle-up' => '\f0aa', 'fa-arrow-circle-down' => '\f0ab', 'fa-globe' => '\f0ac', 'fa-wrench' => '\f0ad', 'fa-tasks' => '\f0ae', 'fa-filter' => '\f0b0', 'fa-briefcase' => '\f0b1', 'fa-arrows-alt' => '\f0b2', 'fa-users' => '\f0c0', 'fa-link' => '\f0c1', 'fa-cloud' => '\f0c2', 'fa-flask' => '\f0c3', 'fa-scissors' => '\f0c4', 'fa-files-o' => '\f0c5', 'fa-paperclip' => '\f0c6', 'fa-floppy-o' => '\f0c7', 'fa-square' => '\f0c8', 'fa-bars' => '\f0c9', 'fa-list-ul' => '\f0ca', 'fa-list-ol' => '\f0cb', 'fa-strikethrough' => '\f0cc', 'fa-underline' => '\f0cd', 'fa-table' => '\f0ce', 'fa-magic' => '\f0d0', 'fa-truck' => '\f0d1', 'fa-pinterest' => '\f0d2', 'fa-pinterest-square' => '\f0d3', 'fa-google-plus-square' => '\f0d4', 'fa-google-plus' => '\f0d5', 'fa-money' => '\f0d6', 'fa-caret-down' => '\f0d7', 'fa-caret-up' => '\f0d8', 'fa-caret-left' => '\f0d9', 'fa-caret-right' => '\f0da', 'fa-columns' => '\f0db', 'fa-sort' => '\f0dc', 'fa-sort-desc' => '\f0dd', 'fa-sort-asc' => '\f0de', 'fa-envelope' => '\f0e0', 'fa-linkedin' => '\f0e1', 'fa-undo' => '\f0e2', 'fa-gavel' => '\f0e3', 'fa-tachometer' => '\f0e4', 'fa-comment-o' => '\f0e5', 'fa-comments-o' => '\f0e6', 'fa-bolt' => '\f0e7', 'fa-sitemap' => '\f0e8', 'fa-umbrella' => '\f0e9', 'fa-clipboard' => '\f0ea', 'fa-lightbulb-o' => '\f0eb', 'fa-exchange' => '\f0ec', 'fa-cloud-download' => '\f0ed', 'fa-cloud-upload' => '\f0ee', 'fa-user-md' => '\f0f0', 'fa-stethoscope' => '\f0f1', 'fa-suitcase' => '\f0f2', 'fa-bell-o' => '\f0a2', 'fa-coffee' => '\f0f4', 'fa-cutlery' => '\f0f5', 'fa-file-text-o' => '\f0f6', 'fa-building-o' => '\f0f7', 'fa-hospital-o' => '\f0f8', 'fa-ambulance' => '\f0f9', 'fa-medkit' => '\f0fa', 'fa-fighter-jet' => '\f0fb', 'fa-beer' => '\f0fc', 'fa-h-square' => '\f0fd', 'fa-plus-square' => '\f0fe', 'fa-angle-double-left' => '\f100', 'fa-angle-double-right' => '\f101', 'fa-angle-double-up' => '\f102', 'fa-angle-double-down' => '\f103', 'fa-angle-left' => '\f104', 'fa-angle-right' => '\f105', 'fa-angle-up' => '\f106', 'fa-angle-down' => '\f107', 'fa-desktop' => '\f108', 'fa-laptop' => '\f109', 'fa-tablet' => '\f10a', 'fa-mobile' => '\f10b', 'fa-circle-o' => '\f10c', 'fa-quote-left' => '\f10d', 'fa-quote-right' => '\f10e', 'fa-spinner' => '\f110', 'fa-circle' => '\f111', 'fa-reply' => '\f112', 'fa-github-alt' => '\f113', 'fa-folder-o' => '\f114', 'fa-folder-open-o' => '\f115', 'fa-smile-o' => '\f118', 'fa-frown-o' => '\f119', 'fa-meh-o' => '\f11a', 'fa-gamepad' => '\f11b', 'fa-keyboard-o' => '\f11c', 'fa-flag-o' => '\f11d', 'fa-flag-checkered' => '\f11e', 'fa-terminal' => '\f120', 'fa-code' => '\f121', 'fa-reply-all' => '\f122', 'fa-star-half-o' => '\f123', 'fa-location-arrow' => '\f124', 'fa-crop' => '\f125', 'fa-code-fork' => '\f126', 'fa-chain-broken' => '\f127', 'fa-question' => '\f128', 'fa-info' => '\f129', 'fa-exclamation' => '\f12a', 'fa-superscript' => '\f12b', 'fa-subscript' => '\f12c', 'fa-eraser' => '\f12d', 'fa-puzzle-piece' => '\f12e', 'fa-microphone' => '\f130', 'fa-microphone-slash' => '\f131', 'fa-shield' => '\f132', 'fa-calendar-o' => '\f133', 'fa-fire-extinguisher' => '\f134', 'fa-rocket' => '\f135', 'fa-maxcdn' => '\f136', 'fa-chevron-circle-left' => '\f137', 'fa-chevron-circle-right' => '\f138', 'fa-chevron-circle-up' => '\f139', 'fa-chevron-circle-down' => '\f13a', 'fa-html5' => '\f13b', 'fa-css3' => '\f13c', 'fa-anchor' => '\f13d', 'fa-unlock-alt' => '\f13e', 'fa-bullseye' => '\f140', 'fa-ellipsis-h' => '\f141', 'fa-ellipsis-v' => '\f142', 'fa-rss-square' => '\f143', 'fa-play-circle' => '\f144', 'fa-ticket' => '\f145', 'fa-minus-square' => '\f146', 'fa-minus-square-o' => '\f147', 'fa-level-up' => '\f148', 'fa-level-down' => '\f149', 'fa-check-square' => '\f14a', 'fa-pencil-square' => '\f14b', 'fa-external-link-square' => '\f14c', 'fa-share-square' => '\f14d', 'fa-compass' => '\f14e', 'fa-caret-square-o-down' => '\f150', 'fa-caret-square-o-up' => '\f151', 'fa-caret-square-o-right' => '\f152', 'fa-eur' => '\f153', 'fa-gbp' => '\f154', 'fa-usd' => '\f155', 'fa-inr' => '\f156', 'fa-jpy' => '\f157', 'fa-rub' => '\f158', 'fa-krw' => '\f159', 'fa-btc' => '\f15a', 'fa-file' => '\f15b', 'fa-file-text' => '\f15c', 'fa-sort-alpha-asc' => '\f15d', 'fa-sort-alpha-desc' => '\f15e', 'fa-sort-amount-asc' => '\f160', 'fa-sort-amount-desc' => '\f161', 'fa-sort-numeric-asc' => '\f162', 'fa-sort-numeric-desc' => '\f163', 'fa-thumbs-up' => '\f164', 'fa-thumbs-down' => '\f165', 'fa-youtube-square' => '\f166', 'fa-youtube' => '\f167', 'fa-xing' => '\f168', 'fa-xing-square' => '\f169', 'fa-youtube-play' => '\f16a', 'fa-dropbox' => '\f16b', 'fa-stack-overflow' => '\f16c', 'fa-instagram' => '\f16d', 'fa-flickr' => '\f16e', 'fa-adn' => '\f170', 'fa-bitbucket' => '\f171', 'fa-bitbucket-square' => '\f172', 'fa-tumblr' => '\f173', 'fa-tumblr-square' => '\f174', 'fa-long-arrow-down' => '\f175', 'fa-long-arrow-up' => '\f176', 'fa-long-arrow-left' => '\f177', 'fa-long-arrow-right' => '\f178', 'fa-apple' => '\f179', 'fa-windows' => '\f17a', 'fa-android' => '\f17b', 'fa-linux' => '\f17c', 'fa-dribbble' => '\f17d', 'fa-skype' => '\f17e', 'fa-foursquare' => '\f180', 'fa-trello' => '\f181', 'fa-female' => '\f182', 'fa-male' => '\f183', 'fa-gittip' => '\f184', 'fa-sun-o' => '\f185', 'fa-moon-o' => '\f186', 'fa-archive' => '\f187', 'fa-bug' => '\f188', 'fa-vk' => '\f189', 'fa-weibo' => '\f18a', 'fa-renren' => '\f18b', 'fa-pagelines' => '\f18c', 'fa-stack-exchange' => '\f18d', 'fa-arrow-circle-o-right' => '\f18e', 'fa-arrow-circle-o-left' => '\f190', 'fa-caret-square-o-left' => '\f191', 'fa-dot-circle-o' => '\f192', 'fa-wheelchair' => '\f193', 'fa-vimeo-square' => '\f194', 'fa-try' => '\f195', 'fa-plus-square-o' => '\f196', 'fa-space-shuttle' => '\f197', 'fa-slack' => '\f198', 'fa-envelope-square' => '\f199', 'fa-wordpress' => '\f19a', 'fa-openid' => '\f19b', 'fa-university' => '\f19c', 'fa-graduation-cap' => '\f19d', 'fa-yahoo' => '\f19e', 'fa-google' => '\f1a0', 'fa-reddit' => '\f1a1', 'fa-reddit-square' => '\f1a2', 'fa-stumbleupon-circle' => '\f1a3', 'fa-stumbleupon' => '\f1a4', 'fa-delicious' => '\f1a5', 'fa-digg' => '\f1a6', 'fa-pied-piper' => '\f1a7', 'fa-pied-piper-alt' => '\f1a8', 'fa-drupal' => '\f1a9', 'fa-joomla' => '\f1aa', 'fa-language' => '\f1ab', 'fa-fax' => '\f1ac', 'fa-building' => '\f1ad', 'fa-child' => '\f1ae', 'fa-paw' => '\f1b0', 'fa-spoon' => '\f1b1', 'fa-cube' => '\f1b2', 'fa-cubes' => '\f1b3', 'fa-behance' => '\f1b4', 'fa-behance-square' => '\f1b5', 'fa-steam' => '\f1b6', 'fa-steam-square' => '\f1b7', 'fa-recycle' => '\f1b8', 'fa-car' => '\f1b9', 'fa-taxi' => '\f1ba', 'fa-tree' => '\f1bb', 'fa-spotify' => '\f1bc', 'fa-deviantart' => '\f1bd', 'fa-soundcloud' => '\f1be', 'fa-database' => '\f1c0', 'fa-file-pdf-o' => '\f1c1', 'fa-file-word-o' => '\f1c2', 'fa-file-excel-o' => '\f1c3', 'fa-file-powerpoint-o' => '\f1c4', 'fa-file-image-o' => '\f1c5', 'fa-file-archive-o' => '\f1c6', 'fa-file-audio-o' => '\f1c7', 'fa-file-video-o' => '\f1c8', 'fa-file-code-o' => '\f1c9', 'fa-vine' => '\f1ca', 'fa-codepen' => '\f1cb', 'fa-jsfiddle' => '\f1cc', 'fa-life-ring' => '\f1cd', 'fa-circle-o-notch' => '\f1ce', 'fa-rebel' => '\f1d0', 'fa-empire' => '\f1d1', 'fa-git-square' => '\f1d2', 'fa-git' => '\f1d3', 'fa-hacker-news' => '\f1d4', 'fa-tencent-weibo' => '\f1d5', 'fa-qq' => '\f1d6', 'fa-weixin' => '\f1d7', 'fa-paper-plane' => '\f1d8', 'fa-paper-plane-o' => '\f1d9', 'fa-history' => '\f1da', 'fa-circle-thin' => '\f1db', 'fa-header' => '\f1dc', 'fa-paragraph' => '\f1dd', 'fa-sliders' => '\f1de', 'fa-share-alt' => '\f1e0', 'fa-share-alt-square' => '\f1e1', 'fa-bomb' => '\f1e2' );
        
    $iconas = array(); 
    foreach ($Ionicons_get as $icons)
    {
        $iconas[str_replace('.', '', $icons)] = array('group' => 'Ionicons');
    }    
    foreach ($Linearicons_get as $class=>$cons)
    {
        $iconas['lnr '.$class] = array('group' => 'linearicons');
    }    
    foreach ($font_awesome_icons as $class => $con)
    {
        $iconas['fa '.$class] = array('group' => 'fontawesome');
    }      
    $sets['dt_icon_set'] = array(
        'font-style-src' => get_template_directory_uri().'../css/custom_icon.css',
        'container-class' => 'fa-lg', 
        'groups' => array(
            'linearicons' => esc_html__('Linearicons', 'faded'),           
            'Ionicons' => esc_html__('Ionicons Icons', 'faded'),
            'fontawesome' => esc_html__('Fontawesome Icons', 'faded')            
        ),
        'icons' => $iconas
    );
    return $sets;
}
add_filter('fw_option_type_icon_sets', 'faded_theme_new_icon_set');
